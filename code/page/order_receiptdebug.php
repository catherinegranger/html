<?PHP

$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];

$debug_flag = TRUE;
$order_found = FALSE;
$order_processed = FALSE;
$order_success = FALSE;
$receipt_success = TRUE;

$response_code = $two;
$order_placed = $tri;
$order_number = $for;
$to = "webshop@bluedanubewine.com";
$to2 = "frank@bluedanubewine.com,zsuzsa@bluedanubewine.com,catherine@bluedanubewine.com,eugenie@bluedanubewine.com";
$toc = "catherine@bluedanubewine.com";
$header = 'From: Webshop@bluedanubewine.com';
$subject = "New Order - Payment successful";
$order_url = "https://www.bluedanubewine.com/amn/edit_order/".$order_number;

$log_file = $root_dir."/email_notifications.log";
date_default_timezone_set('UTC'); //necessary for the following date to set timezone

if (($response_code == '1') || ($response_code == '4')) { // success or on hold
  $order_success = TRUE;
  $sql = "SELECT response_code, response_reason_text, authorization_code, transaction_id, payment_method, account_number, instructions, need_by_date,  o.include_card, o.include_card_cost,o.include_card_msg, o.order_notification_sent, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
  $sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone,";
  $sql .= " r.user_id, r.first_name, r.last_name, r.address1, r.address2,";
  $sql .= " r.city, r.state, r.zipcode, r.email, o.status, o.tax, o.shipping, o.adult_signature, o.grand_total, o.giftcard_id, o.giftcard_total, o.o_id, r.phone,";
  $sql .= " FROM_UNIXTIME(o.placed, '%c-%e-%y %l:%i%p') AS placed";
  $sql .= " FROM store_order AS o, recipient AS r";
  if ($debug_flag == TRUE) {
    $sql .= " WHERE o.o_id = '".$order_number."' AND o.rec_id = r.rec_id";
  }
  else {
    $sql .= " WHERE o.o_id = '".$order_number."' AND o.placed = '".$order_placed."' AND o.rec_id = r.rec_id";
  }
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  if ($row) {
    $order_found = TRUE;
    $user_id = $row["user_id"];
    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $email = $row["email"];
    $order_status = $row["status"];
    $giftcard = NULL;
    $giftcard_balance = 0;
    $giftcard_id = $row["giftcard_id"]; //debug;
    $smarty->assign('giftcard_id', $giftcard_id); // debug;
    if ($row["giftcard_id"] > 0) {
      $giftcard = getGiftCardById($row["giftcard_id"]);
      $giftcard_balance = fixCurrency($giftcard["balance"]);
    }
    $giftcard_payment = fixCurrency($row["grand_total"] - $row["giftcard_total"]);
    $order = array('o_id' => $row["o_id"],
		   'invoice_number' => getInvoiceNumber($row["o_id"]),
		   'placed' => $row["placed"],
		   'tax' => $row["tax"],
		   'shipping' => $row["shipping"],
		   'adult_signature' => $row["adult_signature"],
		   'grand_total' => $row["grand_total"],
		   'status' => $scodes[$row["status"]],
		   'name' => $row["first_name"]." ".$row["last_name"],
		   'address' => $row["address1"]. " ".$row["address2"],
		   'city' => $row["city"]. ", ".strtoupper($row["state"]). " " .$row["zipcode"],
		   'email' => $row["email"],
		   'phone' => $row["phone"],
		   'ship_name' => $row["ship_first_name"]." ".$row["ship_last_name"],
		   'ship_address' => $row["ship_address1"]. " ".$row["ship_address2"],
		   'ship_city' => $row["ship_city"]. ", ".strtoupper($row["ship_state"]). " " .$row["ship_zipcode"],
		   'ship_email' => $row["ship_email"],
		   'ship_phone' => $row["ship_phone"],
		   'need_by_date' => $row["need_by_date"],
		   'include_card' => $row["include_card"],
		   'include_card_cost' => $row["include_card_cost"],
		   'include_card_msg' => $row["include_card_msg"],
		   'giftcard_id' => $row["giftcard_id"],
		   'giftcard_total' => $row["giftcard_total"],
		   'giftcard_payment' => $giftcard_payment,
		   'giftcard_balance' => $giftcard_balance,
		   'instructions' => $row["instructions"],
		   'response_code' => $row["response_code"],
		   'response_reason_text' => $row["response_reason_text"],
		   'authorization_code' => $row["authorization_code"],
		   'transaction_id' => $row["transaction_id"],
		   'payment_method' => $row["payment_method"],
		   'account_number' => $row["account_number"],
		   'order_notification_sent' => $row["order_notification_sent"],
		   );
    //$order_exists = giftCardOrderExists($giftcard, $order["o_id"]);
    //$smarty->assign('order_exists', $order_exists); 
    if (($giftcard) && (!giftCardOrderExists($giftcard, $order["o_id"]))) { // order used gift card - don't double charge
      $smarty->assign('order_id', $order["o_id"]); // debug;
      if (($order_status == 2) || ($order_status == 23) || ($order_status == 5) || ($order_status == 8)) {
	// from review or relay_response
	if (chargeGiftCard($giftcard, $order["giftcard_payment"], $order["o_id"])) {
	  $order["giftcard_balance"] = fixCurrency($order["giftcard_balance"] - $order["giftcard_payment"]);
	}
	if ($order["giftcard_balance"] < 0) { // negative balance
	  $order_status = 22; // Gift Card Maxed Out
	  $values = array("status" => $order_status );
	  $mydb->update("store_order", $values, $params = " WHERE o_id = '".$row["o_id"]."'");
	  $order["status"] = $scodes[$order_status];
	  $smarty->assign('charge_card', "No Charge, Giftcard maxed out"); // debug;
	  $errors[] = lang("GIFTCARD_MAXEDOUT");
	  $receipt_success = FALSE;
	}
	else if ($row["giftcard_total"] == 0) { // order fully payed with gift card
	  $order_status = 21; // Payed with Gift Card
	  $values = array("status" => $order_status, "payment_method" => "Gift Card");
	  $mydb->update("store_order", $values, $params = " WHERE o_id = '".$row["o_id"]."'");
	  $order["status"] = $scodes[$order_status];
	  $smarty->assign('charge_card', "Yes status = 21, fully payed"); // debug;
	  $order["payment_method"] = "Gif Card";
	}
	else {
	  $smarty->assign('charge_card', "Yes in normal payment"); // debug;
	}
      }
    }
    if (($order_status  == 0) || ($order_status  == 1) || ($order_status  == 3) || ($order_status  == 4)) {
      if ($debug_flag == FALSE) {
	$order_processed = TRUE;
      }
    }
    $smarty->assign('order', $order);
    $reply = "From: \"".$first_name." ".$last_name."\" <".$email.">";
    $customer = $first_name." ".$last_name." (".$email.")";
    $status_message = "New Order (".$order["status"].")";
    if ($response_code == '4') {
      $subject = $status_message." - Payment on hold from: ";
      $message = $status_message.": ".$order_url." is on hold for your approval and payed by ";
    }
    else {
      $subject =  $status_message." - Payment successful from: ";
      $message =  $status_message.": ".$order_url." has been placed at the website and payed by ";
    }
    $subject .= $customer;
    $message .= $customer;
    $message .= ". Please log in to view it.";
    $sql = "SELECT store_order_item.ident, store_order_item.type, store_order_item.quantity, store_order_item.price, vintage.year, vintage.size, vintage.product_id, vintage.name AS vint_name, winery.name AS wy_name FROM store_order_item, vintage LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE vintage.vint_id = store_order_item.ident AND store_order_item.o_id = '".$order_number."' ORDER BY ident";
    $result = $mydb->runSql($sql);
    $counter = 0;
    while ($row = $mydb->getAssoc($result)) {
      if ($row["type"] == BDW_LINE_ITEM_GIFTCARD) {
	$product_name = BDW_GIFTCARD_PRODUCTID;
	$product_id = BDW_GIFTCARD_PRODUCTID;
	$giftcard = getGiftCardById($row["ident"]);
	$created_date = $giftcard["created_date"];
	if (($giftcard["delivered"] == 0) && ($giftcard["activated"] == 0) && ($giftcard["delivery_date"] <= $giftcard["created_date"])) {
	  $giftcard_url = "https://www.bluedanubewine.com/giftcard/".$giftcard["created_date"];
	  $giftcard_subject = $giftcard["purchaser_name"]." sent you a $".$giftcard["value"]." E-Gift Card for BlueDanubeWine.com";
	  $giftcard_message = "Hello ".$giftcard["recipient_name"].",\n".$giftcard_subject.".\n Please follow the link below to view your E-Gift Card.\n".$giftcard_url."\n For any questions regarding your E-Gift Card, please contact webshop@bluedanubewine.com. \nEnjoy your gift!\nThe Blue Danube Webshop Team" ;
	  $giftcard_to = $giftcard["recipient_email"];
	  mail($giftcard_to, $giftcard_subject, $giftcard_message, $header);
	  markGiftCardDelivered($giftcard);
	}
      }
      else {
	$created_date = time();
      	//$product_name = makeOrderItemDescription($row["year"], $row["wy_name"], $row["vint_name"]);
	$product_name = fullMobileCartName($row["wy_name"], $row["vint_name"],$row["year"],$row["size"]);
	$product_id = $row["product_id"];
	if (!$product_id)
	  $product_id = "TST ".$row["ident"];
      }
      $items[$counter++] = array('product_id' => $product_id,
				 'product_name' => $product_name,
				 'created_date' => $created_date,
				 'ident' => $product_name,
				 'quantity' => $row["quantity"],
				 'price' => fixCurrency($row["price"]),
				 'total_price' => fixCurrency($row["price"]*$row["quantity"]),
				 );
    }
    $smarty->assign('items',$items);
  }
  unset($_SESSION['cart_total']);
  unset($_SESSION['grand_total']);
  unset($_SESSION['cart_qty']);
  unset($_SESSION['cart']);
  unset($_SESSION["discount_name"]);
  unset($_SESSION['order']);
  unset($_SESSION['recipient']);
}
else { // response code = error code
  $sql = "SELECT  o.o_id, response_reason_text, o.order_notification_sent, r.first_name, r.last_name, r.email";
  $sql .= " FROM store_order AS o, recipient AS r";
  if ($debug_flag == TRUE) {
    $sql .= " WHERE o.o_id = '".$order_number."' AND o.rec_id = r.rec_id";
  }
  else {
    $sql .= " WHERE o.o_id = '".$order_number."' AND o.placed = '".$order_placed."' AND o.rec_id = r.rec_id";
  }
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  if ($row) {
    $order_found = TRUE;
    $first_name = $row["first_name"];
    $last_name = $row["last_name"];
    $email = $row["email"];
    $response_reason_text = $row["response_reason_text"];
    if ($response_code == '2') {
      $response_reason_text .= " If your credit card was issued by a non-US based bank, please select option 'Please Contact Me' as your shipping method on the 'Enter Billing & Shipping' page and we will send you an invoice to complete the purchase. We can also contact us at webshop@bluedanubewine.com for additional assistance.";
    }
    $order = array('o_id' => $row["o_id"],
		   'response_reason_text' => $response_reason_text,
		   'order_notification_sent' => $row["order_notification_sent"],
		   );

    $smarty->assign('order', $order);
    $reply = "From: \"".$first_name." ".$last_name."\" <".$email.">";
    $customer = $first_name." ".$last_name." (".$email.")";
    $subject = "New Order - Payment Declined From ";
    $subject .= $customer;
    $message = "A new order ".$order_url." has been placed by ";
    $message .= $customer;
    $message .= " but had the following payment issues: ";
    $message .= $row["response_reason_text"];
    $message .= " Please log in to view it.";
  }
  unset($_SESSION['order']);
  unset($_SESSION['recipient']);
}

