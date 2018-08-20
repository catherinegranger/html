<?PHP

date_default_timezone_set('America/New_York'); // to set delivery time to a US timezone
$errors = $_SESSION["userCakeErrors"];
$warnings = $_SESSION["userCakeWarnings"];
$successes = $_SESSION["userCakeSuccesses"];
if (isset($two)) {
  $created_date = $two;
  $smarty->assign('recipient_view',TRUE);
  $giftcard = getGiftCardByCreatedDate($created_date);
  $giftcard_type = $giftcard["type"];
  $smarty->assign('giftcard_type', $giftcard_type);
  $$authenticated = $_SESSION['giftcard']['authenticated'];
  $smarty->assign('$authenticated', $$authenticated);
  if (!$giftcard) {
      $errors[] = lang("GIFTCARD_NOT_FOUND");
  }
  else {
    if (isset($_SESSION['giftcard'])) {
      $giftcard["authenticated"] = $_SESSION['giftcard']['authenticated'];
      destroySession("giftcard");
    }
    $_SESSION['giftcard'] = $giftcard;
    $smarty->assign('giftcard',$giftcard);
  }
}
else {
  $smarty->assign('recipient_view',FALSE);
  $giftcard_type = trim($_POST["giftcard_type"]);
  if ($giftcard_type == "")
    $giftcard_type = 3;
  $smarty->assign('giftcard_type',$giftcard_type);
}

$smarty->assign('uc_errors',$errors);
$smarty->assign('uc_warnings',$warnings);
$smarty->assign('uc_successes',$successes);
destroySession("userCakeErrors");
destroySession("userCakeWarnings");
destroySession("userCakeSuccesses");
?>