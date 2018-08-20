<?php


if ($_SESSION["cart"]) {
session_unset();
session_destroy();
} 
else {
  kickBack('','cart','');
  exit;
}

?>