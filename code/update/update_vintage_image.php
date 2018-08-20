<?php

$img_file_name = $root_dir."/img/bottles/".$vint_id.'.jpg';
$thumb_img_file_name = $root_dir."/img/bottles/thumb/".$vint_id.'.jpg';

$img = new image;
$img->set_max_size(500000);
$img->set_directory("img/temp");
$img->set_tmp_name($_FILES['upload_file']['tmp_name']);
$img->set_file_size($_FILES['upload_file']['size']);
$img->set_file_type($_FILES['upload_file']['type']);
$img->set_file_name($_FILES['upload_file']['name']);

$image_size = $_FILES['upload_file']['size'];
if ($img->user_file_size < '1') {
  kickBack('','amn/edit_vintage/'.$vint_id,'too_small: '.$image_size);
  exit;
}
if ($img->user_file_size > $img->max_filesize) {
  kickBack('','amn/edit_vintage/'.$vint_id,'too_big');
  exit;
}

if (FALSE) { // now permissions on images are finally fixed
  if (file_exists($img_file_name)) {
    unlink($img_file_name);
  }
  if (file_exists($thumb_img_file_name)) {
    unlink($thumb_img_file_name);
  }
  $value["image"] = '0';
  $mydb->update("vintage",$value,"WHERE vint_id = '".$vint_id."'");
}
else {

  $img->start_copy();
  $img->resize(0,0);

  $img->set_directory("img/bottles");
  $img->set_thumbnail_name($vint_id);
  $img->create_thumbnail();
  $img->set_thumbnail_size(0,0);
  
  $img->set_directory("img/bottles/thumb");
  $img->set_thumbnail_name($vint_id);
  $img->create_thumbnail();
  $img->set_thumbnail_size(0, 375);
  
  if ($_FILES['upload_file']['error'] != '4') {
    $value["image"] = '1';
    $mydb->update("vintage",$value,"WHERE vint_id = '".$vint_id."'");
  }
  if (file_exists($img_file_name)) {
    chmod($img_file_name, 0777);
  }
  if (file_exists($thumb_img_file_name)) {
    chmod($thumb_img_file_name, 0777);
  }
}
cleanUpImg();
kickBack('','amn/edit_vintage/'.$vint_id,'success');
exit;
	
?>