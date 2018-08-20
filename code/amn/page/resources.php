<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = '0';

if (($tri == 'delete') && ($for > '0')) {
  $params = array('deleted' => '1');
  if ($mydb->update("resource",$params,"WHERE r_id = '".$for."'")) {
    kickBack($_POST,'amn/resources/'.$two,'deleted');
    exit;
  }
} 
else if (($tri == 'undelete') && ($for > '0')) {
  $params = array('deleted' => '0');
  if ($mydb->update("resource",$params,"WHERE r_id = '".$for."'")) {
    kickBack($_POST,'amn/resources/'.$two,'undeleted');
    exit;
  }
}

$sql = "SELECT * FROM resource";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);
$sql .= " ORDER BY rc_id, web_name LIMIT ".$two.",15";
$result = $mydb->runSql($sql);
while($row = $mydb->getAssoc($result)) {
  $resources[] = array('r_id' => $row["r_id"],
		       'rc_id' => $row["rc_id"],
		       'title' => $row["title"],
		       'web_name' => $row["web_name"],
		       'img_art' => $row["img_art"],
		       'resource_url' => $row["resource_url"],
		       'keyword' => $row["keyword"],
		       'details' => $row["details"],
		       'deleted' => $row["deleted"]);
}
$smarty->assign('pages',paginator($total,'15','/amn/resources/',$two));
$smarty->assign('resources',$resources);
$smarty->assign('page',$two);


$sql = "SELECT * FROM resource_cat WHERE deleted = '0' ORDER BY title";
$result = $mydb->runSql($sql);
$counter = 0;
while ($row = $mydb->getAssoc($result)) {
  $cats[$counter++] = array('title' => $row["title"],
			    'rc_id' => $row["rc_id"]);
}
$smarty->assign('cats',$cats);

?>