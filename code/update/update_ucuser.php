<?PHP

if (!empty($_POST['delete'])) {
  $deletions = $_POST['delete'];
  if ($deletion_count = deleteUsers($deletions)) {
    $successes[] = lang("ACCOUNT_DELETIONS_SUCCESSFUL", array($deletion_count));
    $_SESSION["userCakeSuccesses"] = $successes;
    kickBack('','amn/ucusers', '');
    exit;
  }
  else {
    $errors[] = lang("SQL_ERROR");
    $_SESSION["userCakeErrors"] = $errors;
    kickBack('','amn/edit_ucuser/'.$userId, '');
    exit;
  }
}
else {
  $userDetails = fetchUserDetails(NULL, NULL, $userId); 
  //Update display name
  if ($userDetails['display_name'] != $_POST['display']) {
    $displayname = trim($_POST['display']);
    if ($displayname != "") {
      //Validate display name
      if (displayNameExists($displayname)) {
	$errors[] = lang("ACCOUNT_DISPLAYNAME_IN_USE",array($displayname));
      }
      elseif (minMaxRange(5,25,$displayname)) { $errors[] = lang("ACCOUNT_DISPLAY_CHAR_LIMIT",array(5,25)); }
      elseif (!ctype_alnum($displayname)) { $errors[] = lang("ACCOUNT_DISPLAY_INVALID_CHARACTERS"); }
      else {
	if (updateDisplayName($userId, $displayname)) {
	  $successes[] = lang("ACCOUNT_DISPLAYNAME_UPDATED", array($displayname));
	}
	else {
	  $errors[] = lang("SQL_ERROR");
	}
      }
    }
  }
  else {
    $displayname = $userDetails['display_name'];
  }
  //Activate account
  if (isset($_POST['activate']) && $_POST['activate'] == "activate") {
    if (setUserActive($userDetails['activation_token'])) {
      $successes[] = lang("ACCOUNT_MANUALLY_ACTIVATED", array($displayname));
    }
    else {
      $errors[] = lang("SQL_ERROR");
    }
  }
  //Update email
  if ($userDetails['email'] != $_POST['email']) {
    $email = trim($_POST["email"]);
    //Validate email
    if (!isValidEmail($email)) {
      $errors[] = lang("ACCOUNT_INVALID_EMAIL");
    }
    elseif (emailExists($email)) {
      $errors[] = lang("ACCOUNT_EMAIL_IN_USE",array($email));
    }
    else {
      if (updateEmail($userId, $email)) {
	$successes[] = lang("ACCOUNT_EMAIL_UPDATED");
      }
      else {
	$errors[] = lang("SQL_ERROR");
      }
    }
  }
  //Update title
  if ($userDetails['title'] != $_POST['title']) {
    $title = trim($_POST['title']);
    //Validate title
    if (minMaxRange(1,50,$title)) {
      $errors[] = lang("ACCOUNT_TITLE_CHAR_LIMIT",array(1,50));
    }
    else {
      if (updateTitle($userId, $title)) {
	$successes[] = lang("ACCOUNT_TITLE_UPDATED", array ($displayname, $title));
      }
      else {
	$errors[] = lang("SQL_ERROR");
      }
    }
  }
  // Update Subscription info
  $subscription_status_date = time() - $time_adjust;
  $subscription_id = trim($_POST["subscription_id"]);
  $subscription_status = trim($_POST["subscription_status"]);
  //$subscription_expiration_date = trim($_POST["subscription_expiration_date"]);
  $subscription_expiration_date = 0; // not implemented
  $subscription_message = trim($_POST["subscription_message"]);
  $subscription_referral_type = 0; // not implemented
  $subscription_referral = trim($_POST["subscription_referral"]);
  updateSubscriptionAdminInfo($userId, $subscription_id, $subscription_status, $subscription_status_date, $subscription_expiration_date, $subscription_message, $subscription_referral_type, $subscription_referral);
  $successes[] = lang("ACCOUNT_SUBSCRIPTION_UPDATED");

  //Remove permission level
  if (!empty($_POST['removePermission'])) {
    $remove = $_POST['removePermission'];
    if ($deletion_count = removePermission($remove, $userId)) {
      $successes[] = lang("ACCOUNT_PERMISSION_REMOVED", array ($deletion_count));
    }
    else {
      $errors[] = lang("SQL_ERROR");
    }
  }
  if(!empty($_POST['addPermission'])){
    $add = $_POST['addPermission'];
    if ($addition_count = addPermission($add, $userId)) {
      $successes[] = lang("ACCOUNT_PERMISSION_ADDED", array ($addition_count));
    }
    else {
      $errors[] = lang("SQL_ERROR");
    }
  }
  $userDetails = fetchUserDetails(NULL, NULL, $userId);
}
$_SESSION["userCakeSuccesses"] = $successes;
$_SESSION["userCakeErrors"] = $errors;
kickBack('','amn/edit_ucuser/'.$userId, '');
exit;


?>