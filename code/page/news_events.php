<?PHP

$sql = "SELECT SQL_CACHE * FROM news WHERE deleted = '0' ORDER BY happens DESC LIMIT 0,16";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$news[$counter++] = array('title' => str_replace('&','&amp;',$row["title"]),
								'website' => $row["website"],
								'details' => str_replace('&','&amp;',$row["details"]),
								'location' => str_replace('&','&amp;',$row["location"]),
								'n_id' => $row["n_id"],
								'happens' => date("F d, Y",$row["happens"]));
								
}

$smarty->assign('news',$news);

?>