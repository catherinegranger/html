<?PHP

if ($title) {

	$stuff = array('title' => unQuote($title),
			'web_name' => $web_name,
			'resource_url' => $resource_url,
			'keyword' => $keyword,
			'rc_id' => $rc_id,
			'details' => $details);
	
	$mydb->update("resource",$stuff,"WHERE r_id = '".$r_id."'");
	
	kickBack('','amn/resources/'.$page,'success');
	exit;
	
} else {

	kickBack('','amn/resources/'.$page,'no_title');
	exit;
	
}

?>
