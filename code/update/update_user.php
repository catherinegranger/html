<?PHP
		
if ($password && $username) {

	$params = " WHERE u_id = '".$u_id."'";

	$items = array('username' => $username,
					'password' => $password,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'bio' => $bio,
					'level' => $lev);
	
	if ($mydb->update("user",$items,$params)) {
		
		kickBack('','amn/users/'.$page,'success');
		exit;
		
	} else {
	
		kickBack('','amn/users/'.$page,'error');
		exit;
		
	}

} else {

	kickBack('','amn/users/'.$page,'error');
	exit;
		
}


?>