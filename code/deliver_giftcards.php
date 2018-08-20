<?php 

require('/home/bdwine/www/class/database.class.php');
$cron_message = "Giftcards delivered:\n";

function markGiftCardDelivered($giftcard) {
  global $mydb;
  $delivered = 1;
  $params = " WHERE id = '".$giftcard["id"]."'";
  $values = array("delivered" => $delivered);
  $mydb->update("uc_giftcards",$values,$params);
}

function deliverGiftCard($giftcard) {
  $header = 'From: Webshop@bluedanubewine.com';
  $giftcard_url = "https://www.bluedanubewine.com/giftcard/".$giftcard["created_date"];
  $giftcard_subject = $giftcard["purchaser_name"]." sent you a $".$giftcard["value"]." E-Gift Card for BlueDanubeWine.com";
  $giftcard_message = "Hello ".$giftcard["recipient_name"].",\n".$giftcard_subject.".\n Please follow the link below to view your E-Gift Card.\n".$giftcard_url."\n For any questions regarding your E-Gift Card, please contact webshop@bluedanubewine.com. \nEnjoy your gift!\nThe Blue Danube Webshop Team" ;
  $giftcard_to = $giftcard["recipient_email"];
  mail($giftcard_to, $giftcard_subject, $giftcard_message, $header);
}


$mydb->selectDB("bdwine_db");
$today = time();
$sql = "SELECT id, purchaser_email, purchaser_name, recipient_email, recipient_name, code, activated, value, used, message, type, text, image, created_date, delivery_date, delivered FROM uc_giftcards WHERE delivery_date <= '".$today."' AND delivered = 0 AND activated = 0";
$result = $mydb->runSql($sql);
while($row = $mydb->getAssoc($result)) {
  deliverGiftCard($row);
  $cron_message .= $row["purchaser_name"]." sent ".$row["recipient_name"]." a $".$row["value"]." E-Gift Card for BlueDanubeWine.com\n";
  markGiftCardDelivered($row);
}


echo $cron_message;

?>