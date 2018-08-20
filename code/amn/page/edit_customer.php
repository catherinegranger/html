<?php

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT o.o_id, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
$sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone,";
$sql .= " r.first_name, r.last_name, r.address1, r.address2,";
$sql .= " r.city, r.state, r.zipcode, r.email, r.phone";
$sql .= " FROM store_order AS o, recipient AS r";
$sql .= " WHERE o.o_id = '".$two."' AND o.rec_id = r.rec_id";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
if ($row) {
  $recipient_email = $row["email"];
  foreach($row as $key => $name) {
    $smarty->assign(${key},$name);
  }
}
$sql = "SELECT store_order_item.ident, store_order_item.type, store_order_item.quantity, store_order_item.price, vintage.year, vintage.size, vintage.product_id, vintage.name AS vint_name, winery.name AS wy_name, FROM_UNIXTIME(store_order.placed, '%m-%d-%Y') AS splaced FROM store_order_item, store_order, recipient, vintage LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8' AND recipient.email = '".$recipient_email."' ORDER BY store_order.placed DESC, ident";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  if ($row["type"] == BDW_LINE_ITEM_GIFTCARD) {
    $product_name = BDW_GIFTCARD_PRODUCTID;
    $product_id = BDW_GIFTCARD_PRODUCTID;
  }
  else {
    //$product_name = makeOrderItemDescription($row["year"], $row["wy_name"], $row["vint_name"]);
    $product_name = fullMobileCartName($row["wy_name"], $row["vint_name"],$row["year"],$row["size"]);
    $product_id = $row["product_id"];
  }
  $items[] = array('ident' => $product_name,
		   'product_id' => $product_id,
		   'quantity' => $row["quantity"],
		   'price' => fixCurrency($row["price"]),
		   'total_price' => fixCurrency($row["price"]*$row["quantity"]),
		   'placed' => $row["splaced"],
		   );
}
$smarty->assign('items',$items);

?>
