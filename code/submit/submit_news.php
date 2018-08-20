<?PHP

if ($title) {

/* Pull in all the data for the insertion array */
	$happens = mktime(0,0,0,$month,$day,$year);
	$stuff = array('title' => unQuote($title),
			'city' => $city,
			'location' => $location,
			'website' => $website,
			'details' => $details,
			'happens' => $happens);

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
		
			kickBack($_POST,'amn/add_news','too_small');
			exit;
			
		}
		
		if ($img->user_file_size > $img->max_filesize) {
		
			kickBack($_POST,'amn/add_news','too_big');
			exit;
			
		}
		
		$img_art = '1';
		
	}

/* Insert article to DB and get ID */
	$mydb->insert("news",$stuff);
	
	$n_id = $mydb->getID();
	
	
/* Do copying on the image and cleanup the scratch file */	
	if ($img_art) {
		
		$img->start_copy();
	
		$img->resize(0,0);
		
		$img->set_directory("img/news");
		
		$img->set_thumbnail_name($n_id);
		$img->create_thumbnail();
		$img->set_thumbnail_size(600,0);
		
		$img->set_directory("img/news/thumb");
		
		$img->set_thumbnail_name($n_id);
		$img->create_thumbnail();
		$img->set_thumbnail_size(50, 0);
		
		cleanUpImg();
	
	}
	
/* Wipe out the session data because everything has in theory inserted at this point */
	$_SESSION["title"] = "";
	$_SESSION["details"] = "";
	$_SESSION["city"] = "";
	$_SESSION["location"] = "";
	$_SESSION["website"] = "";
	
	kickBack('','amn/add_news','success');
	exit;
	
} else {

	kickBack($_POST,'amn/add_news','no_title');
	exit;
	
}

?>