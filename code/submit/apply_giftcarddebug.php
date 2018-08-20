<?PHP

if (!empty($_POST)) {
  $successes = array();
  $errors = array();
  $code = trim($_POST["giftcard_code"]);
  if ($code == "") { 
    $errors[] = lang("GIFTCARD_NO_CODE");  
  }
  else {
    $giftcard = getGiftCardByCode($code);
    if (!$giftcard) {
      $errors[] = lang("GIFTCARD_WRONG_CODE");  
    }
    else if ($giftcard["balance"] <= 0) {
      $errors[] = lang("GIFTCARD_EMPTY");  
    }
    else {
      $_SESSION['order']['giftcard_id'] = $giftcard['id'];
      $_SESSION['order']['giftcard_code'] = $giftcard['code'];
      $_SESSION['order']['giftcard_balance'] = $giftcard['balance'];
      $_SESSION['order']['giftcard_total'] = fixCurrency(getGiftCardTotal($_SESSION['order']['grand_total'], $giftcard['balance']));
      $_SESSION['order']['giftcard_payment'] = fixCurrency($_SESSION['order']['grand_total'] - $_SESSION['order']['giftcard_total']);
      if ($_SESSION["order"]["o_id"] > 0)  {	// update order
	$values = array('giftcard_id' => $_SESSION['order']['giftcard_id'],
			'giftcard_total' => $_SESSION['order']['giftcard_total']);
	$mydb->update("store_order", $values, " WHERE o_id = '".$_SESSION["order"]["o_id"]."'"); 
      }
      $successes[] = lang("GIFTCARD_REDEEM_SUCCESS");
    }
  }
  $_SESSION["userCakeSuccesses"] = $successes;
  $_SESSION["userCakeErrors"] = $errors;
  kickBack('','reviewdebug','');
  exit;
}
else {
  header("Location: /");
  exit;
}

?>



