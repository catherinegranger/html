<?PHP

$debug_flag = FALSE;
$file_dir = dirname(__FILE__)."/";
require_once $file_dir.'../../base/arbfunctions.php'; 


if (!empty($_POST)) {
  $errors = array();
  $successes = array();
  $userId = $_SESSION["userCakeUser"]["user_id"];
  $userDetails = fetchUserDetails(NULL, NULL, $userId);
  $user_recipient = getUserRecipient($userId);
  $email = $userDetails["email"];
  $subscription_id = $userDetails["subscription_id"];
  $initial_subscription_id = $subscription_id;
  $initial_subscription_status = $userDetails["subscription_status"];
  $initial_subscription_status_date = $userDetails["subscription_status_date"];
  $subscription_expiration_date = $userDetails["subscription_expiration_date"];  // not implemented yet
  $subscription_referral_type = 0; // not implemented yet
  $subscription_referral = $userDetails["subscription_referral"]; 
  if (isset($_POST["subscription_referral"])) $subscription_referral = trim($_POST["subscription_referral"]);
  $password = trim($_POST["password"]);
  $action_type = trim($_POST["action_type"]);
  unset($_SESSION['email']);
  unset($_SESSION['password']);
  $payload = ""; // debug
  $to = "webshop@bluedanubewine.com";
  $toc = "catherine@bluedanubewine.com";
  $header = 'From: Webshop@bluedanubewine.com';
  $customer = $user_recipient["first_name"]." ".$user_recipient["last_name"]." (".$email.")";

  //Confirm that the password matches before managing the subscription
  $entered_pass = generateHash($password,$userDetails["password"]);
  if ($password == "") {
    $errors[] = lang("ACCOUNT_SPECIFY_PASSWORD");
  }
  else if ($entered_pass != $userDetails["password"]) {
    $errors[] = lang("ACCOUNT_PASSWORD_INVALID");
  }	
  if (count($errors) == 0) { 
    if (isset($_POST["submit_cancel_subscription"])) {
      if ($subscription_id == 0) {
	$errors[] = lang("SUBSCRIPTION_CANCEL_NOSUBSCRIPTION");
      }
      else {
	$cancel_request = new ARBRequest;
	$payload = $cancel_request->getPostString()." Log Info: ".$cancel_request->getLogInfo();
	$cancel_response = $cancel_request->cancelSubscription($subscription_id);
	$subscription_message = $cancel_response->getMessageText();
	if (!$cancel_response->isOk()) {
	  $errors[] = lang("SUBSCRIPTION_CANCEL_ERROR",array($subscription_message));
	  $subject = "Error - Vino Danubia member cancel: ";
	  $subject .= $customer;
	  $message = "Failure to cancel membership: ";
	  $message .= $subscription_message;
	  mail($toc, $subject, $message, $header);
	}
      }
      if (count($errors) == 0) { 
	$subscription_id = 0;
	$successes[] = lang("SUBSCRIPTION_CANCEL_SUCCESS");
	$subject = "Vino Danubia member cancelled: ";
	$subject .= $customer;
	$message = "Membership cancellation by ";
	$message .= $customer;
	if ($debug_flag == FALSE) {
	  mail($toc, $subject, $message, $header);
	}
	else {
	  mail($toc, $subject, $message, $header);
	}
      }
    }
    else if (isset($_POST["submit_update_subscription"])) {
      if ($subscription_id == 0) {
	$errors[] = lang("SUBSCRIPTION_UPDATE_NOSUBSCRIPTION");
      }
      else {
	$card_number = trim($_POST["card_number"]);
	$expiration_date = trim($_POST["expiration_date"]);
	$secure = trim($_POST["secure"]);
	unset($_SESSION['card_number']);
	unset($_SESSION['expiration_date']);
	unset($_SESSION['secure']);
	if (($card_number == "") || ($expiration_date == "") || ($secure == "")) {
	  $errors[] = lang("SUBSCRIPTION_MISSINGCARDINFO");
	}
	else {
	  $subscription = new ARBSubscription;
	  $subscription->creditCardCardNumber = $card_number;
	  $subscription->creditCardExpirationDate = $expiration_date;
	  $subscription->creditCardCardCode = $secure;
	  $subscription->billToFirstName = $user_recipient["first_name"];
	  $subscription->billToLastName = $user_recipient["last_name"];
	  $subscription->customerEmail = $email;
	  $update_request = new ARBRequest;
	  $payload = $update_request->getPostString()." Log Info: ".$update_request->getLogInfo();
	  $update_response = $update_request->updateSubscription($subscription_id, $subscription);
	  $subscription_message = $update_response->getMessageText();
	  if (!$update_response->isOk()) {
	    $errors[] = lang("SUBSCRIPTION_UPDATE_ERROR",array($subscription_message));
	    $subject = "Error - Vino Danubia member update: ";
	    $subject .= $customer;
	    $message = "Failure to update membership: ";
	    $message .= $subscription_message;
	    mail($toc, $subject, $message, $header);
	  }
	}
      }
      if (count($errors) == 0) { 
	$successes[] = lang("SUBSCRIPTION_UPDATE_SUCCESS");
	$subject = "Vino Danubia member update: ";
	$subject .= $customer;
	$message = "A  membership has been updated by ";
	$message .= $customer;
	mail($toc, $subject, $message, $header);
      }
    }
    else if (isset($_POST["submit_create_subscription"])) {
      if ($subscription_id != 0) {
	$errors[] = lang("SUBSCRIPTION_CREATE_HASSUBSCRIPTION");
      }
      else {
	$card_number = trim($_POST["card_number"]);
	$expiration_date = trim($_POST["expiration_date"]);
	$secure = trim($_POST["secure"]);
	unset($_SESSION['card_number']);
	unset($_SESSION['expiration_date']);
	unset($_SESSION['secure']);
	unset($_SESSION['subscription_referral']);
	if (($card_number == "") || ($expiration_date == "") || ($secure == "")) {
	  $errors[] = lang("SUBSCRIPTION_MISSINGCARDINFO");
	}
	else {
	  $in2hours = time();
	  $subscription = new ARBSubscription;
	  $subscription->name = "Blue Danube Wine Club Subscription";
	  $subscription->intervalLength = "12";
	  $subscription->intervalUnit = "months";
	  $subscription->startDate = date('Y-m-d', $in2hours);
	  $subscription->totalOccurrences = "9999";
	  $subscription->amount = 49;
	  $subscription->creditCardCardNumber = $card_number;
	  $subscription->creditCardExpirationDate = $expiration_date;
	  $subscription->creditCardCardCode = $secure;
	  $subscription->billToFirstName = $user_recipient["first_name"];
	  $subscription->billToLastName = $user_recipient["last_name"];
	  $subscription->customerEmail = $email;
	  $create_request = new ARBRequest;
	  $payload = $create_request->getPostString()." Log Info: ".$create_request->getLogInfo();
	  $create_response = $create_request->createSubscription($subscription);
	  $subscription_message = $create_response->getMessageText();
	  if (!$create_response->isOk()) {
	    $errors[] = lang("SUBSCRIPTION_CREATE_ERROR",array($subscription_message));
	    $subject = "Error - Vino Danubia member create: ";
	    $subject .= $customer;
	    $message = "Failure to create membership: ";
	    $message .= $subscription_message;
	    mail($toc, $subject, $message, $header);
	  }
	  else {
	    $subscription_id = $create_response->getSubscriptionId();
	  }
	}
      }
      if (count($errors) == 0) { 
	$successes[] = lang("SUBSCRIPTION_CREATE_SUCCESS");
	$subject = "New Vino Danubia member: ";
	$subject .= $customer;
	$message = "A new membership has been purchased by ";
	$message .= $customer;
	if ($debug_flag == FALSE) {
	  mail($to, $subject, $message, $header);
	}
	else {
	  mail($toc, $subject, $message, $header);
	}
      }
    }
    if ($subscription_id == 0)
      $status_subscription_id = $initial_subscription_id;
    else 
      $status_subscription_id = $subscription_id;
    $status_request = new ARBRequest;
    $status_response = $status_request->getSubscriptionStatus($status_subscription_id);
    $subscription_status = $status_response->getSubscriptionStatus();
    if ($initial_subscription_status == $subscription_status) {
      $subscription_status_date = $initial_subscription_status_date;
    }
    else {
      $subscription_status_date = time() - $time_adjust;
    }
    if ($initial_subscription_id == 0) {
      createSubscription($userId, $subscription_id, $subscription_status, $subscription_status_date,  $subscription_expiration_date, $subscription_message, $subscription_referral_type, $subscription_referral);
    }
    else {
      updateSubscription($userId, $subscription_id, $subscription_status, $subscription_status_date, $subscription_expiration_date, $subscription_message);
    }
  }
}
$_SESSION["userCakeSuccesses"] = $successes;
$_SESSION["userCakeErrors"] = $errors;
if (count($errors) == 0) { 
  kickBack('','account', "");
}
else {
  kickBack('','account/'.$action_type, "");
}
exit;

