<?php

if (!empty($_POST)) {
  $errors = array();
  $email = sanitize(trim($_POST["email"]));
  if ($email == "") {
    $errors[] = lang("ACCOUNT_SPECIFY_EMAIL");
  }
  if (count($errors) == 0) {
    $userId = getIdFromEmail($email);
    if ($userId <= 0) {
      $errors[] = lang("FORGOTPASS_EMAIL_INVALID");
    }
    else {
      $userDetails = fetchUserDetails(NULL, NULL, $userId); 
      $rand_password = getUniqueCode(15); //Get unique code
      //$rand_password = "titititi";
      $secure_password = generateHash($rand_password); //Generate random hash
      if (!updatePasswordFromId($secure_password,$userId)) {
	$errors[] = lang("SQL_ERROR");
      }
      else {
	$mail = new userCakeMail();
	$hooks = array ("searchStrs" => array("#PASSWORD#","#DISPLAYNAME#"),
			"subjectStrs" => array($rand_password, $userDetails["display_name"]));
	if (!$mail->newTemplateMsg("your-lost-password.txt", $hooks)) {
	  $errors[] = lang("MAIL_TEMPLATE_BUILD_ERROR");
	}
	else {	
	  if (!$mail->sendMail($email,"Temporary Password from BlueDanubeWine.com")) {
	    $errors[] = lang("MAIL_ERROR");
	  }
	  else  {
	    unset($_SESSION['email']);
	    $successes[]  = lang("FORGOTPASS_REQUEST_SUCCESS");
	    $_SESSION["userCakeSuccesses"] = $successes;
	    kickBack("", "login", "");
	    exit;
	  }
	}
      }
    }
  }
}
$_SESSION["userCakeErrors"] = $errors;
kickBack("", "forgot_password", "");
exit;
?>