<?php

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$display_name = $_SESSION["userCakeUser"]["display_name"];
$role = "Administrator";
$smarty->assign('display_name',$display_name);
$smarty->assign('role',$role);
$tri ? ($tri) : $tri = 0;
$two ? ($two) : $two = 'active';
$viewage = 20;

if ($two == 'active') {
  $where_clause = "WHERE o.rec_id = r.rec_id AND o.status != '0' AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8'  AND o.status != '17' AND o.status != '3'";
  $_SESSION["order_sort"] = "active";
} 
elseif ($two == 'suspended') {
  $where_clause = "WHERE o.rec_id = r.rec_id AND o.status = '8' ";
  $_SESSION["order_sort"] = "suspended";
}
else {
  $where_clause = "WHERE o.rec_id = r.rec_id";
  $_SESSION["order_sort"] = "all";
}

$sql = "SELECT *, r.first_name AS first_name, r.last_name AS last_name, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.state as ship_state ";
$sql .= " FROM store_order AS o, recipient AS r ".$where_clause." ORDER BY o.placed DESC";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);
$sql .= " LIMIT ".$tri.",".$viewage;
$result = $mydb->runSql($sql);
$counter = 0;
while ($row = $mydb->getAssoc($result)) {
  if ($row["giftcard_id"] > 0) 
    $grand_total = $row["giftcard_total"];
  else
    $grand_total = $row["grand_total"];
  $instructions = "";
  if ($row["need_by_date"]) {
    $instructions = $instructions."<b>Needed By</b>: ".$row["need_by_date"]."<br>";
  }
  if ($row["instructions"]) {
    $instructions = $instructions."<b>Instructions</b>: ".$row["instructions"]."<br>";
  }
  if ($row["include_card_msg"]) {
    $instructions = $instructions."<b>Greeting Message</b>: ".$row["include_card_msg"]."<br>";
  }
  if ($row["status_notes"]) {
    $instructions = $instructions."<b>Notes</b>: ".$row["status_notes"];
  }
  $orders[$counter++] = array('o_id' => $row["o_id"],
			      'name' => $row["first_name"]." ".$row["last_name"],
			      'ship_to' => $row["ship_first_name"]." ".$row["ship_last_name"],
			      'ship_state' => $row["ship_state"],
			      'placed' => date('m-d-y', $row["placed"]),
			      'grand_total' => $grand_total,
			      'status' => $scodes[$row["status"]],
			      'need_by_date' => $row["need_by_date"],
			      'include_card' => $row["include_card"],
			      'include_card_cost' => $row["include_card_cost"],
			      'include_card_msg' => $row["include_card_msg"],
			      'instructions' => $instructions);
}
$smarty->assign('orders', $orders);
$smarty->assign('tri', $tri);

if ($total > $viewage) {
  $smarty->assign('pages', "<b>Pages:</b> ".paginator($total,$viewage,'/amn/orders/'.$two.'/',$tri));
}


//need update to include giftcards
$file_dir = dirname(__FILE__)."/";
$daily_filename = $file_dir.'../../../reports/daily_order_report.csv';
$daily_report_url = 'http://bluedanubewine.com/reports/daily_order_report.csv';
$time_adjust = 60 * 60 * 3;
$today = time() - $time_adjust;
$yesterday = time() - (24 * 60 * 60);
$daily_report_content = '"ORDER_NO","STORE_NAME","TXN_DT","CCY_CODE","PAYMENTMETHOD_REF","PHONE","EMAIL","BADDR_FIRST_NM","BADDR_LAST_NM","BADDR_COMPANY","BADDR_LINE1","BADDR_LINE2","BADDR_LINE3","BADDR_CITY","BADDR_STATE","BADDR_ZIP","BADDR_COUNTRY","SADDR_FIRST_NM","SADDR_LAST_NM","SADDR_PHONE","SADDR_EMAIL","SADDR_COMPANY","SADDR_LINE1","SADDR_LINE2","SADDR_LINE3","SADDR_CITY","SADDR_STATE","SADDR_ZIP","SADDR_COUNTRY","PaymentRefNumber","CreditCardType","CreditCardExpiration","CreditCardName","CreditCardNumber","PO_NUMBER","SALES_REP","TERMS_REF","SHIP_METHOD_REF","MEMO","TAX1_TOTAL","TOTAL_SHIP_COST","TOTAL_HANDLING_COST","TOTAL_DISCOUNT_AMT", "TOTAL_ORDER_AMT","ITEM_NAME","ITEM_DESC","ITEM_QUANTITY","ITEM_RATE","ITEM_AMOUNT"';
$daily_report_content .="\n";

