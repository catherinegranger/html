<?PHP

if (!empty($_POST)) {
  $errors = array();
  $successes = array();
  $gonext = trim($_POST["gonext"]);
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  $conf_password = trim($_POST["conf_password"]);
  $first_name = trim($_POST["first_name"]);
  $last_name = trim($_POST["last_name"]);
  $address1 = trim($_POST["address1"]);
  $address2 = trim($_POST["address2"]);
  $city = trim($_POST["city"]);
  $state = trim($_POST["state"]);
  $zipcode = trim($_POST["zipcode"]);
  $phone = trim($_POST["phone"]);
  $default_billing = trim($_POST["default_billing"]);
  $default_shipping = trim($_POST["default_shipping"]);
  unset($_SESSION['email']);
  unset($_SESSION['password']);
  unset($_SESSION['conf_password']);
  if ($email == "") { $errors[] = lang("ACCOUNT_SPECIFY_EMAIL"); }
  else if (!isValidEmail($email)) { $errors[] = lang("ACCOUNT_INVALID_EMAIL"); }
  else if (emailExists($email)) { $errors[] = lang("ACCOUNT_EMAIL_IN_USE", array($email)); }
  if ((minMaxRange(8,50,$password)) && (minMaxRange(8,50,$conf_password)))
    { $errors[] = lang("ACCOUNT_PASS_CHAR_LIMIT",array(8,50)); }
  else if ($password != $conf_password) { $errors[] = lang("ACCOUNT_PASS_MISMATCH"); }
  if ($first_name == "") {  $errors[] = lang("ACCOUNT_SPECIFY_FIELD", array("First Name")); }
  if ($last_name == "") {  $errors[] = lang("ACCOUNT_SPECIFY_FIELD", array("Last Name")); }
  //if ($state == "") {  $errors[] = lang("ACCOUNT_SPECIFY_FIELD", array("State")); }
  if ($phone == "") {  $errors[] = lang("ACCOUNT_SPECIFY_FIELD", array("Phone")); }
  if (count($errors) == 0) {	
    //Construct a user object
    $user = new SignUpUser($first_name,$password,$email);
    //Attempt to add the user to the database and send and activation email
    $user->addUser();
    //$errors[] = $error;
    if ($user->mail_failure) $errors[] = lang("MAIL_ERROR");
    if ($user->sql_failure)  $errors[] = lang("SQL_ERROR");
    $activation_message = $user->activation_msg;
    if ((count($errors) == 0) && ($user->user_id > 0)) {
      $recipient = array("rec_id" => 0,
			 "user_id" => $user->user_id,
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
			 );
      $mydb->insert("recipient",$recipient);
      $recipient_id = $mydb->getID();
    }
  }
  if (count($errors) == 0) {
    $successes[] = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE2");
    $_SESSION["userCakeSuccesses"] = $successes;
    kickBack('','signup', '');
    exit;
  }
  else {
    $_SESSION["userCakeErrors"] = $errors;
    $_SESSION["account"]["email"] = $email;
    $_SESSION["account"]["first_name"] = $first_name;
    $_SESSION["account"]["first_name"] = $first_name;
    $_SESSION["account"]["last_name"] = $last_name;
    $_SESSION["account"]["address1"] = $address1;
    $_SESSION["account"]["address2"] = $address2;
    $_SESSION["account"]["city"] = $city;
    $_SESSION["account"]["state"] = $state;
    $_SESSION["account"]["zipcode"] = $zipcode;
    $_SESSION["account"]["email"] = $email;
    $_SESSION["account"]["phone"] = $phone;
    $_SESSION["account"]["default_billing"] = $default_billing;
    $_SESSION["account"]["default_shipping"] = $default_shipping;
    kickBack('','signup', '');
    exit;
  }
}

?>