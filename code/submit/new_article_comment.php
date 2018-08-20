<?php

$now = mktime();

$time_diff = $now - $_SESSION["viewstamp"];

$allow_time = 15;

if ($time_diff < $allow_time) {

	$approved = 0;
	
} else {

	$approved = 1;
	
}

if ($_SESSION["entry"] && $data_id > '0' && $_SESSION["viewstamp"] > '0') {
	
	if ($name && blurb) {
	
		if ($approved == '1') {

			$sql = "SELECT cm_id FROM commentor WHERE name = '".trim($name)."' AND email = '".trim($email)."' AND deleted = '0'";
			$result = $mydb->runSql($sql);
			$row = $mydb->getAssoc($result);
			
			if (!$row["cm_id"]) {
			
				$stuff = array('name' => $name,
								'email' => $email,
								'approved' => '1');
								
				$mydb->insert("commentor",$stuff);
				
				$cm_id = $mydb->getID();
				
			} else {
			
				$cm_id = $row["cm_id"];
				$approved = 1;
				
			}
			
			$site_crap = array('/http:\/\//','/https:\/\//','/ftp:\/\//');
			
			$comm = array('cm_id' => $cm_id,
							'blurb' => trim($blurb),
							'data_id' => $data_id,
							'approved' => $approved,
							'website' => preg_replace($site_crap,'',$website),
							'ip' => $_SERVER['REMOTE_ADDR'],
							'posted' => $date = mktime());
				
			$mydb->insert("comment",$comm);
			
			if ($notify == 'on' && $email != 'no_email_given'  && validEmail($email)) {
		
				$notify = array('email' => trim($email),
							'data_id' => $data_id);
							
				$mydb->insert("comment_notify",$notify);
				
			}
			
			commentNotify($data_id,$email);
		
		} else {
		
			$subject = "Suspicious Comment";
			$message = "This one didn't even make it to the database, but here it is:\n\n\n";
			
		}
					
		if ($email != 'michael@bluedanubewine.com' && $email != 'elia@bluedanubewine.com' && $email != 'frank@bluedanubewine.com' && $email != 'zsuzsu@bluedanubewine.com') {
			
			$to = "michael@bluedanubewine.com,elia@bluedanubewine.com";
			$email ? ($email) : $email = 'no_email_given';
			$reply = "From: \"".$name."\" <".$email.">";
			$subject = "New Commentor";
			$message = "New comment to the site:\n\n\n'".$blurb."'\n\nwww.bluedanubewine.com/blog/view/".$web_name;
			$message .= "\n\nTimestamp: ".$now;
			$message .= "\nViewstamp: ".$_SESSION["viewstamp"];
			$message .= "\nDifference: ".$time_diff;
			$message .= "\nIP: ".$_SERVER['REMOTE_ADDR'];
			mail($to, $subject, $message, $reply);
			
		}

		exit;
	}
	
} else {

	kickBack($_POST,$orig."/".$web_name,'BuggerOff','#comment_forms');
	exit;

}

?>
