<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = 0;

$viewage = 20;

if ($tri == 'delete' && $for > 0) {

	$stuff["deleted"] = '1';
	
	$mydb->update('user',$stuff,'WHERE u_id = '.$for);
	
	kickBack('','amn/users/'.$two,'deleted');
	exit;
	
}

if ($tri == 'undelete' && $for > 0) {

	$stuff["deleted"] = '0';
	
	$mydb->update('user',$stuff,'WHERE u_id = '.$for);
	
	kickBack('','amn/users/'.$two,'undeleted');
	exit;
	
}

$sql = "SELECT *";
$sql .= " FROM user";
$sql .= " ORDER BY username";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);
$sql .= " LIMIT ".$two.",".$viewage;
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$group[$counter++] = array('user' => $row["username"],
								'pass' => $row["password"],
								'first_name' => $row["first_name"],
								'last_name' => $row["last_name"],
								'bio' => $row["bio"],
								'lev' => $row["level"],
								'u_id' => $row["u_id"],
								'deleted' => $row["deleted"]);
								
}

if ($total > $viewage) {

	$smarty->assign('paginator', "<b>Pages:</b> ".paginator($total,$viewage,'/amn/users/',$two));
	
}

$smarty->assign('group',$group);


?>