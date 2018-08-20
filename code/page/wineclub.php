<?PHP

if ($_SESSION["userCakeUser"]) {
  kickBack('','account/joinclub', '');
  exit;
}

$_SESSION["redirectPage"] = 'account/joinclub';
$smarty->assign('no_ship_states_string',BDW_NO_SHIP_STATES);


?>