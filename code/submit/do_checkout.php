<?php

unset($_SESSION["redirectPage"]);
if (!empty($_POST)) {
  if (isset($_POST["guest_checkout"])) {
    kickBack('','billship','');
    exit;
  }
  else if (isset($_POST["signup"])) {
    $_SESSION["redirectPage"] = 'billship';
    kickBack('','signup','');
    exit;
  }
}
kickBack('','checkout','');
exit;


?>