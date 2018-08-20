<?PHP

$debug_flag = FALSE;
$time_adjust = 60 * 60 * 3;
$today = time() - $time_adjust;
$order_number = 0;
$recipient_id = 0;
$is_order_suspended = FALSE;
$userId = 0;
if ($_SESSION["userCakeUser"]) {
  $userId = $_SESSION["userCakeUser"]["user_id"];
}
$wineclub_shipping = FALSE;
$wineclub_bottles = 0; // debug


if ((isset ($two)) && (isset ($tri)) && ($tri > 0)) {
  $order_placed = $two;
  $order_number = $tri;
  $cart_total = 0;
  $smarty->assign('sus_order_number',$order_number); //debug
  $sql = "SELECT o.o_id, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2, ";
  $sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone,";
  $sql .= " o.instructions, o.need_by_date,  o.include_card, o.include_card_cost,o.include_card_msg, o.tax, o.shipping, o.original_shipping, o.adult_signature ,o.original_adult_signature, o.shipping_method, o.payment_method, o.status, o.giftcard_id, o.giftcard_total, o.discount_id, o.discount_total, o.grand_total, o.cart_total, ";
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
    $is_order_suspended = TRUE;
    unset($_SESSION['cart_total']);
    unset($_SESSION['grand_total']);
    unset($_SESSION['cart_qty']);
    unset($_SESSION['cart']);
    unset($_SESSION["discount_id"]);
    unset($_SESSION["discount_name"]);
    unset($_SESSION['order']);
    unset($_SESSION['recipient']);
    $recipient = array("rec_id" => $row["recipient_id"],
		       "user_id" => $row["user_id"],
		       "first_name" => $row["first_name"],
		       "last_name" => $row["last_name"],
		       "email" => $row["email"],
		       "phone" => $row["phone"],
		       "address1" => $row["address1"],
		       "address2" => $row["address2"],
		       "city" => $row["city"],
		       "state" => $row["state"],
		       "zipcode" => $row["zipcode"]);
    $order = array('o_id' => $order_number,
		   'invoice_number' => getInvoiceNumber($order_number),
		   'rec_id' => $recipient["rec_id"],
		   'status' => $row["status"],
		   'deleted' => '0',
		   'first_name' => $row["ship_first_name"],
		   'last_name' => $row["ship_last_name"],
		   'address1' => $row["ship_address1"],
		   'address2' => $row["ship_address2"],
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
		   'original_shipping' => $row["original_shipping"],
		   'adult_signature' => $row["adult_signature"],
		   'original_adult_signature' => $row["original_adult_signature"],
		   'cart_total' => $row["cart_total"],
		   'grand_total' => $row["grand_total"],
		   'giftcard_id' => $row["giftcard_id"],
		   'giftcard_total' => $row["giftcard_total"],
		   'discount_id' => $row["discount_id"],
		   'discount_total' => $row["discount_id"],
		   );
    $smarty->assign('sus_grand_total',$row["grand_total"]); //debug
    $_SESSION["recipient"] = $recipient;
    $_SESSION["order"] = $order;
    $_SESSION["grand_total"] = $row["cart_total"]; // because grand_total is shown instead of cart_total
    $_SESSION["discount_id"] = $row["discount_id"];
    $discount_sql = "SELECT order_discount.name AS discount_name FROM store_order, order_discount WHERE store_order.o_id = '".$order_number."' AND store_order.discount_id = order_discount.discount_id";
    $discount_result = $mydb->runSql($discount_sql);
    $discount_row = $mydb->getAssoc($discount_result);
    if ($discount_row) {
      $_SESSION["discount_name"] = $discount_row["discount_name"];
    }
    $item_sql = "SELECT store_order_item.ident, store_order_item.type, store_order_item.quantity,store_order_item.price as discount_price, vintage.year, vintage.size, vintage.product_id, vintage.item_type, vintage.name AS vint_name, vintage.appellation, vintage.grup, vintage.bottles, vintage.shipping, vintage.price AS base_price, vintage.sale AS sale_price, winery.wy_id AS winery_id,  winery.name AS winery_name FROM store_order_item, vintage LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE vintage.vint_id = store_order_item.ident AND store_order_item.o_id = '".$order_number."' ";
    $item_result = $mydb->runSql($item_sql);
    $counter = 0;
    $cart_total = 0;
    $cart_qty = 0;
    while ($item_row = $mydb->getAssoc($item_result)) {
      if ($item_row["sale_price"] == 0)
	$sale_price = $item_row["base_price"];
      else
	$sale_price = $item_row["sale_price"];
      if ($item_row["type"] == BDW_LINE_ITEM_GIFTCARD) {
	$giftcard = getGiftCardById($row["giftcard_id"]);
	$_SESSION['cart'][$counter++] = array('type' => BDW_LINE_ITEM_GIFTCARD,
					      'quantity' => '1',
					      'bottles' => '0',
					      'created_date' => $giftcard["created_date"],
					      'delivery_date' => $giftcard["delivery_date"],
					      'purchaser_email' => $giftcard["purchaser_email"],
					      'purchaser_name' => $giftcard["purchaser_name"],
					      'recipient_email' => $giftcard["recipient_email"],
					      'recipient_name' => $giftcard["recipient_name"],
					      'message' => $giftcard["message"],
					      'price' => $giftcard["value"],
					      'deleted' => '0');
      }
      else {
	$_SESSION['cart'][$counter++] = array('type' => $item_row["item_type"],
					      'vint_id' => $item_row["ident"],
					      'product_id' => $item_row["product_id"],
					      'year' => $item_row["year"],
					      'size' => $item_row["size"],
					      'winery_id' => $item_row["winery_id"],
					      'winery_name' => $item_row["winery_name"],
					      'appellation' => $item_row["appellation"],
					      'vint_name' => $item_row["vint_name"],
					      'grup' => $item_row["grup"],
					      'bottles' => $item_row["bottles"],
					      'shipping' => $item_row["shipping"],
					      'quantity' => $item_row["quantity"],
					      'base_price' => $item_row["base_price"],
					      'price' => $sale_price,
					      'discount_price' => $item_row["discount_price"],
					      'deleted' => '0');
      }
      $cart_total = $cart_total + fixCurrency($item_row["quantity"]*$item_row["discount_price"]);
      $cart_qty = $cart_qty + $item_row["quantity"];
    }
    $_SESSION["cart_total"] = $cart_total;
    $_SESSION["cart_qty"] = $cart_qty;
  }
}

