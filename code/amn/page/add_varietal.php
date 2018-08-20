<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT * FROM type WHERE deleted = '0' ORDER BY name";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $types[$counter++] = array('name' => $row["name"],
			     'type_id' => $row["type_id"]);
}
$smarty->assign('types',$types);

$sql = "SELECT r_id, web_name, title FROM resource WHERE rc_id = 1 and deleted = 0 ORDER BY title";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $resources[$counter++] = array('resource_id' => $row["r_id"],
				 'web_name' => $row["web_name"],
				 'title' => $row["title"]);
}
$smarty->assign('resources',$resources);

$_SESSION["name"] = "";
$_SESSION["friendly"] = "";
$_SESSION["type_id"] = "";
$_SESSION["resource_id"] = "";
$_SESSION["notes"] = "";


?>