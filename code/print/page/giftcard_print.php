<?PHP

$errors = $_SESSION["userCakeErrors"];
$warnings = $_SESSION["userCakeWarnings"];
$successes = $_SESSION["userCakeSuccesses"];
if (isset($two)) {
  $created_date = $two;
  $smarty->assign('recipient_view',TRUE);
  $giftcard = getGiftCardByCreatedDate($created_date);
  //$giftcard_type = $giftcard["type"];
  //$smarty->assign('giftcard_type', $giftcard_type);
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

$smarty->assign('uc_errors',$errors);
$smarty->assign('uc_warnings',$warnings);
$smarty->assign('uc_successes',$successes);
destroySession("userCakeErrors");
destroySession("userCakeWarnings");
destroySession("userCakeSuccesses");
?>