if (!$_SESSION["cart"]) {
  kickBack('','cart','');
  exit;
}

$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];
$warnings = $_SESSION["userCakeWarnings"];


if (!empty($_POST)) {
  $first_name = trim($_POST["first_name"]);
  $last_name = trim($_POST["last_name"]);
  $address1 = trim($_POST["address1"]);
  $address2 = trim($_POST["address2"]);
  $city = trim($_POST["city"]);
  $state = trim($_POST["state"]);
  $zipcode = trim($_POST["zipcode"]);
  $email = trim($_POST["email"]);
  $phone = trim($_POST["phone"]);
  $instructions = trim($_POST["instructions"]);
  $need_by_date = trim($_POST["need_by_date"]);
  $include_card_msg = trim($_POST["include_card_msg"]);
  $ship_first_name = trim($_POST["ship_first_name"]);
  $ship_last_name = trim($_POST["ship_last_name"]);
  $ship_address1 = trim($_POST["ship_address1"]);
  $ship_address2 = trim($_POST["ship_address2"]);
  $ship_city = trim($_POST["ship_city"]);
  $ship_state = trim($_POST["ship_state"]);
  $ship_zipcode = trim($_POST["ship_zipcode"]);
  $ship_email = trim($_POST["ship_email"]);
  $ship_phone = trim($_POST["ship_phone"]);
  $ship_method = trim($_POST["ship_method"]);

  $include_card_checkbox = "CARD FALSE";
  $include_card = 0;
  $include_card_cost = 0;
  if (isset($_POST['include_card'])) {
    $include_card_checkbox = "CARD TRUE";
    $include_card = 1;
    $include_card_cost = greetingCardCost($_SESSION["cart"]);
  }
  $smarty->assign('include_card_checkbox',$include_card_checkbox); //debug

  if ($first_name == "") {  $errors[] = lang("BILLSHIP_SPECIFY_BILLFIELD", array("First Name")); }
  if ($last_name == "") {  $errors[] = lang("BILLSHIP_SPECIFY_BILLFIELD", array("Last Name")); }
  if ($address1 == "") {  $errors[] = lang("BILLSHIP_SPECIFY_BILLFIELD", array("Address1")); }
  if ($city == "") {  $errors[] = lang("BILLSHIP_SPECIFY_BILLFIELD", array("City")); }
  if ($state == "") {  $errors[] = lang("BILLSHIP_SPECIFY_BILLFIELD", array("State")); }
  if ($zipcode == "") {  $errors[] = lang("BILLSHIP_SPECIFY_BILLFIELD", array("Zipcode")); }
  if ($email == "") {  $errors[] = lang("BILLSHIP_SPECIFY_BILLFIELD", array("Email")); }
  else if (!isValidEmail($email)) {  $errors[] = lang("BILLSHIP_INVALID_EMAIL", array($email)); }
  if ($phone == "") {  $errors[] = lang("BILLSHIP_SPECIFY_BILLFIELD", array("Phone")); }
  $_SESSION["recipient"]["first_name"] = $first_name;
  $_SESSION["recipient"]["last_name"] = $last_name;
  $_SESSION["recipient"]["address1"] = $address1;
  $_SESSION["recipient"]["address2"] = $address2;
  $_SESSION["recipient"]["city"] = $city;
  $_SESSION["recipient"]["state"] = $state;
  $_SESSION["recipient"]["zipcode"] = $zipcode;
  $_SESSION["recipient"]["email"] = $email;
  $_SESSION["recipient"]["phone"] = $phone;

  if ($ship_first_name == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("First Name")); }
  if ($ship_last_name == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("Last Name")); }
  if ($ship_address1 == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("Address1")); }
  if ($ship_city == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("City")); }
  if ($ship_state == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("State")); }
  if ($ship_zipcode == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("Zipcode")); }
  if ($ship_email == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("Email")); }
  else if (!isValidEmail($ship_email)) {  $errors[] = lang("BILLSHIP_INVALID_EMAIL", array($ship_email)); }
  if ($ship_phone == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("Phone")); }
  if ($ship_method == "") {  $errors[] = lang("BILLSHIP_SPECIFY_SHIPFIELD", array("Shipping Method")); }
  $_SESSION["order"]["first_name"] = $ship_first_name;
  $_SESSION["order"]["last_name"] = $ship_last_name;
  $_SESSION["order"]["address1"] = $ship_address1;
  $_SESSION["order"]["address2"] = $ship_address2;
  $_SESSION["order"]["city"] = $ship_city;
  $_SESSION["order"]["state"] = $ship_state;
  $_SESSION["order"]["shipping_method"] = $ship_method;
  $_SESSION["order"]["zipcode"] = $ship_zipcode;
  $_SESSION["order"]["email"] = $ship_email;
  $_SESSION["order"]["phone"] = $ship_phone;
  $_SESSION["order"]["instructions"] = $instructions;
  $_SESSION["order"]["need_by_date"] = $need_by_date;
  $_SESSION["order"]["include_card"] = $include_card;
  $_SESSION["order"]["include_card_cost"] = $include_card_cost;
  $_SESSION["order"]["include_card_msg"] = $include_card_msg;
  $cart_bottle_quantity = cartBottleQuantity($_SESSION["cart"]);
  $cart_shipping_bottle_quantity = cartShippingBottleQuantity($_SESSION["cart"]);
  if (count($errors) == 0) { // check shipping state, shipping method
    if ($cart_bottle_quantity == 0) { // no alcohol
      $ship_states_array = $shipping_states_misc;
    }
    else if (isWineClubMember($_SESSION["userCakeUser"])) {
      $ship_states_array = $shipping_states_club;
    }
    else {
      $ship_states_array = $shipping_states;
    }
    //if (checkExpensiveState($ship_state)) {      $errors[] = lang("BILLSHIP_EXPENSIVE_STATE", array($ship_state));    }
    if (in_array($ship_state, $problem_states)) {
      $errors[] = lang("BILLSHIP_TEXAS", array($ship_state));
    }
    else if ($ship_state == 'NA') {
      $errors[] = lang("BILLSHIP_FOREIGN");
    }
    else if (!in_array($ship_state, $ship_states_array)) {
      $errors[] = lang("BILLSHIP_CANNOTSHIP_STATE", array($ship_state));
      $_SESSION["userCakeErrors"] = $errors;
      kickBack('','billship','');
      exit;
    }
    if (!checkDeliveryQuantity($ship_method, $ship_state, $cart_bottle_quantity)) {
      $errors[] = lang("BILLSHIP_CANNOTDELIVER_QUANTITY");
    }
    if (!checkDeliveryZipcode($ship_method, $ship_state, $ship_zipcode)) {
      $errors[] = lang("BILLSHIP_CANNOTDELIVER_ZIPCODE", array($ship_zipcode));
    }
  }
  if (count($errors) > 0) {
    $_SESSION["userCakeErrors"] = $errors;
    kickBack('','billship','');
    exit;
  }
}

