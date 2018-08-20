<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}


$two ? ($two) : $two = '0';

if (($tri == 'delete') && ($for > '0')) {

	$params = array('deleted' => '1');

	if ($mydb->update("news",$params,"WHERE n_id = '".$for."'")) {
	
		kickBack($_POST,'amn/news/'.$two,'deleted');
		exit;
		
	}

} else if (($tri == 'undelete') && ($for > '0')) {

	$params = array('deleted' => '0');

	if ($mydb->update("news",$params,"WHERE n_id = '".$for."'")) {
	
		kickBack($_POST,'amn/news/'.$two,'undeleted');
		exit;
	
	}
	
}


$sql = "SELECT * FROM news";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);

$sql .= " ORDER BY happens DESC LIMIT ".$two.",15";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$happens = getdate($row["happens"]);
	
	$news[$counter++] = array('n_id' => $row["n_id"],
					'day' => make_day($happens["mday"]),
					'month' => make_month($happens["mon"]),
					'year' => make_year($happens["year"]),
					'title' => $row["title"],
					'website' => $row["website"],
					'city' => $row["city"],
					'location' => $row["location"],
					'details' => $row["details"],
					'deleted' => $row["deleted"]);
					
}
					
$smarty->assign('pages',paginator($total,'15','/amn/news/',$two));
$smarty->assign('news',$news);
$smarty->assign('page',$two);

?>