<?PHP

$title = trim($title);

if ($title) {

	$stuff = array('title' => unQuote($title),
			'details' => trim($details));
	
	$mydb->update("feature",$stuff,"WHERE f_id = '".$f_id."'");
	
	kickBack('','amn/features/'.$page,'success');
	exit;
	
} else {

	kickBack('','amn/features/'.$page,'no_title');
	exit;
	
}

?>