//if (count($errors) == 0) {
if (TRUE) {
  $cart = $_SESSION["cart"];
  $session_giftcard_id = 0;
  if ($_SESSION["order"]["giftcard_id"] > 0) 
    $session_giftcard_id = $_SESSION["order"]["giftcard_id"];
  $smarty->assign('giftcard_iddebug', $session_giftcard_id); // debug
  $discount_id = $_SESSION["discount_id"];
  if (!$discount_id) $discount_id = 0;
  $smarty->assign('discount_id',$_SESSION["discount_id"]); //debug
  $counter = 0;
  $cart_total = 0;
  $cart_qty = 0;
  $grand_total = 0;
  $taxable_total = 0;
  $discount_total = 0;
  $total = 0;
  foreach ($cart as $key => $cartitem) {
    if ($cartitem["deleted"] == '0') {
      if ($cartitem["type"] == BDW_LINE_ITEM_GIFTCARD) {
	$total = $cartitem["price"];
	$cart_total += $total;
	$cart_qty = $cart_qty + $cartitem["quantity"];
	$name = getCartGiftcardName($cartitem);
	$url = "/giftcard/";
	$title = $name;
	$taxable = 'N';
	$items[$counter++] = array('type' => $cartitem["type"],
				   'url' => $url,
				   'title' => $title,
				   'quantity' => $cartitem["quantity"],
				   'bottles' => $cartitem["bottles"],
				   'name' => $name,
                                   'full_name' => $name,
				   'product_name' => $name,
				   'description' => $name,
				   'vint_id' => '0',
				   'product_id' => BDW_GIFTCARD_PRODUCTID,
				   'wy_name' => "",
				   'appellation' => "", 
				   'year' => '0',
				   'size' => '0',
				   'grup' => '0', 
				   'shipping' => '0', 
				   'taxable' => $taxable,
				   'base_price' => fixCurrency($total),
				   'price' => fixCurrency($total),
				   'total' => fixCurrency($total));
      }
      else {
	$item_base_price = $cartitem["base_price"];
	$item_price = $cartitem["discount_price"];
	$item_discount = 0;
	if ($item_base_price > $item_price) 
	  $item_discount = $item_base_price - $item_price;
	$total = $cartitem["quantity"] * $item_price;
	$discount = $cartitem["quantity"] * $item_discount;
	$cart_total += $total;
	$taxable_total += $total;
	$smarty->assign('ship_statedebug',$_SESSION["order"]["state"]); //debug
	$smarty->assign('ship_methoddebug',$_SESSION["order"]["shipping_method"]); //debug
	if (taxableOrder($_SESSION["order"]["state"], $_SESSION["order"]["shipping_method"]))
	  $taxable = 'Y';
	else
	  $taxable = 'N';
	$cart_qty = $cart_qty + $cartitem["quantity"];
	$discount_total = $discount_total + $discount;
	//$description = makeOrderItemDescription($cartitem["year"],$cartitem["winery_name"],$cartitem["vint_name"]);
	//$description = fullMobileCartName($cartitem["winery_name"], $cartitem["vint_name"], $cartitem["year"], $cartitem["size"]);
	$product_id = $cartitem["product_id"];
	if (!$product_id)
	  $product_id = "TST ".$cartitem["vint_id"];
	$product_id = getQuickbooksId($product_id);
	if ($cartitem["grup"]) 	
	  $url = "/wine/sampler/".$cartitem["vint_id"]."/";
	else 
	  $url = "/wine/".$cartitem["vint_id"]."/";
	$title = fullMobileCartName($cartitem["winery_name"], $cartitem["vint_name"], $cartitem["year"], $cartitem["size"]);
	$full_name = fullCartName($cartitem["winery_name"], $cartitem["vint_name"], $cartitem["size"]);
	$items[$counter++] = array('type' => $cartitem["type"],
				   'url' => $url,
				   'title' => $title,
				   'vint_id' => $cartitem["vint_id"],
				   'product_id' => $product_id,
				   'name' => $cartitem["vint_name"],
				   'full_name' => $full_name,
				   'wy_name' => $cartitem["winery_name"],
				   'year' => $cartitem["year"],
				   'size' => $cartitem["size"],
				   'product_name' => removeAccent($cartitem["vint_name"]),
				   'description' => removeAccent($title),
				   'quantity' => $cartitem["quantity"],
				   'grup' => $cartitem["grup"],
				   'bottles' => $cartitem["bottles"],
				   'shipping' => $cartitem["shipping"],
				   'taxable' => $taxable,
				   'base_price' => $item_base_price,
				   'price' => $item_price,
				   'total' => fixCurrency($total));
      }
    }
  }
  $grand_total = $cart_total; // could apply overall discount here if any;
  if (!empty($_POST)) { //coming from billship 
    if (($_SESSION["recipient"]) && ($_SESSION["recipient"]["rec_id"] > 0)) { 
      // update recipient in case the user has changed the order
      $recipient = $_SESSION["recipient"];
      if ($_SESSION["recipient"]["user_id"] > 0)
	$user_id = $_SESSION["recipient"]["user_id"];
      else
	$user_id = $userId;
      $values = array("user_id" => $user_id,
		      "first_name" => $first_name,
		      "last_name" => $last_name,
		      "updated" => $today,
		      "email" => $email,
		      "phone" => $phone,
		      "address1" => $address1,
		      "address2" => $address2,
		      "city" => $city,
		      "state" => $state,
		      "zipcode" => $zipcode);
      $mydb->update("recipient",$values, " WHERE rec_id = '".$recipient["rec_id"]."'"); 
      $recipient["user_id"] = $user_id;
      $recipient["first_name"] = $first_name;
      $recipient["last_name"] = $last_name;
      $recipient["email"] = $email;
      $recipient["phone"] = $phone;
      $recipient["address1"] = $address1;
      $recipient["address2"] = $address2;
      $recipient["city"] = $city;
      $recipient["state"] = $state;
      $recipient["zipcode"] = $zipcode;
    }
    else  { // create recipient
      $recipient = array("rec_id" => 0,
			 "user_id" => $userId,
			 "user_default" => 0,
			 "first_name" => $first_name,
			 "last_name" => $last_name,
			 "joined" => $today,
			 "updated" => $today,
			 "email" => $email,
			 "phone" => $phone,
			 "address1" => $address1,
			 "address2" => $address2,
			 "city" => $city,
			 "state" => $state,
			 "zipcode" => $zipcode);
      $mydb->insert("recipient",$recipient); 
      $recipient["rec_id"] = $mydb->getID();
    }
    $_SESSION["recipient"] = $recipient;
  }
  if (!empty($_POST)) {  //coming from billship 
    if ($ship_method == "Contact Me") { // the old way
      $status = '5'; // new order
    }
    else if (($is_order_suspended) || (($_SESSION["order"]) && ($_SESSION["order"]["status"] == '0'))) {
      $status = '0'; // declined by customer;
    }
    else { // should be updated to PAYED in relay_response
      $status = '8'; // suspended by customer;
    }
    $smarty->assign('order_number',$_SESSION["order"]["o_id"]); //debug
    $smarty->assign('order_status',$status); //debug
    //$tax = computeTax($grand_total, $ship_state, $ship_method);
    $tax = computeTax($taxable_total, $ship_state, $ship_method);
    $discount_type = getDiscountType($discount_id);
    $discount_name = getDiscountName($discount_id);
    $discount_free_shipping = FALSE;
    if (($discount_name == 'BEVRI') && (checkZipcode($ship_zipcode))) { // bevri discount for local delivery
        if ($cart_shipping_bottle_quantity >= 6) {
            $discount_free_shipping = TRUE;
        }
    }
    if ($discount_free_shipping) {
        $original_shipping = 0;
    }
    else {
        $original_shipping = computeShipping($cart_shipping_bottle_quantity, $ship_state, $ship_method, $discount_type);
    }
    if (isWineClubMember($_SESSION["userCakeUser"])) {
      //$wineclub_bottles = computeWineClubShippingBottles($_SESSION["userCakeUser"], $cart_shipping_bottle_quantity);
      $shipping = computeWineClubShipping($_SESSION["userCakeUser"], $cart_shipping_bottle_quantity, $ship_state, $ship_method, $discount_type);
      $wineclub_shipping = TRUE;
      $wineclub_saving = 0;
    }
    else {
      $shipping = $original_shipping;
      $wineclub_saving = computeShippingSaving($cart_shipping_bottle_quantity, $ship_state, $ship_method, $discount_type);
    }
    $bonus_bottle = 0;
    if (($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645) && ($cart_bottle_quantity >= 5))
      $bonus_bottle = 1;
    $smarty->assign('bonus_bottle',$bonus_bottle); 
    $smarty->assign('cart_bottle_qty',$cart_bottle_quantity); //debug
    $smarty->assign('shipping_qty',$cart_shipping_bottle_quantity); //debug
    $smarty->assign('shipping_cost',$shipping); //debug
    $original_adult_signature = computeAdultSignature($cart_bottle_quantity, $ship_state, $ship_method);
    if ((isWineClubMember($_SESSION["userCakeUser"])) && ($shipping < $original_shipping)) { 
      $adult_signature = 0;
    }
    else if ($discount_free_shipping) {
        $original_adult_signature = 0;
        $adult_signature = 0;
    }
    else {
      $adult_signature = $original_adult_signature;
    }
    $smarty->assign('wineclub_shipping',$wineclub_shipping);
    $total_wineclub_saving = $wineclub_saving;
    if ($wineclub_saving > 0)
    $total_wineclub_saving += $adult_signature;
    $smarty->assign('wineclub_saving',$total_wineclub_saving);
    $order_grand_total = fixCurrency($grand_total + $tax + $shipping + $include_card_cost + $adult_signature);
    $giftcard_balance = $_SESSION["order"]["giftcard_balance"];
    $giftcard_total = 0;
    $giftcard_payment = 0;
    if ($giftcard_balance > 0) {
      $smarty->assign('has_balance',"Yes"); // debug
      $giftcard_total = fixCurrency(getGiftCardTotal($order_grand_total, $giftcard_balance));
      $giftcard_payment = fixCurrency($order_grand_total - $giftcard_total);
      $smarty->assign('giftcard_total',$giftcard_total); // debug
    }
    if (($_SESSION["order"]) && ($_SESSION["order"]["o_id"] > 0))  {	// update order
      $order = $_SESSION["order"];
      $values = array('status' => $status,
		      'first_name' => $ship_first_name,
		      'last_name' => $ship_last_name,
		      'address1' => $ship_address1,
		      'address2' => $ship_address2,
		      'city' => $ship_city,
		      'state' => $ship_state,
		      'zipcode' => $ship_zipcode,
		      'email' => $ship_email,
		      'phone' => $ship_phone,
		      'shipping_method' => $ship_method,
		      'instructions' => $instructions,
		      'need_by_date' => $need_by_date,
		      'include_card' => $include_card,
		      'include_card_cost' => fixCurrency($include_card_cost),
		      'include_card_msg' => $include_card_msg,
		      'tax' => fixCurrency($tax),
		      'shipping' => fixCurrency($shipping),
		      'adult_signature' => fixCurrency($adult_signature),
		      'original_shipping' => fixCurrency($original_shipping),
		      'original_adult_signature' => fixCurrency($original_adult_signature),
		      'cart_total' => fixCurrency($cart_total),
		      'grand_total' => $order_grand_total,
		      'giftcard_id' => $session_giftcard_id,
		      'giftcard_total' => $giftcard_total,
		      'discount_id' => $discount_id,
		      'discount_total' => fixCurrency($discount_total));
      $mydb->update("store_order",$values, " WHERE o_id = '".$order["o_id"]."'"); 
      $smarty->assign('giftcard_idupdate', $values["giftcard_id"]); // debug
      $order["status"] = $status;
      $order["first_name"] = $ship_first_name;
      $order["last_name"] = $ship_last_name;
      $order["address1"] = $ship_address1;
      $order["address2"] = $ship_address2;
      $order["city"] = $ship_city;
      $order["state"] = $ship_state;
      $order["zipcode"] = $ship_zipcode;
      $order["email"] = $ship_email;
      $order["phone"] = $ship_phone;
      $order["shipping_method"] = $ship_method;
      $order["instructions"] = $instructions;
      $order["need_by_date"] = $need_by_date;
      $order["include_card"] = $include_card;
      $order["include_card_cost"] = $include_card_cost;
      $order["include_card_msg"] = $include_card_msg;
      $order["tax"] = $values["tax"];
      $order["shipping"] = $values["shipping"];
      $order["original_shipping"] = $values["original_shipping"];
      $order["adult_signature"] = $values["adult_signature"];
      $order["original_adult_signature"] = $values["original_adult_signature"];
      $order["cart_total"] = $values["cart_total"];
      $order["grand_total"] = $values["grand_total"];
      $order["discount_id"] = $discount_id;
      $order["discount_total"] = $values["discount_total"];
      $order["giftcard_id"] = $values["giftcard_id"];
      $order["giftcard_total"] = $values["giftcard_total"];
      $order["giftcard_payment"] = round($giftcard_payment, 2);
    }
    else { // create order
      $order = array(
		     'rec_id' => $recipient["rec_id"],
		     'status' => $status,
		     'status_timestamp' => $today,
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
		     'shipping_method' => $ship_method,
		     'instructions' => $instructions,
		     'need_by_date' => $need_by_date,
		     'include_card' => $include_card,
		     'include_card_cost' => fixCurrency($include_card_cost),
		     'include_card_msg' => $include_card_msg,
		     'tax' => fixCurrency($tax),
		     'shipping' => fixCurrency($shipping),
		     'adult_signature' => fixCurrency($adult_signature),
		     'original_shipping' => fixCurrency($original_shipping),
		     'original_adult_signature' => fixCurrency($original_adult_signature),
		     'cart_total' => fixCurrency($cart_total),
		     'grand_total' => $order_grand_total,
		     'discount_id' => $discount_id,
		     'discount_total' => fixCurrency($discount_total),
		     'giftcard_id' => $session_giftcard_id,
		     'giftcard_total' => $giftcard_total,
		     'placed' => $today);
      if ($order_number == 0) {
	$oid = $mydb->insert("store_order",$order);
	//if (!$oid) { $oid = $_SESSION['dberror']; } 
	$o_id = $mydb->getID();
        $smarty->assign('order_id', $oid); //debug
	$order['o_id'] = $o_id;
      }
      //$smarty->assign('giftcard_idinsert', $order["giftcard_id"]);
      $order['invoice_number'] = getInvoiceNumber($order["o_id"]);
      $order['giftcard_balance'] = 0;
    }
    $_SESSION['order'] = $order;
    if ($order["o_id"] > 0) { // need to delete previous order items if cart updated
      $mydb->delete('store_order_item',"o_id = '".$order["o_id"]."'"); 
      foreach($_SESSION["cart"] as $key => $cartitem) {
	if ($cartitem["deleted"] == '0') {
	  if ($cartitem["type"] == BDW_LINE_ITEM_GIFTCARD) {
	    $ident = createGiftCard($cartitem["created_date"], $cartitem["purchaser_email"], $cartitem["purchaser_name"],$cartitem["recipient_email"],$cartitem["recipient_name"],$cartitem["price"],$cartitem["message"], $cartitem["giftcard_type"], $cartitem["delivery_date"]);
	    $quantity = 1;
	    $price = $cartitem["price"];
	    $base_price = $cartitem["price"];
	  }
	  else {
	    $ident = $cartitem["vint_id"];
	    $quantity = $cartitem["quantity"];
	    $price = $cartitem["discount_price"];
	    $base_price = $cartitem["base_price"];
	  }
	  $item = array('ident' => $ident,
			'type' => $cartitem["type"],
			'quantity' => $quantity,
			'price' => $price,
			'base_price' => $base_price,
			'o_id' => $order["o_id"]);
	  $mydb->insert("store_order_item",$item); 
	  if ($cartitem["type"] == BDW_LINE_ITEM_WINE) {
	    $qty_sold = 0; 	    // update qty_sold for best_sellers search
	    $sql = "SELECT qty_sold from vintage where vint_id = '".$cartitem["vint_id"]."' ";
	    $result = $mydb->runSql($sql);
	    $row = $mydb->getRow($result);
	    if ($row) { $qty_sold = $row[0]; }
	    $qty_sold = $qty_sold + $cartitem["quantity"];
	    $update_values = array("qty_sold" => $qty_sold);
	    $mydb->update("vintage", $update_values, $params = " WHERE vint_id = '".$cartitem["vint_id"]."'");
	  }
	}
      }
    }
  }
  if (!$recipient) {
    $recipient = $_SESSION['recipient'];
  }
  if (!$order) {
    $order = $_SESSION['order'];
  }
  if ($order["shipping_method"] == "Contact Me") { // the old way
    $to = "webshop@bluedanubewine.com";
    $to2 = "frank@bluedanubewine.com,zsuzsa@bluedanubewine.com,catherine@bluedanubewine.com,eugenie@bluedanubewine.com";
    $toc = "catherine@bluedanubewine.com";
    $customer_info = $recipient["first_name"]." ".$recipient["last_name"]." (".$recipient["email"].")";

    $reply = "From: \"".$recipient["first_name"]." ".$recipient["last_name"]."\" <".$recipient["email"].">";
    $subject = "New Order, please contact ";
    $subject .= $customer_info;
    $order_url = "https://www.bluedanubewine.com/amn/edit_order/".$order["o_id"];
    $message = "A new order ".$order_url." has been placed at the website. The customer wants to be contacted. Please log in to view it.";
    $header = 'From: Webshop@bluedanubewine.com';
    if ($debug_flag == FALSE) {
      mail($to, $subject, $message, $header);
    }
    else {
      mail($toc, $subject, $message, $header);
    }
    kickBack('','process','');
    exit;
  }
  else { 
    $order_giftcard_paid = 0;
    if (($order["giftcard_id"] > 0) && ($order["giftcard_total"] == 0)) { // full order paid by giftcard
      $order_giftcard_paid = 1;
      $giftcard_id = $order["giftcard_id"];
      $smarty->assign('giftcard_id',$giftcard_id);
      if ($debug_flag == TRUE) {
	$form_action = '/order_receiptdebug/1/'.$order["placed"].'/'.$order["o_id"].'/';
      }
      else {
	$form_action = '/order_receipt/1/'.$order["placed"].'/'.$order["o_id"].'/';
      }
      $smarty->assign('form_action',$form_action);
    }
    else {
      if (FALSE) { // test email
	$toc = "catherine@bluedanubewine.com";
	$reply = "From: \"".$recipient["first_name"]." ".$recipient["last_name"]."\" <".$recipient["email"].">";
	$subject = "New Order, please contact customer";
	$order_url = "https://www.bluedanubewine.com/amn/edit_order/".$order["o_id"];
	$message = "A new order ".$order_url." has been placed at the website. The customer wants to be contacted. Please log in to view it.";
	//mail($toc, $subject, $message, $reply);
      }
      $log = "";
      $file_dir = dirname(__FILE__)."/";
      require_once $file_dir.'../../anet_php_sdk/AuthorizeNet.php'; 
      if (!defined('AUTHORIZENET_API_LOGIN_ID')) {  define("AUTHORIZENET_API_LOGIN_ID",getAuthorizeNetLogin());      }
      if (!defined('AUTHORIZENET_TRANSACTION_KEY')) {   define("AUTHORIZENET_TRANSACTION_KEY",getAuthorizeNetKey());      }
      $x_login = AUTHORIZENET_API_LOGIN_ID;
      $x_transaction_key = AUTHORIZENET_TRANSACTION_KEY;
      $log .= "login: ".$x_login."\n";
      $log .= "transaction_key: ".$x_transaction_key."\n";
      if ($debug_flag == TRUE) {
	$x_relay_response_url = "https://www.bluedanubewine.com/relay_responsedebug.php"; 
      }
      else {
	$x_relay_response_url = "https://www.bluedanubewine.com/relay_response.php"; 
      }
      $x_cancel_url = "https://www.bluedanubewine.com/review";    
      $x_fp_sequence = $order["o_id"];
      $log .= "fp_sequence: ".$x_fp_sequence."\n";
      $x_fp_timestamp = time();
      $log .= "fp_timestamp: ".$x_fp_timestamp."\n";
      if ($order["giftcard_total"] > 0) {
	$x_amount = $order["giftcard_total"];
	$x_pre_giftcard_amount =  $order["grand_total"];
	$x_pre_giftcard_amount_name = "Total";
	$x_pre_giftcard_amount_description = "Order Total.";
	$x_giftcard_amount = round(($order["grand_total"] - $order["giftcard_total"]), 2);
        
	$x_giftcard_amount_name = "Gift Card";
	$x_giftcard_amount_description = "Payment";
      }
      else {
	$x_amount = $order["grand_total"];
	$x_pre_giftcard_amount = 0;
	$x_giftcard_amount = 0;
      }
      $log .= "amount: ".$x_amount."\n";
      $x_shipping = $order["shipping"];
      $shipping_savings = 0;
      if ((isWineClubMember($_SESSION["userCakeUser"])) && ($order["original_shipping"] != $order["shipping"])) {
	$shipping_savings = fixCurrency($order["original_shipping"] - $order["shipping"]);
	$x_shipping_saving_cost = $shipping_savings;
	$x_shipping_saving_name = "Shipping savings";
	$x_shipping_saving_description = "Thanks for joining Vino Danubia! You save $".$shipping_savings. " in shipping.";
      }
      $x_adult_signature = $order["adult_signature"];
      $x_adult_signature_name = "Adult Signature";
      $x_adult_signature_description = "Service Required by Federal Law";
      $adult_signature_savings = 0;
      if ((isWineClubMember($_SESSION["userCakeUser"]))&&($order["original_adult_signature"] != $order["adult_signature"])) {
	$adult_signature_savings = fixCurrency($order["original_adult_signature"] - $order["adult_signature"]);
	$x_adult_signature_saving_cost = $adult_signature_savings;
	$x_adult_signature_saving_name = "Adult signature savings";
	$x_adult_signature_saving_description = "Thanks for joining Vino Danubia! You save $".$adult_signature_savings. " for adult signature.";
      }
      $total_shipping_savings = $shipping_savings + $adult_signature_savings;
      $x_total_shipping = $order["shipping"]  + $order["include_card_cost"] + $order["adult_signature"];
      $x_include_card_cost = $order["include_card_cost"];
      $x_include_card_name = "Greeting Card";
      $x_include_card_description = "Greeting Card Included in the Order";
      $x_tax_exempt = "FALSE";
      if ($order["tax"] > 0) {
	$x_tax_exempt = "TRUE";
      }
      $x_zipcode = $recipient["zipcode"];
      $x_state = $recipient["state"];
      $x_country = 'USA';
      if ($x_state == "NA") {
	$x_zipcode = 99999;
	$x_country = 'Non US';
      }
      $shipping_instructions = "Shipping during periods of extreme heat or cold can damage wine. Your wines will be shipped by us in perfect condition and any damage due to weather is not covered by UPS insurance, or guaranteed by us. Please contact us and we will gladly store your wine.";
      $x_order_description = $shipping_instructions;
      if ($order["instructions"]) {
	$x_order_description = $shipping_instructions." Order Instructions: ".$order["instructions"];
      }
      if ($order["need_by_date"]) {
	$x_order_description = $shipping_instructions." Order Needed By: ".$order["need_by_date"];
      }
      $x_fp_hash = AuthorizeNetSIM_Form::getFingerprint($x_login,$x_transaction_key, $x_amount, $x_fp_sequence, $x_fp_timestamp);
      $log .= "fp_hash: ".$x_fp_hash."\n";
      $smarty->assign('x_login',$x_login);
      $smarty->assign('x_fp_sequence',$x_fp_sequence);
      $smarty->assign('x_fp_timestamp',$x_fp_timestamp);
      $smarty->assign('x_fp_hash',$x_fp_hash);
      $smarty->assign('x_amount',$x_amount);
      $smarty->assign('x_pre_giftcard_amount',$x_pre_giftcard_amount);
      $smarty->assign('x_giftcard_amount',$x_giftcard_amount);
      if ($x_pre_giftcard_amount > 0) {
	$smarty->assign('x_pre_giftcard_amount_name',$x_pre_giftcard_amount_name);
	$smarty->assign('x_pre_giftcard_amount_description',$x_pre_giftcard_amount_description);
	$smarty->assign('x_giftcard_amount_name',$x_giftcard_amount_name);
	$smarty->assign('x_giftcard_amount_description',$x_giftcard_amount_description);
      }
      $smarty->assign('x_relay_response_url',$x_relay_response_url);
      $smarty->assign('x_show_form','PAYMENT_FORM');
      if ($debug_flag == TRUE) {
	$smarty->assign('x_test_request','true');
      }
      else {
	$smarty->assign('x_test_request','false');
      }
      $smarty->assign('x_type','AUTH_CAPTURE');
      $smarty->assign('x_method','cc');
      $smarty->assign('x_cancel_url', $x_cancel_url);
      $smarty->assign('x_cancel_url_text', 'Cancel');
      $smarty->assign('x_relay_response','true');
      $smarty->assign('x_version','3.1');
      $smarty->assign('x_order_description',$x_order_description);
      $smarty->assign('x_tax_exempt', $x_tax_exempt);
      $smarty->assign('x_shipping', $x_shipping);
      $smarty->assign('shipping_savings', $shipping_savings);
      $smarty->assign('total_shipping_savings', $total_shipping_savings);
      if ($shipping_savings) {
	$smarty->assign('x_shipping_saving_cost', $x_shipping_saving_cost);
	$smarty->assign('x_shipping_saving_name', $x_shipping_saving_name);
	$smarty->assign('x_shipping_saving_description', $x_shipping_saving_description);
      }
      $smarty->assign('x_adult_signature', $x_adult_signature);
      $smarty->assign('x_adult_signature_name', $x_adult_signature_name);
      $smarty->assign('x_adult_signature_description', $x_adult_signature_description);
      $smarty->assign('adult_signature_savings', $adult_signature_savings);
      if ($adult_signature_savings) {
	$smarty->assign('x_adult_signature_saving_cost', $x_adult_signature_saving_cost);
	$smarty->assign('x_adult_signature_saving_name', $x_adult_signature_saving_name);
	$smarty->assign('x_adult_signature_saving_description', $x_adult_signature_saving_description);
      }
      $smarty->assign('x_include_card_cost', $x_include_card_cost);
      $smarty->assign('x_include_card_name', $x_include_card_name);
      $smarty->assign('x_include_card_description', $x_include_card_description);
      $smarty->assign('x_total_shipping', $x_total_shipping);
      $smarty->assign('x_zipcode',$x_zipcode);
      $smarty->assign('x_state',$x_state);
      $smarty->assign('x_country',$x_country);
      $smarty->assign('x_shipcountry','USA');
      $smarty->assign('x_address', $recipient["address1"] . " " . $recipient["address2"]);
      $smarty->assign('x_ship_to_address', $order["address1"] . " " . $order["address2"]);
      $log_values = array("authorize_logging" => $log);
      if ($debug_flag == TRUE) { 
	$mydb->update("store_order",$log_values, " WHERE o_id = '".$order["o_id"]."'"); 
      }
    }
  }
}
$smarty->assign('order',$order);
$smarty->assign('recipient',$recipient);
$smarty->assign('items',$items);
$smarty->assign('order_giftcard_paid',$order_giftcard_paid);
$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
$smarty->assign('uc_warnings',$warnings);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");
destroySession("userCakeWarnings");


?>