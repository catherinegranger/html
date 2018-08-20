<?php

$terms = trim($_POST["terms"]);

if (isset($submit_specials)) {
  kickBack('','wines','specials');
  exit;
}
else if (isset($submit_samplers)) {
  kickBack('','wines','samplers');
  exit;
}
else if (isset($submit_giftcards)) {
  kickBack('','giftcard','');
  exit;
}
else if ($terms) {
  kickBack('','wines/'.$terms,'');
  exit;
} 
else {
  kickBack('','wines','');
  exit;
}

?>