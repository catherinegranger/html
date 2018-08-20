<?php


if ($wy_id) {
  kickBack('','amn/vintages/active/'.$wy_id.'/'.$page,'');
  exit;
} 
else {
  kickBack('','amn/vintages/active/all/'.$page,'');
  exit;
}

?>