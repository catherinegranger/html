<?php

if (isset($submit_specials)) {
  kickBack('','wines2','specials');
  exit;
}
else if ($terms) {
  kickBack('','wines2/'.$terms,'');
  exit;
} 
else {
  kickBack('','wines2','');
  exit;
}

?>