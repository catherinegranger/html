<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = 'all';
$tri ? ($tri) : $tri = 0;

$viewage = 20;

if ($for == 'delete' && $fiv > 0) {

	$stuff["deleted"] = '1';
	
	$mydb->update('vintage',$stuff,'WHERE vint_id = '.$fiv);
	
	kickBack('','amn/vintages/'.$two.'/'.$tri,'deleted');
	exit;
	
}

if ($for == 'undelete' && $fiv > 0) {

	$stuff["deleted"] = '0';
	
	$mydb->update('vintage',$stuff,'WHERE vint_id = '.$fiv);
	
	kickBack('','amn/vintages/'.$two.'/'.$tri,'undeleted');
	exit;
	
}

$sql = "SELECT name, wy_id AS winery FROM winery ORDER BY name";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getRow($result)) {

	$wys[$counter++] = array('name' => $row[0],
							'wy_id' => $row[1]);
								
}

$smarty->assign('wys',$wys);

if ($two == 'samplers') {

	$sql = "SELECT *, name AS vintage, deleted AS vdel FROM vintage WHERE grup = '1' ORDER BY name, year DESC";

} elseif ($two > '0' && $two != 'all') {

	$sql = "SELECT *, wy.name AS winery, v.name AS vintage, v.deleted AS vdel";
	$sql .= " FROM vintage AS v, winery AS wy";
	$sql .= " WHERE v.wy_id = wy.wy_id AND wy.wy_id = ".$two;
	$sql .= " ORDER BY wy.name, v.name, v.year DESC";
	
} else {

	$sql = "SELECT *, wy.name AS winery, v.name AS vintage, v.deleted AS vdel";
	$sql .= " FROM vintage AS v, winery AS wy";
	$sql .= " WHERE v.wy_id = wy.wy_id";
	$sql .= " ORDER BY wy.name, v.name, v.year DESC";
	
}

$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);
$sql .= " LIMIT ".$tri.",".$viewage;
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$vintages[$counter++] = array('vintage' => $row["vintage"],
								'winery' => $row["winery"],
								'year' => $row["year"],
								'stock' => $row["stock"],
								'vint_id' => $row["vint_id"],
								'price' => fixCurrency($row["price"]),
								'deleted' => $row["vdel"]);
								
}

if ($total > $viewage) {
       $smarty->assign('paginator', "<b>Pages:</b> ".paginator($total,$viewage,'/amn/vintages/'.$two.'/',$tri));
}
updateAllSearchText();




$smarty->assign('two',$two);
$smarty->assign('vintages',$vintages);

?>