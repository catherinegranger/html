<?php

if (!empty($_POST)) {
  $errors = array();
  $username = sanitize(trim($_POST["username"]));
  $password = trim($_POST["password"]);
  if ($username == "") {
    $errors[] = lang("ACCOUNT_SPECIFY_USERNAME");
  }
  if ($password == "") {
    $errors[] = lang("ACCOUNT_SPECIFY_PASSWORD");
  }
  if (count($errors) == 0) {
    //A security note here, never tell the user which credential was incorrect
    if (!usernameExists($username)) {
      $errors[] = lang("ACCOUNT_USER_OR_PASS_INVALID");
    }
    else {
      $userDetails = fetchUserDetails($username);
      if ($userDetails["active"] == 0) {       //See if the user's account is activated
	$errors[] = lang("ACCOUNT_INACTIVE");
      }
      else {
	//Hash the password and use the salt from the database to compare the password.
	$entered_pass = generateHash($password,$userDetails["password"]);
	if($entered_pass != $userDetails["password"]) {
	  //Again, we know the password is at fault here, but lets not give away the combination incase of someone bruteforcing
	  $errors[] = lang("ACCOUNT_USER_OR_PASS_INVALID");
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
	  $club_id = 0;
	  $_SESSION['userCakeUser'] = array('user_id' => $userDetails["id"],
					    'display_name' => $userDetails["display_name"],
					    'user_name' => $userDetails["user_name"],
					    'club_id' => $club_id,
					    'isAdmin' => $isAdmin);
	  unset($_SESSION['username']);
	  unset($_SESSION['password']);
	  if (isset($_SESSION["redirectPage"])) {
	    $redirect_page = $_SESSION["redirectPage"];
	    unset($_SESSION["redirectPage"]);
	  }
	  else {
	    $redirect_page = "amn";
	  }
	  kickBack($_POST,$redirect_page,'');
	  exit;
	}
      }
    }
  }
}
$_SESSION["userCakeSuccesses"] = $successes;
$_SESSION["userCakeErrors"] = $errors;
kickBack("", "admin_login", "");
exit;
?>