<?php 
$base_file_dir = dirname(__FILE__).'/../';

require($base_file_dir.'class/databasei.class.php');
$mydb = new Database();



function makeOrderItemDescription($year, $wy_name, $vint_name) {
  $description = $vint_name;
  if (($wy_name) && ($wy_name != "Specials")) 
    $description = $wy_name . " " . $description;
  if ($year)
    $description = $year . " " . $description;
  return($description);
}

$time_adjust = 60 * 60 * 3;
$today = time() - $time_adjust;
$yesterday = time() - (2 * 24 * 60 * 60);
$last_week = time() - (7 * 24 * 60 * 60);
$last_month = time() - (4 * 7 * 24 * 60 * 60);
$message = "The following orders has been placed but left in a suspended or declined state by the customer (please verify that they didn't have a subsequent successful order):\n\n";


$sql = "SELECT instructions, store_order.first_name AS ship_first_name, store_order.last_name AS ship_last_name, store_order.address1 AS ship_address1, store_order.address2 AS ship_address2,";
$sql .= " store_order.city AS ship_city, store_order.state AS ship_state, store_order.zipcode AS ship_zipcode, store_order.email AS ship_email, store_order.phone AS ship_phone,";
$sql .= " recipient.first_name, recipient.last_name, recipient.address1, recipient.address2,";
$sql .= " recipient.city, recipient.state, recipient.zipcode, recipient.email, recipient.phone, store_order.status, store_order.tax, store_order.shipping, store_order.adult_signature, store_order.grand_total, store_order.o_id, ";
$sql .= " FROM_UNIXTIME(store_order.placed, '%c-%e-%y %l:%i%p') AS placed";
$sql .= " FROM store_order, recipient";
$sql .= " WHERE store_order.rec_id = recipient.rec_id  AND store_order.placed > '".$yesterday."' AND (store_order.status = '8' || store_order.status = '7') ";
$result = $mydb->runSql($sql);
while($row = $mydb->getAssoc($result)) {
  $order_id = $row["o_id"];
  $name = $row["first_name"].' '.$row["last_name"];
  if ($row["status"] == 8) $status = "Suspended";
  else $status = "Declined";
  $country = "USA";
  $address = $row["address1"].' '.$row["address2"];
  $address = trim(str_replace(',',' ',$address));
  $city = ucwords(trim(str_replace(',',' ',$row["city"])));
  $full_address = $address.' '.$city.' '.strtoupper($row["state"]).' '.$row["zipcode"].' '.$country;
  $ship_address = $row["ship_address1"].' '.$row["ship_address2"];
  $ship_address = trim(str_replace(',',' ',$ship_address));
  $ship_city = ucwords(trim(str_replace(',',' ',$row["ship_city"])));
  $full_shipping_address = $ship_address.' '.$ship_city.' '.strtoupper($row["ship_state"]).' '.$row["ship_zipcode"].' '.$country;
  $message .= "http://www.bluedanubewine.com/amn/edit_order/";
  $message .= $order_id;
  $message .= "\nPlaced: ";
  $message .= $row["placed"];
  $message .= ", status: ";
  $message .= $status;
  $message .= "\n";
  $message .= $name;
  $message .= "\n";
  $message .= $full_address;
  $message .= "\n";
  $message .= "email: ";
  $message .= $row["email"];
  $message .= ", phone: ";
  $message .= $row["phone"];
  $message .= "\n";
  $sql2 = "SELECT store_order_item.ident, store_order_item.quantity, store_order_item.base_price,store_order_item.price, vintage.year, vintage.product_id, vintage.name AS vint_name, winery.name AS wy_name FROM store_order_item, vintage LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE vintage.vint_id = store_order_item.ident AND store_order_item.o_id = '".$order_id."' ORDER BY ident";
  $result2 = $mydb->runSql($sql2);
  while($row2 = $mydb->getAssoc($result2)) {
    $product_name = makeOrderItemDescription($row2["year"], $row2["wy_name"], $row2["vint_name"]);
    $product_total = $row2["price"]*$row2["quantity"];
    $product_line = $row2["quantity"].' '.$product_name.' $'.$product_total;
    $message .= $product_line;
    $message .= "\n";
  }
  $message .= "Order Total: $";
  $message .= $row["grand_total"];
  $message .= "\n\n";
}

//$to = "catherine@bluedanubewine.com";
$to = "frank@bluedanubewine.com,catherine@bluedanubewine.com,eugenie@bluedanubewine.com";
//$reply = "From Catherine Granger <catherine@bluedanubewine.com>";
$header = 'From: Webshop@bluedanubewine.com';
$subject = "Suspended/Declined Orders";
mail($to, $subject, $message, $header);
echo $message;


?>