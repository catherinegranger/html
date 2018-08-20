<?PHP
$errors = array();
$$successes = array();
if (!empty($_POST)) {
  $giftcard_id = trim($_POST["giftcard_id"]);
  $message = trim($_POST["thank_message"]);
  if ($giftcard_id == "") { 
    $errors[] = lang("GIFTCARD_NO_ID");  
  }
  else {
    $giftcard = getGiftCardById($giftcard_id);
    if (!$giftcard) {
      $errors[] = lang("GIFTCARD_NO_ID");  
    }
    else {
      if ($message == "") { 
	$errors[] = lang("GIFTCARD_SPECIFY_MESSAGE");
	$_SESSION["userCakeErrors"] = $errors;
      }
      else {
	$header = 'From: Webshop@bluedanubewine.com';
	$subject = $giftcard["recipient_name"]." thanks you for your BlueDanubeWine E-Gift Card";
	$to = $giftcard["purchaser_email"];
	mail($to, $subject, $message, $header);
	$successes[] = lang("GIFTCARD_THANKYOU_SUCCESS", array($giftcard["purchaser_name"]));
	$_SESSION["userCakeSuccesses"] = $successes;

      }
      kickBack('','giftcard/'.$giftcard["created_date"],'');
      exit;
    }
  }
}
if (count($errors) > 0) {
  $_SESSION["userCakeErrors"] = $errors;
}
kickBack('','giftcard','');
exit;

?>



