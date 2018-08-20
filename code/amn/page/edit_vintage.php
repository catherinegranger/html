<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT v_id, name FROM varietal WHERE deleted = '0' ORDER BY name";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $varietals[$counter++] = array('name' => $row["name"],
				 'v_id' => $row["v_id"]);
}
$smarty->assign('varietals',$varietals);


$sql = "SELECT wy_id, name FROM winery ORDER BY sort_name";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $wineries[$counter++] = array('name' => $row["name"],
				'wy_id' => $row["wy_id"]);
}
$smarty->assign('wineries',$wineries);

$sql = "SELECT type_id, name FROM type WHERE deleted = '0' ORDER BY name";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $types[$counter++] = array('name' => $row["name"],
			     'type_id' => $row["type_id"]);
}
$smarty->assign('types',$types);

$sql = "SELECT *, name AS vintage_name FROM vintage WHERE vint_id ='".$two."'";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
foreach($row as $key => $value) {
	$smarty->assign(${key},$value);
}
$show = getShow($row["view_webshop"], $row["view_ca"], $row["view_ny"], $row["view_dist"]);
$smarty->assign('show', $show);

$sql = "SELECT vv_id, v_id FROM var_vint WHERE vint_id ='".$two."'";
$result = $mydb->runSql($sql);
$counter = 1;
while($row = $mydb->getAssoc($result)) {
  $smarty->assign('v_id_'.$counter,$row["v_id"]);
  $smarty->assign('vv_id_'.$counter,$row["vv_id"]);
  $counter++;
}

$sql = "SELECT rev_id, title, url FROM vint_review WHERE vint_id ='".$two."'";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $reviews[$counter++] = array('title' => $row["title"],
			       'url' => $row["url"],
			       'rev_id' => $row["rev_id"]);
}
$smarty->assign('reviews',$reviews);

?>