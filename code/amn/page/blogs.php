<?PHP
if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = '0';

if (($tri == 'delete') && ($for > '0')) {

	$params = array('deleted' => '1');

	if ($mydb->update("article",$params,"WHERE data_id = '".$for."'")) {
	
		kickBack($_POST,'amn/blogs/'.$two,'deleted');
		exit;
		
	}

} else if (($tri == 'undelete') && ($for > '0')) {

	$params = array('deleted' => '0');

	if ($mydb->update("article",$params,"WHERE data_id = '".$for."'")) {
	
		kickBack($_POST,'amn/blogs/'.$two,'undeleted');
		exit;
	
	}
	
} else if (($tri == 'delete_img') && ($for > '0')) {

	$params = array('img_art' => '0');

	if ($mydb->update("article",$params,"WHERE data_id = '".$for."'")) {
	
		kickBack($_POST,'amn/blogs/'.$two,'img_deleted');
		exit;
	
	}
	
}

$sql = "SELECT * FROM user WHERE deleted = '0' ORDER BY username";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$users[$counter++] = array('u_id' => $row["u_id"],
								'username' => $row["username"]);
								
}

$smarty->assign('users',$users);



$sql = "SELECT * FROM article";
$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);

$sql .= " ORDER BY posted DESC LIMIT ".$two.",12";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$date = getdate($row["posted"]);
	
	$articles[$counter++] = array('data_id' => $row["data_id"],
					'day' => make_day($date["mday"]),
					'month' => make_month($date["mon"]),
					'year' => make_year($date["year"],$years),
					'body' => $row["body"],
					'u_id' => $row["u_id"],
					'title' => $row["title"],
					'web_name' => $row["web_name"],
					'img_art' => $row["img_art"],
					'img_caption' => $row["img_caption"],
					'tags' => getTags($row["data_id"]),
					'deleted' => $row["deleted"]);
					
}
					
$smarty->assign('pages',paginator($total,'12','/amn/blogs/',$two));
$smarty->assign('articles',$articles);
$smarty->assign('page',$two);


function getTags($data_id) {

	global $mydb;

	$sql = "SELECT * FROM tag WHERE data_id = '".$data_id."'";
	$result = $mydb->runSql($sql);

	$counter = 0;
	
	while($row = $mydb->getAssoc($result)) {
	
		$tags[$counter++] = array('data_id' => $row["data_id"],
								'words' => $row["words"],
								'tag_id' => $row["tag_id"]);
								
	}
	
	return $tags;
	
}

?>