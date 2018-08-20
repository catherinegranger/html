<?php
	
$img = new image;
$img->set_max_size(500000);
$img->set_directory("img/temp");
$img->set_tmp_name($_FILES['upload_file']['tmp_name']);
$img->set_file_size($_FILES['upload_file']['size']);
$img->set_file_type($_FILES['upload_file']['type']);
$img->set_file_name($_FILES['upload_file']['name']);

if ($img->user_file_size < '1') {

	kickBack('','amn/news/'.$page,'too_small');
	exit;
	
}

if ($img->user_file_size > $img->max_filesize) {

	kickBack('','amn/news/'.$page,'too_big');
	exit;
	
}

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

kickBack('','amn/news/'.$page,'img_success');
exit;
	
?>