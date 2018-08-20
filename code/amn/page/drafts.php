<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = '0';

$sql = "SELECT * FROM article_temp";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);

$sql .= " ORDER BY temp_id DESC LIMIT ".$two.",12";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$date = getdate($row["posted"]);
	
	$articles[$counter++] = array('day' => make_day($date["mday"]),
					'month' => make_month($date["mon"]),
					'year' => make_year($date["year"],$years),
					'body' => $row["body"],
					'title' => $row["title"],
					'sound' => $row["s_id"],
					'tags' => $row["tags"],
					'drafted' => date("G:i:s",$row["drafted"]),
					'img_caption' => $row["img_caption"]);
					
}
					
$smarty->assign('pages',paginator($total,'12','/amn/drafts/',$two,'12','12'));
$smarty->assign('articles',$articles);
$smarty->assign('page',$two);

?>