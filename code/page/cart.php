<?PHP

if ($tri == 'delete') {
  $subtract_total = $_SESSION['cart'][$two]['quantity'] * $_SESSION['cart'][$two]['price'];
  $_SESSION["cart_total"] = fixCurrency($_SESSION["cart_total"]-$subtract_total);
  $_SESSION['cart'][$two] = array('deleted' => '1');
  if ($_SESSION["cart_total"] == 0) {
    unset($_SESSION['cart']);
    //unset($_SESSION['cart_total']);
    //unset($_SESSION['grand_total']);
    unset($_SESSION["discount_id"]);
    unset($_SESSION["discount_name"]);
  }
  $cart_qty = cartBottleQuantity($_SESSION['cart']);
  $successes = array();
  $successes[] = lang("CART_UPDATE_SUCCESS");
  $_SESSION["userCakeSuccesses"] = $successes;
  kickBack('','cart','');
  exit;
}

if (($two == 'empty') || (isset($_POST["submit_empty"]))) {
  unset($_SESSION['cart']);
  unset($_SESSION["discount_id"]);
  unset($_SESSION["discount_name"]);
  unset($_SESSION['order']);
  unset($_SESSION['recipient']);
  unset($_SESSION['db_error']);
  kickBack('','cart','');
  exit;
}

if (isset($_POST["submit_shopping"])) {
  if (isset($_SESSION["redirectShop"])) {
    $redirect_shop = $_SESSION["redirectShop"];
  }
  else {
    $redirect_shop = "wines";
  }
  if (isset($_SESSION["redirectVintage"])) {
    $redirect_shop .= "#".$_SESSION["redirectVintage"];
  }
  header("Location: /".$redirect_shop);
  //kickBack('',$redirect_shop, '');
  exit;
}

if (isset($_POST["submit_checkout"])) {
  $next = 'checkout';
  kickBack('', $next,'');
  exit;
}

