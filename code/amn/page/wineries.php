<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$tri ? ($tri) : $tri = 0;
$two ? ($two) : $two = 'all';
$viewage = 20;


if ($for == 'delete' && $fiv > 0) {
  $stuff["deleted"] = '1';
  $mydb->update('winery',$stuff,'WHERE wy_id = '.$fiv);
  kickBack('','amn/wineries/'.$two.'/'.$tri,'deleted');
  exit;
}
if ($for == 'undelete' && $fiv > 0) {
  $stuff["deleted"] = '0';
  $mydb->update('winery',$stuff,'WHERE wy_id = '.$fiv);
  kickBack('','amn/wineries/'.$two.'/'.$tri,'undeleted');
  exit;
}

if ($two == 'active') {
  $wherebit = " WHERE winery.c_id = country_code.c_id AND winery.inactive = '0' AND winery.deleted = '0' ";
  $_SESSION["winery_sort"] = "active";
} 
elseif ($two == 'undeleted') {
  $wherebit = " WHERE winery.c_id = country_code.c_id AND winery.deleted = '0' ";
  $_SESSION["winery_sort"] = "undeleted";
}
else {
  $wherebit = " WHERE winery.c_id = country_code.c_id ";
  $_SESSION["winery_sort"] = "all";
}


$sql = "SELECT winery.wy_id, winery.name, winery.deleted AS wydel, country_code.full_name FROM winery, country_code ".$wherebit." ORDER BY winery.sort_name";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);
$sql .= " LIMIT ".$tri.",".$viewage;
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $wineries[$counter++] = array('name' => $row["name"],
				'full_name' => $row["full_name"],
				'wy_id' => $row["wy_id"],
				'deleted' => $row["wydel"]);
}

if ($total > $viewage) {
  $smarty->assign('paginator', "<b>Pages:</b> ".paginator($total,$viewage,'/amn/wineries/'.$two.'/',$tri));
}

$smarty->assign('wineries',$wineries);
$smarty->assign('two',$two);


?>