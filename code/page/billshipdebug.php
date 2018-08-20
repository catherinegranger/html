<?PHP


if (!$_SESSION["cart"]) {
  kickBack('','cart','');
  exit;
}

$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];

$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");


$greeting_card_cost = greetingCardCost($_SESSION["cart"]);
if ($greeting_card_cost == 0) {
  $smarty->assign('greeting_card_cost',"free");
}
else {
  $smarty->assign('greeting_card_cost',"$".$greeting_card_cost);
}

if ($_SESSION["order"]) {
  $smarty->assign('order',$_SESSION["order"]);
}
if ($_SESSION["recipient"]) {
  $smarty->assign('recipient',$_SESSION["recipient"]);
}
else if ($_SESSION["userCakeUser"]) {
  $userId = $_SESSION["userCakeUser"]["user_id"];
  $defaultRecipient = getUserRecipient($userId);
  if (!$_SESSION["recipient"]) {
    $default_billing = $defaultRecipient["default_billing"];
    if ($default_billing) {
      $defaultRecipient["rec_id"] = 0; 
      $smarty->assign('recipient',$defaultRecipient);
    }
  }
  if (!$_SESSION["order"]) {
    $default_shipping = $defaultRecipient["default_shipping"];
    $default_shipping_method = $defaultRecipient["default_shipping_method"];
    if ($default_shipping) {
      $order = getDefaultOrder($defaultRecipient, $default_shipping_method);
      $smarty->assign('order',$order);
    }
  }
}



$states = array(''=>"Choose State",'AL'=>"Alabama",'AK'=>"Alaska",'AZ'=>"Arizona",'AR'=>"Arkansas",'CA'=>"California",'CO'=>"Colorado",'CT'=>"Connecticut"
               ,'DE'=>"Delaware",'DC'=>"District Of Columbia",'FL'=>"Florida",'GA'=>"Georgia",'HI'=>"Hawaii",'ID'=>"Idaho",'IL'=>"Illinois"
               ,'IN'=>"Indiana",'IA'=>"Iowa",'KS'=>"Kansas",'KY'=>"Kentucky",'LA'=>"Louisiana",'ME'=>"Maine",'MD'=>"Maryland"
               ,'MA'=>"Massachusetts",'MI'=>"Michigan",'MN'=>"Minnesota",'MS'=>"Mississippi",'MO'=>"Missouri",'MT'=>"Montana"
               ,'NE'=>"Nebraska",'NV'=>"Nevada",'NH'=>"New Hampshire",'NJ'=>"New Jersey",'NM'=>"New Mexico",'NY'=>"New York"
               ,'NC'=>"North Carolina",'ND'=>"North Dakota",'OH'=>"Ohio",'OK'=>"Oklahoma",'OR'=>"Oregon",'PA'=>"Pennsylvania"
               ,'RI'=>"Rhode Island",'SC'=>"South Carolina",'SD'=>"South Dakota",'TN'=>"Tennessee",'TX'=>"Texas",'UT'=>"Utah"
               ,'VT'=>"Vermont",'VA'=>"Virginia",'WA'=>"Washington",'WV'=>"West Virginia",'WI'=>"Wisconsin",'WY'=>"Wyoming", 'NA'=>"Non US");

$shipping_methods = array('UPS Ground'=>"UPS Ground",'Pick Up Los Altos Hills' => "Pick Up Los Altos Hills", 'Contact Me'=>"Please Contact Me");

$smarty->assign('states',$states);
$smarty->assign('shipping_methods',$shipping_methods);
$smarty->assign('no_ship_states_string',BDW_NO_SHIP_STATES);
$smarty->assign('ship_states_string',BDW_SHIP_STATES);

?>