if (FALSE) { // create subscription
    $subscription = new ARBSubscription;
    $subscription->name = "Short subscription";
    $subscription->intervalLength = "12";
    $subscription->intervalUnit = "months";
    $subscription->startDate = "2017-03-12";
    $subscription->totalOccurrences = "9999";
    $subscription->amount = rand(1,100);
    $subscription->creditCardCardNumber = "6011000000000012";
    $subscription->creditCardExpirationDate = "2018-10";
    $subscription->creditCardCardCode = "123";
    $subscription->billToFirstName = $user_recipient["first_name"];
    $subscription->billToLastName = $user_recipient["last_name"];
    $refId = "ref" . time();
    if (TRUE) {
      // Create the subscription.
      $create_request = new ARBRequest;
      $create_request->setRefId($refId);
      $create_response = $create_request->createSubscription($subscription);
      $payload = $create_request->getPostString()." Log Info: ".$create_request->getLogInfo();
      $create_subscription_success = $create_response->isOk();
      $subscription_id = $create_response->getSubscriptionId();
      $subscription_refId = $create_response->getRefId();
      $subscription_message = $create_response->getMessageText();
      $subscription_status = "requested subscription";
      if ($create_response->isOk()) {
	$status_request = new ARBRequest;
	$status_response = $status_request->getSubscriptionStatus($subscription_id);
	$subscription_status = $status_response->getSubscriptionStatus();
      }
      else {
	$subscription_message = $create_response->getErrorMessage();
      }
    }
}


?>