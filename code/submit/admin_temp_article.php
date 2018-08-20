<?PHP

$title = trim($title);
$drafted = mktime();

if ($body != '') {

	$entered = mktime(0,0,0,$month,$day,$year);
	$stuff = array('title' => unQuote($title),
			'body' => trim($body),
			'posted' => $entered,
			'img_caption' => unQuote($caption),
			'tags' => $tags,
			's_id' => $sound,
			'drafted' => $drafted);
		
	$mydb->insert("article_temp",$stuff);
	
	echo 'Saved @ '.date('H:i:s',$drafted);
	exit;

}

?>