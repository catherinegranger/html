<?php

if ($_SESSION["entry"]) {

	if ($username && $password) {
	
		$sql = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' AND deleted != '1'";
		$result = $mydb->runSql($sql);
		
		$count = $mydb->getCount($result);
		
		if ($count == '1') {
		
			$row = $mydb->getAssoc($result);
			
			foreach($row as $k => $v){
		
				$_SESSION['user']['u_'.${k}] = $v;
			}
			
			$_SESSION['user']['u_logged'] = "true";
			
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			
			kickBack($_POST,'amn','');
			
		} else {
		
			kickBack($_POST,'amn','unknown');
			
		}
		
	} else {
	
		kickBack($_POST,'amn','blanks');
		
	}
	
} else {

	kickBack('','','');
	
}


?>