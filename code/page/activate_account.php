<?PHP


$errors = array();
$successes = array();
$token = $two;
if (!isset($two)) {
  $errors[] = lang("FORGOTPASS_INVALID_TOKEN");
}	
else {
  if ($two == "login") {
    kickBack("", "login", "");
    exit;
  }
  else {
    if (isUserActive($token)) { //Check if the account is already activated
      $successes[] = lang("ACCOUNT_ACTIVE");
    }
    else if (!validateActivationToken($token)) { //Check for a valid token. Must exist and active must be = 0
      $errors[] = lang("ACCOUNT_TOKEN_NOT_FOUND");
    }
    else { //Activate the user's account
      if (!setUserActive($token)) {
	$errors[] = lang("SQL_ERROR");
      }
    }
  }
}
if ((count($errors) == 0) && (count($successes) == 0)) {
  $successes[] = lang("ACCOUNT_ACTIVATION_COMPLETE");
}
$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);

?>