if ($order_found) {
  if ($order["order_notification_sent"]) {
    if (!$debug_flag) {
      $order_processed = TRUE;
    }
  }
  else  {
    $mydb->update("store_order",array("order_notification_sent" => 1), " WHERE o_id = '".$order["o_id"]."'"); 
  }
}
if (($order_found == TRUE) && ($order_processed == FALSE)) {
  if ($debug_flag == FALSE) {
    mail($to, $subject, $message, $header);
  }
  else {
    mail($toc, $subject, $message, $header);
  }
  if ($first_name && $email && ($response_code != '2') && ($response_code != '3'))
    sendWelcomeEMail($first_name, $email, $user_id, $debug_flag);
  file_put_contents($log_file, sprintf("Sending email at: %s\n", date(DATE_RFC2822)), FILE_APPEND);
  $email_log = $header." ".$subject." ".$message."\n";
  file_put_contents($log_file, $email_log, FILE_APPEND);

  //$notification_sent = array("order_notification_sent" => 1);
  //if (!$debug_flag) $mydb->update("store_order",$notification_sent, " WHERE o_id = '".$order["o_id"]."'"); 
}

$nondebug = TRUE;
if ($debug_flag)
  $nondebug = FALSE;
$smarty->assign('nondebug',$nondebug);
$smarty->assign('response_code',$response_code);
$smarty->assign('order_number',$order_number);
$smarty->assign('order_found', $order_found);
$smarty->assign('order_processed', $order_processed);
$smarty->assign('order_success', $order_success);
$smarty->assign('receipt_success', $receipt_success);
$smarty->assign('response_code',$response_code); // debug
$smarty->assign('order_placed',$order_placed);// debug
$smarty->assign('order_number',$order_number);// debug

$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");

?>