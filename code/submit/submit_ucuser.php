<?PHP

//Will have to prevent the non admin user from visiting the registration page if he/she is already logged in


//Forms posted
if (!empty($_POST)) {
  $errors = array();
  $email = trim($_POST["email"]);
  $username = trim($_POST["user_name"]);
  $displayname = trim($_POST["display_name"]);
  $password = trim($_POST["password1"]);
  $confirm_pass = trim($_POST["password2"]);
  $role = trim($_POST["role"]);
  $captcha = md5($_POST["captcha"]);
  //if ($captcha != $_SESSION['captcha'])	{ errors[] = lang("CAPTCHA_FAIL");  }
  if (minMaxRange(2,25,$username)) {
    $errors[] = lang("ACCOUNT_USER_CHAR_LIMIT",array(5,25));
  }
  if (!ctype_alnum($username)) {
    $errors[] = lang("ACCOUNT_USER_INVALID_CHARACTERS");
  }
  if (minMaxRange(2,25,$displayname)) {
    $errors[] = lang("ACCOUNT_DISPLAY_CHAR_LIMIT",array(5,25));
  }
  if (!ctype_alnum($displayname)){
    $errors[] = lang("ACCOUNT_DISPLAY_INVALID_CHARACTERS");
  }
  if (minMaxRange(8,50,$password) && minMaxRange(8,50,$confirm_pass)) {
    $errors[] = lang("ACCOUNT_PASS_CHAR_LIMIT",array(8,50));
  }
  else if ($password != $confirm_pass) {
    $errors[] = lang("ACCOUNT_PASS_MISMATCH");
  }
  if (!isValidEmail($email)) {
    $errors[] = lang("ACCOUNT_INVALID_EMAIL");
  }
  //End data validation
  if (count($errors) == 0) {	
    //Construct a user object
    $new_user = new NewUser($username,$displayname,$password,$email);
    //Checking this flag tells us whether there were any errors such as possible data duplication occured
    if (!$new_user->status) {
      if ($new_user->username_taken) $errors[] = lang("ACCOUNT_USERNAME_IN_USE",array($username));
      if ($new_user->displayname_taken) $errors[] = lang("ACCOUNT_DISPLAYNAME_IN_USE",array($displayname));
      if ($new_user->email_taken) $errors[] = lang("ACCOUNT_EMAIL_IN_USE",array($email));		
    }
    else {
      //Attempt to add the user to the database, carry out finishing  tasks like emailing the user (if required)
      if (!$new_user->userCakeAddNewUser($role)) {
	if ($new_user->mail_failure) $errors[] = lang("MAIL_ERROR");
	if ($new_user->sql_failure)  $errors[] = lang("SQL_ERROR");
      }
    }
  }
  if (count($errors) == 0) {
    $successes[] = lang("ACCOUNT_REGISTRATION_COMPLETE_ADMIN");
    $_SESSION["user_name"] = "";
    $_SESSION["display_name"] = "";
    $_SESSION["password1"] = "";
    $_SESSION["password2"] = "";
    $_SESSION["email"] = "";
    $_SESSION["userCakeSuccesses"] = $successes;
    kickBack('','amn/add_ucuser','');
    exit;
  }
  else {
    $_SESSION["userCakeErrors"] = $errors;
    kickBack('','amn/add_ucuser','');
    exit;
  }
}


?>