<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = 0;
$viewage = 18;

$sql = "SELECT v_id, type_id, resource_id, name, friendly, notes, deleted FROM varietal ORDER BY name ";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);
$sql .= " LIMIT ".$two.",".$viewage;
$result = $mydb->runSql($sql);

$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $varietals[$counter++] = array('v_id' => $row["v_id"],
				 'type_id' => $row["type_id"],
				 'resource_id' => $row["resource_id"],
				 'name' => $row["name"],
				 'friendly' => $row["friendly"],
				 'notes' => $row["notes"],
				 'deleted' => $row["deleted"]);
}

if ($total > $viewage) {
  $smarty->assign('paginator', "<b>Pages:</b> ".paginator($total,$viewage,'/amn/varietals/',$two));
}
$smarty->assign('varietals',$varietals);

$sql = "SELECT type_id, name FROM type WHERE deleted = '0' ORDER BY name";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $types[$counter++] = array('type_id' => $row["type_id"],
			     'name' => $row["name"]);
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

?>