<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT * FROM country_code WHERE deleted = '0' ORDER BY full_name";
$result = $mydb->runSql($sql);
$counter = 0;
while ($row = $mydb->getAssoc($result)) {
  $countries[$counter++] = array('country_name' => $row["full_name"],
				 'c_id' => $row["c_id"]);
}
$smarty->assign('countries',$countries);
?>