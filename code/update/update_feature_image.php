<?php
	
$img = new image;
$img->set_max_size(500000);
$img->set_directory("img/temp");
$img->set_tmp_name($_FILES['upload_file']['tmp_name']);
$img->set_file_size($_FILES['upload_file']['size']);
$img->set_file_type($_FILES['upload_file']['type']);
$img->set_file_name($_FILES['upload_file']['name']);

if ($img->user_file_size < '1') {

	kickBack('','amn/features/'.$page,'too_small');
	exit;
	
}

if ($img->user_file_size > $img->max_filesize) {

	kickBack('','amn/features/'.$page,'too_big');
	exit;
	
}

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

kickBack('','amn/features/'.$page,'img_success');
exit;
	
?>