if ((isset($_POST["submit_update"])) || (isset($_POST["apply_discount"]))) {
  $cart = $_SESSION["cart"];
  $discount_name = trim($_POST["discount_name"]);
  foreach ($_POST as $key => $val) {
    if (strstr($key, "p_")) {
      if ($val >= 0) {
	$vint_id = str_replace("p_","",$key);
	$qty = floor($val);
	$index = 0;
	foreach($cart as $k => $cartitem) {
	  if ($cartitem["vint_id"] == $vint_id) {
	    $_SESSION['cart'][$index]['quantity'] = $qty;
	    if ($qty == '0') { // delete
	      $_SESSION['cart'][$index]["deleted"] = '1';
	    }
	  }
	  $index++;
	}
      }
    }
  }
  $cart = $_SESSION["cart"];
  $cart_total = 0;
  $cart_qty = 0;
  foreach($cart as $k => $cartitem) {
    if ($cartitem["deleted"] == '0') {
      $cart_total = $cart_total + ($cartitem["quantity"] * $cartitem["price"]);
      $cart_qty = $cart_qty + $cartitem["quantity"];
    }
  }
  $_SESSION["cart_total"] = fixCurrency($cart_total);
  $_SESSION["cart_qty"] = $cart_qty;
  if ($_SESSION["cart_total"] == 0) {
    unset($_SESSION['cart']);
    unset($_SESSION["discount_id"]);
    unset($_SESSION["discount_name"]);
    $successes = array();
    $successes[] = lang("CART_UPDATE_SUCCESS");
    $_SESSION["userCakeSuccesses"] = $successes;
    kickBack('','cart','');
    exit;
  }
  else if ((isset($_POST["apply_discount"])) && (isset($discount_name)) && (strlen($discount_name) > 0)) {
    $successes = array();
    $errors = array();
    $error_code = NULL;
    $sql = "SELECT discount_id,type,discount_from,discount_to, min_bottles from order_discount where name = '".$discount_name."' ";
    $result = $mydb->runSql($sql);
    $row = $mydb->getRow($result);
    if (!$row) {
      $errors[] = lang("CART_DISCOUNT_ERROR", array($discount_name));
      $_SESSION["userCakeErrors"] = $errors;
      unset($_SESSION["discount_name"]);
      kickBack('','cart','');
    }
    else {
      $discount_id = $row[0];
      $discount_type = $row[1];
      $discount_from = $row[2];
      $discount_to = $row[3];
      $discount_min_bottles = $row[4];
      $bottle_quantity = $cart_qty;
      $explain_error_code = NULL;
      $error_code = checkDiscountValid($discount_id, $discount_type, $discount_from, $discount_to);
      if (!$error_code) {
	$error_code = checkDiscountStrictMinBottles($discount_type, $discount_min_bottles,$bottle_quantity);// for 6FOR5 type discounts
	if (($error_code) && ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645)) {
	  $explain_error_code = "CART_DISCOUNT_645";
	}
      }
    }
    if (!$error_code) {
      $_SESSION["discount_id"] = $discount_id;
      $_SESSION["discount_name"] = $discount_name;
      $successes[] = lang("CART_DISCOUNT_SUCCESS", array($discount_name));
      if ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645) {
	$successes[] = lang("CART_DISCOUNT_645");
      }
      $_SESSION["userCakeSuccesses"] = $successes;
      kickBack('','cart','');
    }
    else {
      unset($_SESSION["discount_id"]);
      unset($_SESSION["discount_name"]);
      $errors[] = lang("CART_DISCOUNT_ERROR", array($discount_name));
      $errors[] = lang($error_code);
      if ($explain_error_code)
	$errors[] = lang($explain_error_code);
      $_SESSION["userCakeErrors"] = $errors;
      kickBack('','cart','');
    }
  }
  else {
    $successes = array();
    $successes[] = lang("CART_UPDATE_SUCCESS");
    $_SESSION["userCakeSuccesses"] = $successes;
    kickBack('','cart','');
  }
  exit;
}

$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];
$warnings = $_SESSION["userCakeWarnings"];

