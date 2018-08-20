<?PHP

$title = trim($title);

$webname = prettyString($title,$bad_stuff);
$webname = unSlav($webname);
$webname = unSpan($webname);
$webname = unGerm($webname);
$webname = unHun($webname);
$web_name = str_replace(' ','_',$webname);

if ($title) {

/* Pull in all the data for the insertion array */
	$stuff = array('title' => unQuote($title),
			'rc_id' => $rc_id,
			'web_name' => $web_name,
			'resource_url' => $resource_url,
			'keyword' => $keyword,
			'details' => $details);

/* Check out the 411 on the image (if present) and bust some head if it ain't kosher */
	if ($_FILES['upload_file']['error'] != '4') {
		
		$img = new image;
		$img->set_max_size(750000);
		$img->set_directory("img/temp");
		$img->set_tmp_name($_FILES['upload_file']['tmp_name']);
		$img->set_file_size($_FILES['upload_file']['size']);
		$img->set_file_type($_FILES['upload_file']['type']);
		$img->set_file_name($_FILES['upload_file']['name']);
		
		if ($img->user_file_size < '1') {
		
			kickBack($_POST,'amn/add_resource','too_small');
			exit;
			
		}
		
		if ($img->user_file_size > $img->max_filesize) {
		
			kickBack($_POST,'amn/add_resource','too_big');
			exit;
			
		}
		
		$stuff["img_art"] = '1';
		
	}

/* Insert article to DB and get ID */
	$mydb->insert("resource",$stuff);
	
	$r_id = $mydb->getID();
	
	
/* Do copying on the image and cleanup the scratch file */	
	if ($stuff["img_art"] == '1') {
		
		$img->start_copy();
	
		$img->resize(0,0);
		
		$img->set_directory("img/resource");
		
		$img->set_thumbnail_name($r_id);
		$img->create_thumbnail();
		$img->set_thumbnail_size(0,0);
		
		$img->set_directory("img/resource/thumb");
		
		$img->set_thumbnail_name($r_id);
		$img->create_thumbnail();
		$img->set_thumbnail_size(100, 0);
		
		cleanUpImg();
	
	}
	
/* Wipe out the session data because everything has in theory inserted at this point */
	$_SESSION["title"] = "";
	$_SESSION["details"] = "";
	$_SESSION["resource_url"] = "";
	$_SESSION["keyword"] = "";
	
	kickBack('','amn/add_resource','success');
	exit;
	
} else {

	kickBack($_POST,'amn/add_resource','no_title');
	exit;
	
}

?>