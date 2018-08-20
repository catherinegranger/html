<?PHP

if (!empty($_POST)) {
  $successes = array();
  $errors = array();
  $vint_id = trim($_POST["vint_id"]);
  $product_id = trim($_POST["product_id"]);
  $item_type = trim($_POST["item_type"]);
  $year = trim($_POST["year"]);
  $size = trim($_POST["size"]);
  $winery_id = trim($_POST["winery_id"]);
  $winery_name = trim($_POST["winery_name"]);
  $appellation = trim($_POST["appellation"]);
  $vint_name = trim($_POST["vint_name"]);
  $base_price = trim($_POST["base_price"]);
  $price = trim($_POST["price"]);
  $bottles = trim($_POST["bottles"]);
  $shipping = trim($_POST["shipping"]);
  $grup = trim($_POST["grup"]);
  $quantity = trim($_POST["quantity"]);

  if ($quantity > '0') {
    unset($_SESSION["redirectVintage"]);
    if (isset($vint_id)) {
      $_SESSION["redirectVintage"] = $vint_id;
    }
    $_SESSION["cart_total"] = fixCurrency($_SESSION["cart_total"] + $quantity*$price);
    $_SESSION["grand_total"] = fixCurrency($_SESSION["grand_total"] + $quantity*$price);
    $_SESSION["cart_qty"] = $_SESSION["cart_qty"] + $quantity;
    $incart = FALSE;
    $index = 0;
    $cart = $_SESSION["cart"];
    if (is_array($cart)) {
      foreach($cart as $k => $cartitem) {
	if ($cartitem["deleted"] == '0') {
	  if ($cartitem["vint_id"] == $vint_id) {
	    $incart = TRUE;
	    $_SESSION['cart'][$index]['quantity'] = $cartitem["quantity"] + $quantity;
	  }
	}
	$index++;
      }
    }
    if ($incart == FALSE) {
      //if ($bottles == 0) $bottles = 1;
      $cartsize = count($_SESSION['cart']);
      $_SESSION['cart'][$cartsize] = array('type' => $item_type,
					   'vint_id' => $vint_id,
					   'product_id' => $product_id,
					   'year' => $year,
					   'size' => $size,
					   'winery_id' => $winery_id,
					   'winery_name' => $winery_name,
					   'appellation' => $appellation,
					   'vint_name' => $vint_name,
					   'grup' => $grup,
					   'bottles' => $bottles,
					   'shipping' => $shipping,
					   'quantity' => $quantity,
					   'base_price' => $base_price,
					   'price' => $price,
					   'discount_price' => $price,
					   'deleted' => '0');
    }
    $cart_qty = cartBottleQuantity($_SESSION['cart']);
    $_SESSION["cart_qty"] = $cart_qty;
    $successes = array();
    $successes[] = lang("CART_UPDATE_SUCCESS");
    $_SESSION["userCakeSuccesses"] = $successes;
    kickBack('','cart','');
    exit;
  } 
  else {
    $errors[] = lang("CART_NEGATIVE_QUANTITY");
    $_SESSION["userCakeErrors"] = $errors;
    kickBack('','wine/'.$vint_id,'');
    exit;
  }
} 
else {
  header("Location: /");
  exit;
}

?>