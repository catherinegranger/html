<?php

if (!empty($_POST)) {
  $errors = array();
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  if ($email == "") { $errors[] = lang("ACCOUNT_SPECIFY_EMAIL"); }
  else if (!isValidEmail($email)) { $errors[] = lang("ACCOUNT_INVALID_EMAIL"); }
  if ($password == "") {
    $errors[] = lang("ACCOUNT_SPECIFY_PASSWORD");
  }
  if (count($errors) == 0) {
    //A security note here, never tell the user which credential was incorrect
    if (!emailExists($email)) {
      $errors[] = lang("ACCOUNT_EMAIL_OR_PASS_INVALID");
    }
    else {
      $userDetails = fetchUserDetailsFromEmail($email);
      if ($userDetails["active"] == 0) {       //See if the user's account is activated
	$errors[] = lang("ACCOUNT_INACTIVE");
      }
      else {
	//Hash the password and use the salt from the database to compare the password.
	$entered_pass = generateHash($password,$userDetails["password"]);
	if($entered_pass != $userDetails["password"]) {
	  //Again, we know the password is at fault here, but lets not give away the combination incase of someone bruteforcing
	  $errors[] = lang("ACCOUNT_EMAIL_OR_PASS_INVALID");
	}
	else {
	  $loggedInUser = new loggedInUser(); //Construct a new logged in user object
	  $loggedInUser->user_id = $userDetails["id"];
	  $loggedInUser->hash_pw = $userDetails["password"];
	  $loggedInUser->email = $userDetails["email"];
	  $loggedInUser->title = $userDetails["title"];
	  $loggedInUser->displayname = $userDetails["display_name"];
	  $loggedInUser->username = $userDetails["user_name"];
	  $loggedInUser->updateLastSignIn(); //Update last sign in
	  $isAdmin = $loggedInUser->checkPermission(array(BDW_USER_ADMIN));
	  $role = BDW_USER_NEW_MEMBER;
	  if ($isAdmin) {
	    $role = BDW_USER_ADMIN;
	  }
	  else if ($loggedInUser->checkPermission(array(BDW_USER_TRADE_CA))) {
	    $role = BDW_USER_TRADE_CA;
	  }
	  else if ($loggedInUser->checkPermission(array(BDW_USER_TRADE_NY))) {
	    $role = BDW_USER_TRADE_NY;
	  }
	  else if ($loggedInUser->checkPermission(array(BDW_USER_DISTRIBUTOR))) {
	    $role = BDW_USER_DISTRIBUTOR;
	  }
	  $club_id = 0;
	  $_SESSION['userCakeUser'] = array('user_id' => $userDetails["id"],
					    'display_name' => $userDetails["display_name"],
					    'user_name' => $userDetails["user_name"],
					    'role' => $role,
					    'club_id' => $club_id,
					    'isAdmin' => $isAdmin);
	  unset($_SESSION['email']);
	  unset($_SESSION['password']);
	  if (isset($_SESSION["redirectPage"])) {
	    $redirect_page = $_SESSION["redirectPage"];
	    unset($_SESSION["redirectPage"]);
	  }
	  else {
	    $redirect_page = "";
	  }
	  kickBack('',$redirect_page,'');
	  exit;
	}
      }
    }
  }
}
$_SESSION["userCakeSuccesses"] = $successes;
$_SESSION["userCakeErrors"] = $errors;
kickBack("", "login", "");
exit;
?>