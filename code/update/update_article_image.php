<?php
	
$img = new image;
$img->set_max_size(750000);
$img->set_directory("img/temp");
$img->set_tmp_name($_FILES['upload_file']['tmp_name']);
$img->set_file_size($_FILES['upload_file']['size']);
$img->set_file_type($_FILES['upload_file']['type']);
$img->set_file_name($_FILES['upload_file']['name']);

if ($img->user_file_size < '1') {

	kickBack('','amn/blogs/'.$page,'too_small');
	exit;
	
}

if ($img->user_file_size > $img->max_filesize) {

	kickBack('','amn/blogs/'.$page,'too_big');
	exit;
	
}

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

if ($_FILES['upload_file']['error'] != '4') {
	$stuff['img_art'] = '1';
}

$mydb->update("article",$stuff,"WHERE data_id = '".$data_id."'");

cleanUpImg();

kickBack('','amn/blogs/'.$page,'img_success');
exit;
	
?>