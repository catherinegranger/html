<?PHP

if (($_SESSION["userCakeUser"]) || ($_SESSION["recipient"]) || ($_SESSION["order"])) {
  kickBack('','billship', '');
  exit;
}

$smarty->assign('no_ship_states_string',BDW_NO_SHIP_STATES);

$_SESSION["redirectPage"] = "billship";
$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];
$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");

?>