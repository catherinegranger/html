<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = '0';

if (($tri == 'delete') && ($for > '0')) {

	$params = array('deleted' => '1');

	if ($mydb->update("feature",$params,"WHERE f_id = '".$for."'")) {
	
		kickBack($_POST,'amn/features/'.$two,'deleted');
		exit;
		
	}

} else if (($tri == 'undelete') && ($for > '0')) {

	$params = array('deleted' => '0');

	if ($mydb->update("feature",$params,"WHERE f_id = '".$for."'")) {
	
		kickBack($_POST,'amn/features/'.$two,'undeleted');
		exit;
	
	}
	
}


$sql = "SELECT * FROM feature";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);

$sql .= " ORDER BY posted DESC LIMIT ".$two.",12";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {
	
	$features[$counter++] = array('f_id' => $row["f_id"],
					'title' => $row["title"],
					'details' => $row["details"],
					'deleted' => $row["deleted"]);
					
}
					
$smarty->assign('pages',paginator($total,'15','/amn/features/',$two));
$smarty->assign('features',$features);
$smarty->assign('page',$two);

?>