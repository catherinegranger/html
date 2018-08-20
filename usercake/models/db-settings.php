<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

//Database Information

$db_table_prefix = "uc_";

GLOBAL $errors;
GLOBAL $successes;
GLOBAl $mydb;

$errors = array();
$successes = array();

/* Get a mysqli object with database connection parameters */

$mysqli = $mydb->getConnection();
GLOBAL $mysqli;

if(mysqli_connect_errno()) {
	echo "Connection Failed: " . mysqli_connect_errno();
	exit();
}

?>