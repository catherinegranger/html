<?php

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one."/".$two;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT instructions, need_by_date, include_card, o.include_card_cost,include_card_msg, tax, shipping, adult_signature, original_shipping, original_adult_signature, shipping_method, response_code, response_reason_text, transaction_id, authorization_code, payment_method, account_number, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
$sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone,";
$sql .= " r.user_id, r.first_name, r.last_name, r.address1, r.address2,";
$sql .= " r.city, r.state, r.zipcode, r.email, o.status, FROM_UNIXTIME(o.status_timestamp, '%c-%e-%y %l:%i%p') AS status_timestamp, o.status_notes, o.grand_total, o.o_id, r.phone,";
$sql .= " FROM_UNIXTIME(o.placed, '%c-%e-%y %l:%i%p') AS placed, discount_id,  o.giftcard_id, o.giftcard_total, authorize_logging ";
$sql .= " FROM store_order AS o, recipient AS r";
$sql .= " WHERE o.o_id = '".$two."' AND o.rec_id = r.rec_id ";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
if ($row) {
  $userId = $row["user_id"];
  $subscription_id = 0;
  $wine_club = FALSE;
  if ($userId > 0) {
    $userDetails = fetchUserDetails(NULL, NULL, $userId);
    $subscription_id = $userDetails["subscription_id"];
  }
  if ($subscription_id > 0)
    $wine_club = TRUE;
  $smarty->assign('wine_club',$wine_club);
  $giftcard_id = $row["giftcard_id"];
  $giftcard_payment = fixCurrency($row["grand_total"] - $row["giftcard_total"]);
  $giftcard_balance = 0;
  if ($giftcard_id > 0) {
    $giftcard = getGiftCardById($row["giftcard_id"]);
    $giftcard_balance = fixCurrency($giftcard["balance"]);
  }
  $smarty->assign('giftcard_balance',$giftcard_balance);
  $smarty->assign('giftcard_payment',$giftcard_payment);
  foreach($row as $key => $name) {
    $smarty->assign(${key},$name);
  }
  if ($row["original_shipping"] > 0) {
    $shipping_savings = fixCurrency($row["original_shipping"] - $row["shipping"]);
    $smarty->assign('shipping_savings',$shipping_savings);
  }
  else {
    $smarty->assign('shipping_savings',0);
  }
  if ($row["original_adult_signature"] > 0) {
    $adult_signature_savings = fixCurrency($row["original_adult_signature"] - $row["adult_signature"]);
    $smarty->assign('adult_signature_savings',$adult_signature_savings);
  }
  else {
    $smarty->assign('adult_signature_savings',0);
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

$sql = "SELECT subscription_id FROM uc_users WHERE store_order.o_id = '".$two."' AND store_order.discount_id = order_discount.discount_id";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
if ($row) {
  foreach($row as $key => $name) {
    $smarty->assign(${key},$name);
  }
}

$order_items = getOrderItems($two, $one);
$smarty->assign('items',$order_items);
$smarty->assign('validated_address',$_SESSION["validated_address"]);
unset($_SESSION["validated_address"]);


?>
