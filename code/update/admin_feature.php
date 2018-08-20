<?PHP

$title = trim($title);

if ($title) {

	$stuff = array('title' => unQuote($title),
			'details' => trim($details));
	
	$mydb->update("feature",$stuff,"WHERE f_id = '".$f_id."'");
	
	kickBack('','admin/features/'.$page,'success');
	exit;
	
} else {

	kickBack('','admin/features/'.$page,'no_title');
	exit;
	
}

?>
