<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = '0';

if ($for == 'delete' && $tri > '0') {
	
	if ($mydb->delete('commentor',"cm_id = '".$tri."'")) {
	
		kickBack('','amn/commentors/'.$two,'deleted');
		exit;
		
	}

}



$sql = "SELECT SQL_CACHE *, cm.cm_id AS cm_id FROM commentor AS cm";
$sql .= " LEFT JOIN comment AS c ON c.cm_id = cm.cm_id GROUP BY cm.cm_id";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);

$sql .= " ORDER BY cm.deleted,cm.name LIMIT ".$two.",25";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {
	
	$output[$counter++] = array('cm_id' => $row["cm_id"],
								'name' => $row["name"],
								'email' => $row["email"],
								'website' => $row["website"],
								'deleted' => $row["deleted"]);
	
}

$smarty->assign('pages',paginator($total,'25','/amn/commentors/',$two));

$smarty->assign('commentors',$output);

$smarty->assign('page',$two);

?>