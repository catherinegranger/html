<?php

if ($_SESSION["entry"]) {

	$email = trim(stripslashes($email));
	$name = trim(stripslashes($name));
	
	$subject = "New Mailing List Registration";
	
	$message = "There has been a new site registraion.\n\n";
	$message .= "Name: ".$name."\n";
	$message .= "Email: ".$email."\n\n";

	$to = "mhudin@gmail.com,frank@bluedanubewine.com";
	$reply = "From: \"Site User\" <".$email.">";
	
	if (mail($to, $subject, $message, $reply)) {
		
		kickBack('','','home/success','');
		
	}
	
} else {

	kickBack('','','home/BuggerOff','');

}

?>
