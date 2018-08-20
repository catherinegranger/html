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
	$entered = mktime(0,0,0,$month,$day,$year);
	$stuff = array('title' => unQuote($title),
			'body' => trim($body),
			'posted' => $entered,
			'u_id' => $u_u_id,
			'img_caption' => unQuote($caption),
			'web_name' => $web_name);
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
		
			kickBack($_POST,'amn/add_blog','too_small');
			exit;
			
		}
		
		if ($img->user_file_size > $img->max_filesize) {
		
			kickBack($_POST,'amn/add_blog','too_big');
			exit;
			
		}
		
		$stuff['img_art'] = '1';
		
	}
	
/* Insert article to DB and get ID */
	if ($mydb->insert("article",$stuff)) {
	
		$data_id = $mydb->getID();
		
		if ($tags) {
		
			$tagging = explode(',',strtolower($tags));
			
			foreach($tagging as $key => $value) {
			
				$things = array('words' => preg_replace('/ /','_',trim($value)),
								'data_id' => $data_id);
			
				$mydb->insert("tag",$things);
				
			}
			
		}
		
		if ($stuff['img_art']) {
			
			$img->start_copy();
		
			$img->resize(600,0);
			
			$img->set_directory("img/blog/box");
			
			$img->set_thumbnail_name($data_id);
			$img->create_thumbnail();
			$img->set_thumbnail_size(600, 0);
			
			$img->set_directory("img/blog/box/thumb");
			
			$img->set_thumbnail_name($data_id);
			$img->create_thumbnail();
			$img->set_thumbnail_size(100, 0);
			
			cleanUpImg();
		
		}
		
	/* Wipe out the session data because everything has in theory inserted at this point */
		$_SESSION["title"] = "";
		$_SESSION["web_name"] = "";
		$_SESSION["body"] = "";
		$_SESSION["tags"] = "";
		$_SESSION["month"] = "";
		$_SESSION["day"] = "";
		$_SESSION["year"] = "";
		
		kickBack('','amn/add_blog','success');
		exit;
		
	} else {
	
		echo $_SESSION["error"];
		exit;
		
	}
	
} else {

	kickBack($_POST,'amn/add_blog','no_title');
	exit;
	
}

?>