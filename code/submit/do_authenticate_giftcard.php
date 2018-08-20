<?PHP

if (!empty($_POST)) {
  $successes = array();
  $errors = array();
  $recipient_email = trim($_POST["remail"]);
  if (isset($_SESSION['giftcard'])) {
    $created_date = $_SESSION['giftcard']['created_date'];
  }
  else {
    $created_date = "";
  }
  if ($recipient_email == "") { 
    $errors[] = lang("GIFTCARD_SPECIFY_YOUR_EMAIL"); 
  }
  else if (!isValidEmail($recipient_email)) { 
    $errors[] = lang("GIFTCARD_INVALID_YOUR_EMAIL"); 
  }
  else if ((!isset($_SESSION['giftcard'])) || (!is_array($_SESSION['giftcard'])) || ($_SESSION['giftcard']['recipient_email'] != $recipient_email)) {
    $errors[] = lang("GIFTCARD_INVALID_YOUR_EMAIL"); 
  }
  if (count($errors) > 0) {
    $_SESSION["userCakeErrors"] = $errors;
  }
  else {
    if ((isset($_SESSION['giftcard'])) && (is_array($_SESSION['giftcard']))) {
      if (!$_SESSION['giftcard']['activated']) {
	activateGiftcard($_SESSION['giftcard']);
      }
      $_SESSION['giftcard']['authenticated'] = '1';
    }
  }
  kickBack('','giftcard/'.$created_date,'');
  exit;
} 
else {
  header("Location: /");
  exit;
}

?>



