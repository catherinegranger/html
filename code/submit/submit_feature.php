<?PHP

$check = explode('.',$_FILES['upload_file']['name']);
$ichk = count($check)-1;

if ($check[$ichk] != 'jpg') {
	
	kickBack($_POST,'amn/add_feature','file_format');
	
}

$title = trim($title);

if ($title) {

/* Pull in all the data for the insertion array */
	$stuff = array('title' => unQuote($title),
			'details' => trim($details),
			'posted' => mktime());

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
		
			kickBack($_POST,'amn/add_feature','too_small');
			
		}
		
		if ($img->user_file_size > $img->max_filesize) {
		
			kickBack($_POST,'amn/add_feature','too_big');
			
		}
		
		$img_art = '1';
		
	}

/* Insert article to DB and get ID */
	$mydb->insert("feature",$stuff);
	
	$f_id = $mydb->getID();
	
	
/* Do copying on the image and cleanup the scratch file */	
	if ($img_art) {
		
		$img->start_copy();
	
		$img->resize(325,0);
		
		$img->set_directory("img/feature");
		
		$img->set_thumbnail_name($f_id);
		$img->create_thumbnail();
		$img->set_thumbnail_size(0,0);
		
		$img->set_directory("img/feature/thumb");
		
		$img->set_thumbnail_name($f_id);
		$img->create_thumbnail();
		$img->set_thumbnail_size(100, 0);
		
		cleanUpImg();
	
	}
	
/* Wipe out the session data because everything has in theory inserted at this point */
	$_SESSION["title"] = "";
	$_SESSION["details"] = "";
	
	kickBack('','amn/add_feature','success');
	
} else {

	kickBack($_POST,'amn/add_feature','no_title');
	
}

?>