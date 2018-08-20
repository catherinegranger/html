<?PHP

if ($_SESSION["entry"] && $_SESSION["cart"]) {
  if ($first_name && $last_name && $address1 && $city && $state && $zipcode && $email && $phone && (($ship_first_name && $ship_last_name && $ship_address1 && $ship_city && $ship_state && $ship_zipcode))) {
    if (validEmail($email)) {
      $recipient = array("first_name" => $first_name,
			 "last_name" => $last_name,
			 "joined" => mktime(),
			 "updated" => mktime(),
			 "email" => $email,
			 "phone" => $phone,
			 "address1" => $address1,
			 "address2" => $address2,
			 "city" => $city,
			 "state" => $state,
			 "zipcode" => $zipcode);
      $mydb->insert("recipient",$recipient);
      $rec_id = $mydb->getID();
      $order = array('rec_id' => $rec_id,
		     'status' => '5',
		     'deleted' => '0',
		     'first_name' => $ship_first_name,
		     'last_name' => $ship_last_name,
		     'address1' => $ship_address1,
		     'address2' => $ship_address2,
		     'city' => $ship_city,
		     'state' => $ship_state,
		     'zipcode' => $ship_zipcode,
		     'email' => $ship_email,
		     'phone' => $ship_phone,
		     'instructions' => $instructions,
		     'grand_total' => fixCurrency($the_total),
		     'cart_total' => fixCurrency($cart_total),
		     'discount_total' => fixCurrency($discount_total),
		     'placed' => mktime());
      $mydb->insert("store_order",$order);
      $o_id = $mydb->getID();
      if ($o_id) {
	$discount_name = $_SESSION["discount_name"];
	$discount_total = 0;
	$discount_percent = 0;
	if (strlen($discount_name) > 0) {
	  $sql = "SELECT discount_from, discount_to, value, percent from order_discount where name = '".$discount_name."' ";
	  $result = $mydb->runSql($sql);
	  $row = $mydb->getRow($result);
	  if ($row) {
	    $discount_from = $row[0];
	    $discount_to = $row[1];
	    $discount_value = $row[2];
	    $discount_percent = $row[3];
	  }
	  $today = time();
	  if (($today < $discount_from) || ($today > $discount_to)) {
	    $discount_percent = 0;
	    $discount_value = 0;
	  }
	}
	foreach($_SESSION["cart"] as $k => $v) {
	  if ($v["deleted"] == '0') {
	    $item_base_price = $v["base_price"];
	    $item_price = $v["price"];
	    $item_discount = 0;
	    if (($item_base_price <= $item_price) && ($discount_percent > 0)) {
	      // don't apply discount on discounted items
	      $item_base_price = $item_price;
	      $item_discount = number_format((($item_base_price*$discount_percent) / 100), 2);
	      $item_price = fixCurrency($item_base_price - $item_discount);
	    }
	    else if ($item_base_price > $item_price) {
	      $item_discount = $item_base_price - $item_price;
	    }
	    $total = $v["quantity"] * $item_price;
	    $item = array('ident' => $v["vint_id"],
			  'quantity' => $v["quantity"],
			  'base_price' => $item_base_price,
			  'price' => $item_price,
			  'o_id' => $o_id);
	    $mydb->insert("store_order_item",$item);
	    // update qty_sold for best_sellers search
	    $qty_sold = 0;
	    $sql = "SELECT qty_sold from vintage where vint_id = '".$v["vint_id"]."' ";
	    $result = $mydb->runSql($sql);
	    $row = $mydb->getRow($result);
	    if ($row) {
	      $qty_sold = $row[0];
	    }
	    $qty_sold = $qty_sold + 1;
	    $update_values = array("qty_sold" => $qty_sold);
	    $mydb->update("vintage", $update_values, $params = " WHERE vint_id = '".$v["vint_id"]."'");
	  }
	}
      }
      $to = "frank@bluedanubewine.com,zsuzsa@bluedanubewine.com";
      $reply = "From: \"".$first_name." ".$last_name."\" <".$email.">";
      $subject = "New Order";
      $message = "A new order has has been placed at the website.  Please log in to view it.";
      mail($to, $subject, $message, $reply);
      kickBack($_POST,'process','');
      exit;
    } 
    else {
      kickBack($_POST,'billship','email');
      exit;
    }
  } 
  else {
    kickBack($_POST,'billship','blankbilling');
    exit;
  }
}

?>