<?PHP

if ($_SESSION["userCakeUser"]) {
  kickBack('','account', '');
  exit;
}

$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];
$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");

if ($_SESSION["account"]) {
  $smarty->assign('account',$_SESSION["account"]);
  unset($_SESSION['account']);
}
else {
  $account = array('default_billing' => '1', 'default_shipping' => '1');
  $smarty->assign('account',$account);
}

$states = array(''=>"Choose State",'AL'=>"Alabama",'AK'=>"Alaska",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut"
               ,'DE'=>"Delaware",'DC'=>"District Of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'HI'=>"Hawaii",'ID'=>"Idaho",'IL'=>"Illinois"
               ,'IN'=>"Indiana",'IA'=>"Iowa",'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland"
               ,'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana"
               ,'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York"
               ,'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma",'OR'=>"Oregon",'PA'=>"Pennsylvania"
               ,'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah"
               ,'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming", 'NA'=>"Non US");
$smarty->assign('states',$states);
$smarty->assign('no_ship_states_string',BDW_NO_SHIP_STATES);

?>