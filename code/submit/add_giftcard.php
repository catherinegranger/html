<?PHP

date_default_timezone_set('America/New_York'); // to set delivery time to a US timezone

if (!empty($_POST)) {
  $successes = array();
  $errors = array();
  $giftcard_type = trim($_POST["giftcard_type"]);
  $value = trim($_POST["value"]);
  $recipient_email = trim($_POST["remail"]);
  $recipient_name = trim($_POST["rname"]);
  $purchaser_email = trim($_POST["pemail"]);
  $purchaser_name = trim($_POST["pname"]);
  $message = trim($_POST["message"]);
  $date_month = trim($_POST["Date_Month"]);
  $date_day = trim($_POST["Date_Day"]);
  $date_year = trim($_POST["Date_Year"]);

  $created_date = $today;
  $delivery_date = mktime(0,0,0,$date_month,$date_day,$date_year);
  if ((!$delivery_date) || ($delivery_date < $created_date))
    $delivery_date = $created_date;

  if ($value <= 0) { $errors[] = lang("GIFTCARD_NEGATIVE_VALUE");  }
  if ($recipient_email == "") { $errors[] = lang("GIFTCARD_SPECIFY_EMAIL", array("Recipient")); }
  else if (!isValidEmail($recipient_email)) { $errors[] = lang("GIFTCARD_INVALID_EMAIL", array("Recipient")); }
  if ($recipient_name == "") { $errors[] = lang("GIFTCARD_SPECIFY_NAME", array("Recipient")); }
  if ($purchaser_email == "") { $errors[] = lang("GIFTCARD_SPECIFY_EMAIL", array("Purchaser")); }
  else if (!isValidEmail($purchaser_email)) { $errors[] = lang("GIFTCARD_INVALID_EMAIL", array("Purchaser")); }
  if ($purchaser_name == "") { $errors[] = lang("GIFTCARD_SPECIFY_NAME", array("Purchaser")); }
  if ($message == "") { $errors[] = lang("GIFTCARD_SPECIFY_MESSAGE"); }
  if (count($errors) > 0) {
    $_SESSION["userCakeErrors"] = $errors;
    kickBack('','giftcard','');
    exit;
  }


  $_SESSION["cart_total"] = fixCurrency($_SESSION["cart_total"] + $value);
  $_SESSION["grand_total"] = fixCurrency($_SESSION["grand_total"] + $value);
  $_SESSION["cart_qty"] = $_SESSION["cart_qty"] + 1;
  $cartsize = count($_SESSION['cart']);
  $_SESSION['cart'][$cartsize] = array('type' => BDW_LINE_ITEM_GIFTCARD,
				       'quantity' => '1',
				       'bottles' => '0',
				       'created_date' => $created_date,
				       'delivery_date' => $delivery_date,
				       'giftcard_type' => $giftcard_type,
				       'purchaser_email' => $purchaser_email,
				       'purchaser_name' => $purchaser_name,
				       'recipient_email' => $recipient_email,
				       'recipient_name' => $recipient_name,
				       'message' => $message,
				       'price' => $value,
				       'deleted' => '0');


  $successes[] = lang("GIFTCARD_SUCCESS");
  $_SESSION["userCakeSuccesses"] = $successes;
  kickBack('','cart','');
  exit;
} 
else {
  header("Location: /");
  exit;
}

?>



