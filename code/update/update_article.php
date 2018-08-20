<?PHP

$title = trim($title);
$web_name = preg_replace('/ /','_',strtolower(trim($web_name)));

if ($title) {

	$entered = mktime(0,0,0,$month,$day,$year);
	$stuff = array('title' => unQuote($title),
			'web_name' => $web_name,
			'img_caption' => $img_caption,
			'u_id' => $u_id,
			'body' => trim($body),
			'posted' => $entered);
	
	$mydb->update("article",$stuff,"WHERE data_id = '".$data_id."'");
	
	kickBack('','amn/blogs/'.$page,'success');
	exit;
	
} else {

	kickBack('','amn/blogs/'.$page,'no_title');
	exit;
	
}

?>
