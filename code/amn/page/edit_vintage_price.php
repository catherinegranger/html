<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT *, v.name AS wine_name, wy.name AS wy_name, wy.web_name AS wyweb_name";
$sql .= " FROM vintage AS v, winery AS wy";
$sql .= " WHERE v.wy_id = wy.wy_id AND v.vint_id = '".$two."'";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
foreach($row as $key => $value) {
	$smarty->assign(${key},$value);
}
$store_markup = 0;
$ny_markup = 0;
if ($row["ca_wholesale_price"] > 0) {
  $store_markup = round((($row["price"] - $row["ca_wholesale_price"]) / $row["ca_wholesale_price"]) * 100);
  $ny_markup = round((($row["ny_wholesale_price"] - $row["ca_wholesale_price"]) / $row["ca_wholesale_price"])*100);
}
$smarty->assign('store_markup', $store_markup);
$smarty->assign('ny_markup', $ny_markup);

?>