$order_sql = "SELECT o.o_id, o.status,o.grand_total, o.authorization_code,o.transaction_id, o.payment_method, o.account_number, o.shipping_method, o.tax, o.shipping, o.adult_signature, o.instructions, o.need_by_date,  o.include_card, o.include_card_cost,o.include_card_msg,o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
$order_sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone, FROM_UNIXTIME(o.placed, '%m/%d/%Y') AS placed,";
$order_sql .= " r.first_name, r.last_name, r.address1, r.address2,";
$order_sql .= " r.city, r.state, r.zipcode, r.email,  r.phone";
$order_sql .= " FROM store_order AS o, recipient AS r";
$order_sql .= " WHERE o.rec_id = r.rec_id AND o.placed > ".$yesterday." ORDER BY r.rec_id DESC";
//$order_result = $mydb->runSql($order_sql);
$order_result = NULL;
if ($order_result) {
  while ($order_row = $mydb->getAssoc($order_result)) {
    $item_sql = "SELECT store_order_item.ident, store_order_item.quantity, store_order_item.base_price,store_order_item.price, vintage.year,vintage.size, vintage.product_id, vintage.name AS vint_name, winery.name AS wy_name FROM store_order_item, vintage LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE vintage.vint_id = store_order_item.ident AND store_order_item.o_id = '".$order_row["o_id"]."' ORDER BY ident";
    $item_result = $mydb->runSql($item_sql);
    $billing_name = $order_row["first_name"].' '.$order_row["last_name"];
    while($item_row = $mydb->getAssoc($item_result)) {
      //$product_name = makeOrderItemDescription($item_row["year"], $item_row["wy_name"], $item_row["vint_name"]);
      $product_name = fullMobileCartName($item_row["wy_name"], $item_row["vint_name"],$item_row["year"],$item_row["size"]);
      $item_price = fixCurrency($item_row["price"]);
      $total_item_price = fixCurrency($item_row["price"]*$item_row["quantity"]);
      $daily_report_content .= '"'.$order_row["o_id"].'","Blue Danube Web Shop","'.$order_row["placed"].'","USD","'.$order_row["payment_method"].'","'.$order_row["phone"].'","'.$order_row["email"].'","'.$order_row["first_name"].'","'.$order_row["last_name"].'","","'.$order_row["address1"].'","'.$order_row["address2"].'","","'.$order_row["city"].'","'.$order_row["state"].'","'.$order_row["zipcode"].'","USA","'.$order_row["ship_first_name"].'","'.$order_row["ship_last_name"].'","'.$order_row["ship_phone"].'","'.$order_row["ship_email"].'","","'.$order_row["ship_address1"].'","'.$order_row["ship_address2"].'","","'.$order_row["ship_city"].'","'.$order_row["ship_state"].'","'.$order_row["ship_zipcode"].'","USA","'.$order_row["transaction_id"].'","'.$order_row["payment_method"].'","N/A","'.$billing_name.'","'.$order_row["account_number"].'","'.$order_row["o_id"].'","","","'.$order_row["shipping_method"].'","'.$order_row["instructions"].'","'.$order_row["tax"].'","'.$order_row["shipping"].'","'.$order_row["adult_signature"].'","0","'.$order_row["grand_total"].'","'.$item_row["product_id"].'","'.$product_name.'","'.$item_row["quantity"].'","'.$item_price.'","'.$total_item_price.'"';
      $daily_report_content .="\n";
    }
  }
}
//if (is_writable($daily_filename)) {
//   if (!$handle = fopen($daily_filename, 'w')) {
//         $error = "Cannot open file ($daily_filename)";
//   }
//   if (fwrite($handle, $daily_report_content) === FALSE) {
//       $error = "Cannot write to file ($daily_filename)";
//   }
//   fclose($handle);
//} 
//else {
//   $error = "The file $daily_filename is not writable";
//}
  
//$smarty->assign('error',$error);
//$smarty->assign('daily_filename',$daily_filename);
//$smarty->assign('daily_report_url',$daily_report_url);
//$smarty->assign('daily_report_content',$daily_report_content);


?>