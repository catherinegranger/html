<?PHP


if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}


$today = time();
//$one_years_ago = $today - (12 * 4 * 7 * 24 * 60 * 60);
$one_years_ago = mktime(0, 0, 0, 1, 20, 2016);

$sept16 = mktime(0, 0, 0, 9, 1, 2016);

$sept15 = mktime(0, 0, 0, 9, 1, 2015);

$two_years_ago = $today - (24 * 4 * 7 * 24 * 60 * 60);
$quarter_increment = 3 * 4 * 7 * 24 * 60 * 60;
$last_two_quarters = $today - 2*$quarter_increment;
$last_2016_quarters = $one_years_ago - 2*$quarter_increment;

$country_id = 1;
$austria_count1 = 0;
$austria_sql1 = "SELECT DISTINCT  store_order.rec_id, country_code.c_id, country_code.full_name  FROM store_order_item, store_order, recipient, vintage, winery, country_code  WHERE winery.c_id = country_code.c_id AND winery.wy_id = vintage.wy_id AND vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8'  AND country_code.c_id = '".$country_id."'  AND store_order.placed >= '".$sept16."' ORDER BY store_order.rec_id ";
$result = $mydb->runSql($austria_sql1);
while ($row = $mydb->getAssoc($result)) {
  $austria_count1++;
}

$smarty->assign('austria_sql1',$austria_sql1);
$smarty->assign('austria_count1',$austria_count1);
$austria_count2 = 0;
$austria_sql2 = "SELECT DISTINCT  store_order.rec_id, country_code.c_id, country_code.full_name  FROM store_order_item, store_order, recipient, vintage, winery, country_code  WHERE winery.c_id = country_code.c_id AND winery.wy_id = vintage.wy_id AND vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8'  AND country_code.c_id = '".$country_id."'  AND store_order.placed >= '".$sept15."' AND store_order.placed < '".$one_years_ago."'   ORDER BY store_order.rec_id ";
$result = $mydb->runSql($austria_sql2);
while ($row = $mydb->getAssoc($result)) {
  $austria_count2++;
}
$smarty->assign('austria_sql2',$austria_sql2);
$smarty->assign('austria_count2',$austria_count2);

$country_id = 4;
$count = 0;
$sql = "SELECT DISTINCT store_order.rec_id, country_code.c_id, country_code.full_name  FROM store_order_item, store_order, recipient, vintage, winery, country_code  WHERE winery.c_id = country_code.c_id AND winery.wy_id = vintage.wy_id AND vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8'  AND country_code.c_id = '".$country_id."'  AND store_order.placed >= '".$sept16."'  ORDER BY store_order.rec_id ";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $count++;
}

$smarty->assign('croatia_sql1',$sql);
$smarty->assign('croatia_count1',$count);
$count = 0;
$sql = "SELECT DISTINCT  store_order.rec_id, country_code.c_id, country_code.full_name  FROM store_order_item, store_order, recipient, vintage, winery, country_code  WHERE winery.c_id = country_code.c_id AND winery.wy_id = vintage.wy_id AND vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8'  AND country_code.c_id = '".$country_id."'  AND store_order.placed >= '".$sept15."'  AND store_order.placed < '".$one_years_ago."'  ORDER BY store_order.rec_id ";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $count++;
}
$smarty->assign('croatia_sql2',$sql);
$smarty->assign('croatia_count2',$count);

$country_id = 5;
$count = 0;
$sql = "SELECT DISTINCT  store_order.rec_id, country_code.c_id, country_code.full_name  FROM store_order_item, store_order, recipient, vintage, winery, country_code  WHERE winery.c_id = country_code.c_id AND winery.wy_id = vintage.wy_id AND vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8'  AND country_code.c_id = '".$country_id."'  AND store_order.placed >= '".$sept16."'  ORDER BY store_order.rec_id ";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $count++;
}

$smarty->assign('hungary_sql1',$sql);
$smarty->assign('hungary_count1',$count);
$count = 0;
$sql = "SELECT DISTINCT  store_order.rec_id,  country_code.c_id, country_code.full_name  FROM store_order_item, store_order, recipient, vintage, winery, country_code  WHERE winery.c_id = country_code.c_id AND winery.wy_id = vintage.wy_id AND vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8'  AND country_code.c_id = '".$country_id."'  AND store_order.placed >= '".$sept15."'  AND store_order.placed < '".$one_years_ago."'  ORDER BY store_order.rec_id ";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $count++;
}
$smarty->assign('hungary_sql2',$sql);
$smarty->assign('hungary_count2',$count);

$country_id = 15;
$count = 0;
$sql = "SELECT DISTINCT  store_order.rec_id, country_code.c_id, country_code.full_name  FROM store_order_item, store_order, recipient, vintage, winery, country_code  WHERE winery.c_id = country_code.c_id AND winery.wy_id = vintage.wy_id AND vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8'  AND country_code.c_id = '".$country_id."'  AND store_order.placed >= '".$sept16."'  ORDER BY store_order.rec_id ";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $count++;
}

$smarty->assign('georgia_sql1',$sql);
$smarty->assign('georgia_count1',$count);
$count = 0;
$sql = "SELECT DISTINCT  store_order.rec_id,  country_code.c_id, country_code.full_name  FROM store_order_item, store_order, recipient, vintage, winery, country_code  WHERE winery.c_id = country_code.c_id AND winery.wy_id = vintage.wy_id AND vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8'  AND country_code.c_id = '".$country_id."'  AND store_order.placed >= '".$sept15."'  AND store_order.placed < '".$one_years_ago."'  ORDER BY store_order.rec_id ";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $count++;
}
$smarty->assign('georgia_sql2',$sql);
$smarty->assign('georgia_count2',$count);
