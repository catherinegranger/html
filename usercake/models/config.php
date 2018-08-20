<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

//Pages to require
require_once("languages/en.php");
require_once("class.mail.php");
require_once("class.user.php");
require_once("class.newuser.php");
require_once("class.signupuser.php");
require_once("funcs.php");

require_once("db-settings.php"); //Require DB connection

//Retrieve settings
$stmt = $mysqli->prepare("SELECT id, name, value
	FROM ".$db_table_prefix."configuration");	
#var_dump($stmt);
$stmt->execute();
#var_dump($stmt);
#$stmt->bind_result($s_id, $s_name, $s_value);

while ($stmt->fetch()){
	$settings[$s_name] = array('id' => $s_id, 'name' => $s_name, 'value' => $s_value);
}
$stmt->close();

//Set Settings

$file_dir = dirname(__FILE__);
$emailActivation = "false";
$mail_templates_dir = $file_dir."/mail-templates/";
$websiteName = "Blue Danube Wine Co.";
$websiteUrl = "https://www.bluedanubewine.com/";
$emailAddress = "webshop@bluedanubewine.com";
$resend_activation_threshold = 0;
$emailDate = date('dmy');
$language = "usercake/models/languages/en.php";
$template = "usercake/models/site-templates/default.css";

$master_account = -1;

$default_hooks = array("#WEBSITENAME#","#WEBSITEURL#","#DATE#");
$default_replace = array($websiteName,$websiteUrl,$emailDate);

if (!file_exists($language)) {
  $language = $file_dir."/languages/en.php";
}

//Global User Object Var
//loggedInUser can be used globally if constructed
$loggedInUser = $_SESSION["userCakeUser"];


?>
