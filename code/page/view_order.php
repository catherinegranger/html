<?php

$debug_flag = FALSE;
$order_number = 0;
$errors = array();
$userId = 0;
$order_found = FALSE;

if ($_SESSION["userCakeUser"]) {
  $userId = $_SESSION["userCakeUser"]["user_id"];
}

if ((isset ($two)) && (isset ($tri)) && ($tri > 0)) {
  $order_placed = $two;
  $order_number = $tri;

  $sql = "SELECT o.o_id, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2, ";
  $sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone,";
  $sql .= " o.instructions, o.need_by_date,  o.include_card, o.include_card_cost,o.include_card_msg, o.tax, o.shipping, o.adult_signature,  o.original_shipping, o.original_adult_signature, o.shipping_method, o.authorization_code, o.transaction_id, o.payment_method, o.account_number, o.status, o.status_timestamp, o.giftcard_id, o.giftcard_total, o.discount_id, o.discount_total, o.grand_total, o.cart_total, ";
  $sql .= " r.rec_id AS recipient_id, r.user_id, r.first_name, r.last_name, r.address1, r.address2, r.city, r.state, r.zipcode, r.email, r.phone, o.placed ";
  $sql .= " FROM store_order AS o, recipient AS r";
  if ($debug_flag == TRUE) {
    $sql .= " WHERE o.o_id = '".$order_number."'  AND o.rec_id = r.rec_id";
  }
  else {
    $sql .= " WHERE o.o_id = '".$order_number."' AND o.placed = '".$order_placed."' AND o.rec_id = r.rec_id";
  }
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  if ($row) {
    $order_found = TRUE;
    $wine_club = FALSE;
    $userId = $row["user_id"];
    if ($userId > 0) {
      $userDetails = fetchUserDetails(NULL, NULL, $userId);
      $subscription_id = $userDetails["subscription_id"];
      if ($subscription_id > 0)
	$wine_club = TRUE;
    }
    $smarty->assign('wine_club',$wine_club);
    $shipping_savings = 0;
    $adult_signature_savings = 0;
    if ($row["original_shipping"] > 0) {
      $shipping_savings = fixCurrency($row["original_shipping"] - $row["shipping"]);
    }
    if ($row["original_adult_signature"] > 0) {
      $adult_signature_savings = fixCurrency($row["original_adult_signature"] - $row["adult_signature"]);
    }
    $giftcard_payment = fixCurrency($row["grand_total"] - $row["giftcard_total"]);
    if ($row["giftcard_id"] > 0) {
      $giftcard = getGiftCardById($row["giftcard_id"]);
      $giftcard_balance = fixCurrency($giftcard["balance"]);
    }
    $recipient = array("rec_id" => $row["recipient_id"],
		       "user_id" => $row["user_id"],
		       "first_name" => $row["first_name"],
		       "last_name" => $row["last_name"],
		       "name" => $row["first_name"]." ".$row["last_name"],
		       "email" => $row["email"],
		       "phone" => $row["phone"],
		       "address1" => $row["address1"],
		       "address2" => $row["address2"],
		       'address' => $row["address1"]. " ".$row["address2"],
		       "city" => $row["city"],
		       "state" => $row["state"],
		       "zipcode" => $row["zipcode"]);
    $order = array('o_id' => $order_number,
		   'invoice_number' => getInvoiceNumber($order_number),
		   'rec_id' => $recipient["rec_id"],
		   'status' => $scodes[$row["status"]],
		   'status_timestamp' => date('m-d-y', $row["status_timestamp"]),
		   'placed' => date('m-d-y g:i A', $row["placed"]),
		   'first_name' => $row["ship_first_name"],
		   'last_name' => $row["ship_last_name"],
		   'name' => $row["ship_first_name"]." ".$row["ship_last_name"],
		   'address1' => $row["ship_address1"],
		   'address2' => $row["ship_address2"],
		   'address' => $row["ship_address1"]. " ".$row["ship_address2"],
		   'city' => $row["ship_city"],
		   'state' => $row["ship_state"],
		   'zipcode' => $row["ship_zipcode"],
		   'email' => $row["ship_email"],
		   'phone' => $row["ship_phone"],
		   'shipping_method' => $row["shipping_method"],
		   'instructions' => $row["instructions"],
		   'need_by_date' => $row["need_by_date"],
		   'include_card' => $row["include_card"],
		   'include_card_cost' => $row["include_card_cost"],
		   'include_card_msg' => $row["include_card_msg"],
		   'tax' => $row["tax"],
		   'shipping' => $row["shipping"],
		   'adult_signature' => $row["adult_signature"],
		   'shipping_savings' => $shipping_savings,
		   'adult_signature_savings' => $adult_signature_savings,
		   'cart_total' => $row["cart_total"],
		   'grand_total' => $row["grand_total"],
		   'giftcard_id' => $row["giftcard_id"],
		   'giftcard_total' => $row["giftcard_total"],
		   'giftcard_payment' => $giftcard_payment,
		   'giftcard_balance' => $giftcard_balance,
		   'discount_id' => $row["discount_id"],
		   'discount_name' => "",
		   'authorization_code' => $row["authorization_code"],
		   'transaction_id' => $row["transaction_id"],
		   'payment_method' => $row["payment_method"],
		   'account_number' => $row["account_number"],
		   );
    $discount_sql = "SELECT order_discount.name AS discount_name FROM store_order, order_discount WHERE store_order.o_id = '".$order_number."' AND store_order.discount_id = order_discount.discount_id";
    $discount_result = $mydb->runSql($discount_sql);
    $discount_row = $mydb->getAssoc($discount_result);
    if ($discount_row) {
      $order["discount_name"] = $discount_row["discount_name"];
    }
  }
  $order_items = getOrderItems($order_number, $one);
  $smarty->assign('order_found',$order_found);
  $smarty->assign('recipient',$recipient);
  $smarty->assign('order',$order);
  $smarty->assign('items',$order_items);
}

?>