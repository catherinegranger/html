<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = '0';

if ($for == 'delete') {
	
	if ($mydb->delete('comment',"c_id = '".$tri."'")) {
	
		if ($six == 'delete' && $fiv > '0') {
	
			$mydb->delete('commentor',"cm_id = '".$fiv."'");
		
		}
	
		kickBack('','amn/comments/'.$two,'deleted');
		exit;
		
	}

}

if ($for == 'approve') {

	$params = array('approved' => '1');
	
	if ($mydb->update("comment",$params,"WHERE c_id = '".$tri."'")) {
	
		kickBack('','amn/comments/'.$two,'approved');
		exit;
		
	}

}

$sql = "SELECT SQL_CACHE *, c.deleted AS c_deleted, c.posted AS posted, c.approved AS c_approved FROM comment AS c, commentor AS cm, article AS a WHERE a.data_id = c.data_id AND c.cm_id = cm.cm_id";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);

$sql .= " ORDER BY c.deleted, c.posted DESC LIMIT ".$two.",15";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$date = getdate($row["posted"]);
	
	$output[$counter++] = array('c_id' => $row["c_id"],
								'cm_id' => $row["cm_id"],
								'blurb' => $row["blurb"],
								'web_name' => $row["web_name"],
								'type' => $row["type"],
								'name' => $row["name"],
								'deleted' => $row["c_deleted"],
								'approved' => $row["c_approved"],
								'data_id' => $row["data_id"],
								'title' => $row["title"],
								'minutes' => $date["minutes"],
								'hours' => $date["hours"],
								'day' => make_day($date["mday"]),
								'month' => make_month($date["mon"]),
								'year' => make_year($date["year"],$years));
	
}

$smarty->assign('pages',paginator($total,'15','/amn/comments/',$two,'15','15'));
$smarty->assign('comments',$output);
$smarty->assign('page',$two);
$smarty->assign('total_comments',$total);

?>