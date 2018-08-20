<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT c_id, full_name FROM country_code WHERE deleted = '0' ORDER BY full_name";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $countries[] = array('c_id' => $row["c_id"], 'full_name' => $row["full_name"]);
}
$smarty->assign('countries',$countries);

$sql = "SELECT *, name AS winery_name FROM winery WHERE wy_id = '".$two."'";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
foreach ($row as $key => $value) {
  $smarty->assign(${key},$value);
}
$show = getShow($row["view_webshop"], $row["view_ca"], $row["view_ny"], $row["view_dist"]);
$smarty->assign('show', $show);
?>