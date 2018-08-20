<?PHP
if ($uname && $pass) {
  $values = array("username" => $uname,
		  "password" => $pass,
		  "first_name" => $first_name,
		  "last_name" => $last_name,
		  "bio" => $bio,
		  "level" => $lev,
		  "deleted" => '0');
  if ($mydb->insert("user",$values)) {
    $_SESSION["uname"] = "";
    $_SESSION["pass"] = "";
    $_SESSION["first_name"] = "";
    $_SESSION["last_name"] = "";
    $_SESSION["bio"] = "";
    $_SESSION["lev"] = "";
    kickBack('','amn/add_user','success');
    exit;
  } 
  else {
    foreach($_POST as $k => $v) {
      $_SESSION[$k] = trim($v);
    }
    kickBack('','amn/add_user','error');
    exit;
  }
} 
else {
  foreach($_POST as $k => $v){
    $_SESSION[$k] = trim($v);
  }
  kickBack('','amn/add_user','error');
  exit;
}

?>