<?php

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amnprint/".$one;
  kickBack("", "login", "");
  exit;
}

$date = date('m-d-Y');
$smarty->assign('date', $date);

$sql = "SELECT instructions, tax, shipping, adult_signature, shipping_method, response_code, response_reason_text, transaction_id, authorization_code, payment_method, account_number, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
$sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone,";
$sql .= " r.first_name, r.last_name, r.address1, r.address2,";
$sql .= " r.city, r.state, r.zipcode, r.email, o.status, o.grand_total, o.o_id, r.phone,";
$sql .= " FROM_UNIXTIME(o.placed, '%c-%e-%y %l:%i%p') AS placed, discount_id";
$sql .= " FROM store_order AS o, recipient AS r";
$sql .= " WHERE o.o_id = '".$two."' AND o.rec_id = r.rec_id";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
if ($row) {
  foreach($row as $key => $name) {
    $smarty->assign(${key},$name);
  }
}
$sql = "SELECT order_discount.name AS discount_name FROM store_order, order_discount WHERE store_order.o_id = '".$two."' AND store_order.discount_id = order_discount.discount_id";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
if ($row) {
  foreach($row as $key => $name) {
    $smarty->assign(${key},$name);
  }
}
$sql = "SELECT store_order_item.ident, store_order_item.quantity, store_order_item.base_price, store_order_item.price, vintage.year, vintage.product_id, vintage.name AS vint_name, winery.name AS wy_name FROM store_order_item, vintage LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE vintage.vint_id = store_order_item.ident AND store_order_item.o_id = '".$two."' ORDER BY ident";
  $result = $mydb->runSql($sql);
  $counter = 0;
  while($row = $mydb->getAssoc($result)) {
    $product_name = makeOrderItemDescription($row["year"], $row["wy_name"], $row["vint_name"]);
    $items[$counter++] = array('ident' => $product_name,
			       'product_id' => $row["product_id"],
			       'quantity' => $row["quantity"],
			       'base_price' => fixCurrency($row["base_price"]),
			       'price' => fixCurrency($row["price"]),
			       'total_price' => fixCurrency($row["price"]*$row["quantity"]),
			       );
  }

$smarty->assign('items',$items);

?>