$cart_total = 0;
$cart_qty = 0;
$discount_total = 0;
if ($_SESSION["cart"]) {
  $cart = $_SESSION["cart"];
  $discount_id = $_SESSION["discount_id"];
  $discount_value = 0;
  $discount_percent = 0;
  if ($discount_id > 0) {
    $sql = "SELECT discount_from, discount_to, value, percent, apply_to, type, type_value, type_value_string, min_bottles from order_discount where discount_id = '".$discount_id."' ";
    $result = $mydb->runSql($sql);
    $row = $mydb->getRow($result);
    if ($row) {
      $discount_from = $row[0];
      $discount_to = $row[1];
      $discount_value = $row[2];
      $discount_percent = $row[3];
      $discount_apply_to = $row[4];
      $discount_type = $row[5];
      $discount_type_value = $row[6];
      $discount_type_value_string = $row[7];
      $discount_min_bottles = $row[8];
    }
    $bottle_quantity = 0;
    foreach($cart as $k => $cartitem) {
      $item_quantity = $cartitem["quantity"]*$cartitem["bottles"];
      $bottle_quantity = $bottle_quantity + $item_quantity;
    }
    $discount_bottle_quantity = 0;
    if (($discount_id >= 0) && (checkDiscountWindow($discount_from, $discount_to))) {
      if ($discount_min_bottles > 1) { // compute how many bottles in cart to apply discount
	foreach($cart as $k => $cartitem) {
	  $item_quantity = $cartitem["quantity"]*$cartitem["bottles"];
	  if (checkDiscountApplies($discount_apply_to, $cartitem["base_price"], $cartitem["price"], $cartitem["grup"])) {
	    $discount_bottle_quantity += $item_quantity;
	  }
	}
      }
      else {
	$discount_bottle_quantity = $discount_min_bottles;
      }
      if ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645) {
	$error_code = checkDiscountStrictMinBottles($discount_type, $discount_min_bottles,$discount_bottle_quantity);
	if ($error_code) {
	  $errors[] = lang($error_code);
	  $errors[] = lang("CART_DISCOUNT_645");
	  unset($_SESSION["discount_id"]);
	  unset($_SESSION["discount_name"]);
	  $discount_id = 0;
	  $discount_percent = 0;
	  $discount_value = 0;
	}
      }
    }
    else if (!isShippingDiscount($discount_type)) {
      unset($_SESSION["discount_id"]);
      unset($_SESSION["discount_name"]);
      $discount_id = 0;
      $discount_percent = 0;
      $discount_value = 0;
    }
  }
  if ((isShippingDiscount($discount_type)) && (!checkDiscountShippingApplies($bottle_quantity, $discount_type))) {
      $warnings[] = lang("CART_DISCOUNT_SHIPPING_WARNING");
  }
  $cart_counter = 0;
  $item_counter = 0;
  $cart_types = "";  // debug
  foreach($cart as $k => $cartitem) {
    if ($cartitem["deleted"] == '0') {
      $cart_types .= $cartitem["type"]." "; // debug
      if ($cartitem["type"] == BDW_LINE_ITEM_GIFTCARD) {
	$total = $cartitem["price"];
	$cart_total = $cart_total + $total;
	$cart_qty = $cart_qty + $cartitem["quantity"];
	$name = getCartGiftcardName($cartitem);
	$url = "/giftcard/";
	$title = $name;
	$items[$item_counter++] = array('item' => $k,
					'type' => $cartitem["type"],
					'url' => $url,
					'title' => $title,
					'quantity' => $cartitem["quantity"],
					'bottles' => $cartitem["bottles"],
					'name' => $name,
                                        'full_name' => $name,
					'vint_id' => '0',
					'product_id' => '0',
					'wy_name' => "",
					'appellation' => "", 
					'year' => '0',
					'grup' => '0', 
					'shipping' => '0', 
					'base_price' => fixCurrency($total),
					'price' => fixCurrency($total),
					'total' => fixCurrency($total));
      }
      else {
	$smarty->assign('vintage_id',$cartitem["vint_id"]); // debug
	$smarty->assign('cart_winery_id',$cartitem["winery_id"]); // debug
	$smarty->assign('cart_appellation',$cartitem["appellation"]); // debug
	$smarty->assign('cart_base_price',$cartitem["base_price"]); // debug
	$smarty->assign('cart_price',$cartitem["price"]); // debug
	$item_base_price = $cartitem["base_price"];
	$item_price = $cartitem["price"];
	$item_discount = 0;
	$country = NULL;
        // need to fix discount type = Country in add to card
	if ($discount_type == BDW_DISCOUNT_TYPE_COUNTRY) {
      $country = getVintageCountry($cartitem["vint_id"]);
	}
	else if ($discount_type == BDW_DISCOUNT_TYPE_TYPE) {
	  $wine_type = getWineType($cartitem["vint_id"]);
	}
    else if ($discount_type == BDW_DISCOUNT_TYPE_FAMILY) {
	  $item_CA_price = getCATradePrice($cartitem["vint_id"]);
	  if ($item_CA_price > 0) {
	    $item_base_price = $item_CA_price;
	    if ($discount_percent > 0) {
	      $item_discount = number_format((($item_base_price*$discount_percent) / 100), 2);
	      $item_price = fixCurrency($item_base_price - $item_discount);
	    }
	  }
	}
	if ($discount_id > 0) { 
	  if (($discount_min_bottles <= $discount_bottle_quantity) && 
	      (checkDiscountTarget($discount_type, $discount_type_value, $discount_type_value_string, $cartitem["vint_id"], $cartitem["winery_id"], $cartitem["appellation"], $country, $wine_type)) &&
	      (checkDiscountApplies($discount_apply_to, $cartitem["base_price"], $cartitem["price"], $cartitem["grup"]))) {
	    if ($item_base_price <= $item_price) { //  discount on regular items
	      $item_base_price = $item_price;
	      $item_discount = number_format((($item_base_price*$discount_percent) / 100), 2);
	      $item_price = fixCurrency($item_base_price - $item_discount);
	    }
	    else if ($item_base_price > $item_price) { // discount on specials
	      $second_discount = number_format((($item_price*$discount_percent) / 100), 2);
	      $item_price = fixCurrency($item_price - $second_discount);
	      $item_discount = $item_base_price - $item_price;
	    }
	  }
	}
	else if ($item_base_price > $item_price) {
	  $item_discount = $item_base_price - $item_price;
	}
	$cartitem["discount_price"] = $item_price;
	$_SESSION['cart'][$cart_counter] = $cartitem;
	$smarty->assign('cart_discount_price',$cartitem["discount_price"]); // debug
	$smarty->assign('item_discount_price',$item_price); // debug
	
	$total = $cartitem["quantity"] * $item_price;
	$discount = $cartitem["quantity"] * $item_discount;
	$cart_total = $cart_total + $total;
	$cart_qty = $cart_qty + $cartitem["quantity"];
	$discount_total = $discount_total + $discount;
	if ($cartitem["grup"]) 	
	  $url = "/wine/sampler/".$cartitem["vint_id"]."/";
	else 
	  $url = "/wine/".$cartitem["vint_id"]."/";
	$title = fullMobileCartName($cartitem["winery_name"], $cartitem["vint_name"], $cartitem["year"], $cartitem["size"]);
	$full_name = fullCartName($cartitem["winery_name"], $cartitem["vint_name"], $cartitem["size"]);
	$items[$item_counter++] = array('item' => $k,
					'type' => $cartitem["type"],
					'url' => $url,
					'title' => $title,
					'vint_id' => $cartitem["vint_id"],
					'product_id' => $cartitem["product_id"],
					'name' => $cartitem["vint_name"],
					'full_name' => $full_name,
					'wy_name' => $cartitem["winery_name"],
					'appellation' => $cartitem["appellation"],
					'year' => $cartitem["year"],
					'size' => $cartitem["size"],
					'quantity' => $cartitem["quantity"],
					'grup' => $cartitem["grup"],
					'bottles' => $cartitem["bottles"],
					'shipping' => $cartitem["shipping"],
					'base_price' => $item_base_price,
					'price' => $item_price,
					'total' => fixCurrency($total));
      }
    }
    $cart_counter++;
  }
  $smarty->assign('total_items',count($items));
}
$grand_total = $cart_total;
$_SESSION["cart_total"] = fixCurrency($cart_total);
$_SESSION["grand_total"] = fixCurrency($grand_total);
$_SESSION["cart_qty"] = $cart_qty;
$smarty->assign('items',$items);
$smarty->assign('cart_total',fixCurrency($cart_total));
$smarty->assign('cart_qty', $cart_qty);
$smarty->assign('grand_total',fixCurrency($grand_total));
$smarty->assign('discount_total',fixCurrency($discount_total));

$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
$smarty->assign('uc_warnings',$warnings);

destroySession("userCakeSuccesses");
destroySession("userCakeErrors");
destroySession("userCakeWarnings");

$smarty->assign('cart_types',$cart_types); //debug
$smarty->assign('discount_id',$_SESSION["discount_id"]); //debug
$smarty->assign('discount_name',$_SESSION["discount_name"]); //debug
$smarty->assign('discount_value',$discount_value); //debug
$smarty->assign('discount_percent',$discount_percent); //debug
$smarty->assign('discount_from',$discount_from); //debug
$smarty->assign('discount_to',$discount_to); //debug
?>