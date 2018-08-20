<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT * FROM resource_cat WHERE deleted = '0' ORDER BY title";
$result = $mydb->runSql($sql);
$counter = 0;
while ($row = $mydb->getAssoc($result)) {
  $cats[$counter++] = array('title' => $row["title"],
			    'rc_id' => $row["rc_id"]);
}
$smarty->assign('cats',$cats);

?>