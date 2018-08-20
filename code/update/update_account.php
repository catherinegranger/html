<?PHP

if (!empty($_POST)) {
  $errors = array();
  $successes = array();
  $userId = $_SESSION["userCakeUser"]["user_id"];
  $userDetails = fetchUserDetails(NULL, NULL, $userId);
  $loggedInUser = new loggedInUser();
  $loggedInUser->user_id = $userDetails["id"];
  $loggedInUser->username = $userDetails["user_name"];
  $loggedInUser->displayname = $userDetails["display_name"];
  $loggedInUser->hash_pw = $userDetails["password"];
  $loggedInUser->email = $userDetails["email"];
  $loggedInUser->title = $userDetails["title"];
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  $new_password = trim($_POST["new_password"]);
  $conf_new_password = trim($_POST["conf_new_password"]);
  $phone = trim($_POST["phone"]);
  $first_name = trim($_POST["first_name"]);
  $last_name = trim($_POST["last_name"]);
  $address1 = trim($_POST["address1"]);
  $address2 = trim($_POST["address2"]);
  $city = trim($_POST["city"]);
  $state = trim($_POST["state"]);
  $zipcode = trim($_POST["zipcode"]);
  $form_default_billing = trim($_POST["default_billing"]);
  $form_default_shipping = trim($_POST["default_shipping"]);
  $default_shipping_method = trim($_POST["default_shipping_method"]);

  $userDetails = NULL;
  if ($_SESSION["userCakeUser"]) {
    $userId = $_SESSION["userCakeUser"]["user_id"];
    $user_recipient = getUserRecipient($userId);
  }
  $user_default_billing = $user_recipient['default_billing'];
  $user_default_shipping = $user_recipient['default_shipping'];

  $default_billing = $user_default_billing;
  $default_shipping = $user_default_shipping;

  if (($user_default_billing == 1) && ($form_default_billing == "off")) $default_billing = 1;
  if (($user_default_billing == 1) && ($form_default_billing == "")) $default_billing = 0;
  if (($user_default_billing == 0) && ($form_default_billing == "on")) $default_billing = 1;
  if (($user_default_billing == 0) && ($form_default_billing == "")) $default_billing = 0;

  if (($user_default_shipping == 1) && ($form_default_shipping == "off")) $default_shipping = 1;
  if (($user_default_shipping == 1) && ($form_default_shipping == "")) $default_shipping = 0;
  if (($user_default_shipping == 0) && ($form_default_shipping == "on")) $default_shipping = 1;
  if (($user_default_shipping == 0) && ($form_default_shipping == "")) $default_shipping = 0;


  unset($_SESSION['email']);
  unset($_SESSION['password']);
  unset($_SESSION['new_password']);
  unset($_SESSION['conf_new_password']);
  $account_info = array('user_id' => $userId,
			'first_name' => $first_name,
			'last_name' => $last_name,
			'email' => $email,
			'phone' => $phone,
			'address1' => $address1,
			'address2' => $address2,
			'city' => $city,
			'state' => $state,
			'zipcode' => $zipcode,
			'default_billing' => $default_billing,
			'default_shipping' => $default_shipping,
			'default_shipping_method' => $default_shipping_method,
			);
  $_SESSION["account_info"] = $account_info;  // save in caseof errors
  //Confirm that the password matches before updating the user's account
  $entered_pass = generateHash($password,$loggedInUser->hash_pw);
  if ($password == "") {
    $errors[] = lang("ACCOUNT_SPECIFY_PASSWORD");
  }
  else if ($entered_pass != $loggedInUser->hash_pw) {
    $errors[] = lang("ACCOUNT_PASSWORD_INVALID");
  }	

  if ($email != $loggedInUser->email) { // check if email changed 
    $update_email = TRUE;
  }
  else {
    $update_email = FALSE;
  }
  if (($new_password != "") || ($conf_new_password != "")) { // check if password changed
    $update_password = TRUE;
  }
  else {
    $update_password = FALSE;
  }

  if ($update_email) { // validate new email
    if ($email == "") {
      $errors[] = lang("ACCOUNT_SPECIFY_EMAIL");
    }
    else if (!isValidEmail($email)) {
      $errors[] = lang("ACCOUNT_INVALID_EMAIL");
    }
    else if (emailExists($email)) {
      $error_msg = "New Email: ".$email." Old Email: ".$loggedInUser->email;
      $errors[] = lang("ACCOUNT_EMAIL_IN_USE", array($email));
      //$errors[] = lang("ACCOUNT_EMAIL_IN_USE", array($error_msg));
    }
  }
   
  if ($update_password) { // validate new password
    if ($new_password == "") {
      $errors[] = lang("ACCOUNT_SPECIFY_NEW_PASSWORD");
    }
    else if ($conf_new_password == "") {
      $errors[] = lang("ACCOUNT_SPECIFY_CONFIRM_PASSWORD");
    }
    else if (minMaxRange(8,50,$new_password)) {	
      $errors[] = lang("ACCOUNT_NEW_PASSWORD_LENGTH",array(8,50));
    }
    else if ($new_password != $conf_new_password) {
      $errors[] = lang("ACCOUNT_PASS_MISMATCH");
    }
  }

  if ($first_name == "") {  $errors[] = lang("ACCOUNT_SPECIFY_FIELD", array("First Name")); }
  if ($last_name == "") {  $errors[] = lang("ACCOUNT_SPECIFY_FIELD", array("Last Name")); }
  if ($phone == "") {  $errors[] = lang("ACCOUNT_SPECIFY_FIELD", array("Phone")); }

  if (count($errors) == 0) { 
    if ($update_email) { 
      $loggedInUser->updateEmail($email);
      $successes[] = lang("ACCOUNT_EMAIL_UPDATED");
    }
    if ($update_password) { 
      $entered_pass_new = generateHash($new_password, $loggedInUser->hash_pw);
      if ($entered_pass_new != $loggedInUser->hash_pw) { // will not update with the same password
	$loggedInUser->updatePassword($new_password); // will create the new hash and update the hash_pw property.
	$successes[] = lang("ACCOUNT_PASSWORD_UPDATED");
      }
    }
    if ($userDetails['display_name'] != $first_name) {
      updateDisplayName($userId, $first_name);
      $_SESSION['userCakeUser']['display_name'] = $first_name;
    }
    $today = time() - $time_adjust;
    $recipient = getUserRecipient($userId);
    if (!$recipient) {
      $recipient = array("rec_id" => 0,
			 "user_id" => $userId,
			 "user_default" => 1,
			 "first_name" => $first_name,
			 "last_name" => $last_name,
			 "joined" => $today,
			 "updated" => $today,
			 "email" => $email,
			 "phone" => $phone,
			 "address1" => $address1,
			 "address2" => $address2,
			 "city" => $city,
			 "state" => $state,
			 "zipcode" => $zipcode,
			 "default_billing" => $default_billing,
			 "default_shipping" => $default_shipping,
			 "default_shipping_method" => $default_shipping_method,
			 );
      $mydb->insert("recipient",$recipient);
      $recipient_id = $mydb->getID();
    }
    else {
      $values = array("first_name" => $first_name,
		      "last_name" => $last_name,
		      "updated" => $today,
		      "email" => $email,
		      "phone" => $phone,
		      "address1" => $address1,
		      "address2" => $address2,
		      "city" => $city,
		      "state" => $state,
		      "zipcode" => $zipcode,
		      "default_billing" => $default_billing,
		      "default_shipping" => $default_shipping,
		      "default_shipping_method" => $default_shipping_method,
		      );
      $mydb->update("recipient", $values, " WHERE rec_id = '".$recipient["rec_id"]."'"); 
    }
    $successes[] = lang("ACCOUNT_UPDATED");
  }
}
$_SESSION["userCakeSuccesses"] = $successes;
$_SESSION["userCakeErrors"] = $errors;
kickBack('','account', '');
exit;

?>