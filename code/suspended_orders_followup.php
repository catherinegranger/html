<?php 
require('/home/bdwine/www/class/database.class.php');


$time_adjust = 60 * 60 * 3;
$today = time() - $time_adjust;
$yesterday = time() - (2 * 24 * 60 * 60);
$last_days = time() - (4 * 24 * 60 * 60);
$last_week = time() - (7 * 24 * 60 * 60);
$last_2weeks = time() - (2 * 7 * 24 * 60 * 60);
$last_month = time() - (4 * 7 * 24 * 60 * 60);
$main_message = "\n\nYou've recently visited our online store and picked out some great wine, but you did not complete your purchase. Do you need some additional assistance completing the order? Do you have questions about our shipping options?\n\n";
$main_message2 = "\n\nIf you have any questions, please do not hesitate to contact us at +1 (650) 941-4699 or by replying to this message.\n\n";

$mydb->selectDB("bdwine_db");
$sql = "SELECT instructions, store_order.first_name AS ship_first_name, store_order.last_name AS ship_last_name, store_order.address1 AS ship_address1, store_order.address2 AS ship_address2,";
$sql .= " store_order.city AS ship_city, store_order.state AS ship_state, store_order.zipcode AS ship_zipcode, store_order.email AS ship_email, store_order.phone AS ship_phone,";
$sql .= " recipient.first_name, recipient.last_name, recipient.address1, recipient.address2,";
$sql .= " recipient.city, recipient.state, recipient.zipcode, recipient.email, recipient.phone, store_order.status, store_order.tax, store_order.shipping, store_order.adult_signature, store_order.cart_total, store_order.grand_total, store_order.o_id, store_order.placed ";
$sql .= " FROM store_order, recipient";
$sql .= " WHERE store_order.rec_id = recipient.rec_id  AND store_order.placed > '".$last_2weeks."' AND (store_order.status = '8' || store_order.status = '7') ";
$result = $mydb->runSql($sql);
while($row = $mydb->getAssoc($result)) {
  $order_number = $row["o_id"];
  $placed = $row["placed"];
  $name = $row["first_name"].' '.$row["last_name"];
  $email = $row["email"];
  $cart_total = $row["cart_total"];
  $grand_total = $row["grand_total"];
  $shipping = $row["shipping"];
  $ratio = ($shipping / $grand_total) * 100;
  if (($cart_total > 40) && ($ratio <= 20)) {
    $status = '0'; // declined by customer
    $values = array("status" => $status);
    $mydb->update("store_order", $values, $params = " WHERE o_id = '".$order_number."'");
    $message = "Dear ";
    $message .= $name.',';
    $message .= $main_message;
    $message .= "You can complete your order at any time using the following URL: http://www.bluedanubewine.com/review/";
    $message .= $placed . '/';
    $message .= $order_number;
    $message .= $main_message2;
    $message .= "\n\n";
    $message .= "Kind regards,\n\nThe Blue Danube Webshop Team";
    $to = $email;
    $to1 = $name." <".$email.">";
    $to2 = "catherine_granger@yahoo.com";
    $subject = "Your recent order from BlueDanubeWine.com";
    $headers = 'From: Blue Danube Wine Co <webshop@bluedanubewine.com>' . "\r\n" . 'Reply-To: webshop@bluedanubewine.com' . "\r\n" . 'Bcc: webshop@bluedanubewine.com' . "\r\n";
    $headers2 = 'From: Blue Danube Wine Co <webshop@bluedanubewine.com>' . "\r\n" . 'Reply-To: webshop@bluedanubewine.com' . "\r\n" . 'Bcc: catherine@bluedanubewine.com' . "\r\n";
    mail($to, $subject, $message, $headers);
  }
}

echo $main_message;


?>
