<?PHP

$userId = 0;
$userDetails = NULL;
if ($_SESSION["userCakeUser"]) {
  $userId = $_SESSION["userCakeUser"]["user_id"];
  $userDetails = fetchUserDetails(NULL, NULL, $userId);

}
if (($userId <= 0) || ($userDetails == NULL)) {
  $_SESSION["redirectPage"] = $one;
  kickBack('','login', '');
  exit;
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

$account = array('user_id' => $userDetails['id'], 
		 'user_name' => $userDetails['user_name'], 
		 'display_name' => $userDetails['display_name'], 
		 'password' => $userDetails['password'], 
		 'email' => $userDetails['email'],
		 'subscription_id' => $userDetails['subscription_id'],
		 'subscription_status' => $userDetails['subscription_status'],
		 'subscription_status_date' => $userDetails['subscription_status_date'],
		 'subscription_message' => $userDetails['subscription_message'],
		 );

$row = getUserRecipient($userId);
if ($row) {
  $account = array_merge($account,array('recipient_id' => $row['rec_id'],
					'first_name' => $row['first_name'],
					'last_name' => $row['last_name'],
					'address1' => $row['address1'],
					'address2' => $row['address2'],
					'city' => $row['city'],
					'state' => $row['state'],
					'zipcode' => $row['zipcode'],
					'recipient_email' => $row['email'],
					'phone' => $row['phone'],
					'default_billing' => $row['default_billing'],
					'default_shipping' => $row['default_shipping'],
					'default_shipping_method' => $row['default_shipping_method'],

));
}
else {
  $account = array_merge($account,array('recipient_id' => 0,
					'recipient_email' => $userDetails['email']));
}

if ($_SESSION["account_info"]) {
  $account["first_name"] = $_SESSION["account_info"]["first_name"];
  $account["last_name"] = $_SESSION["account_info"]["last_name"];
  $account["email_name"] = $_SESSION["account_info"]["email_name"];
  $account["phone"] = $_SESSION["account_info"]["phone"];
  $account["address1"] = $_SESSION["account_info"]["address1"];
  $account["address2"] = $_SESSION["account_info"]["address2"];
  $account["city"] = $_SESSION["account_info"]["city"];
  $account["state"] = $_SESSION["account_info"]["state"];
  $account["zipcode"] = $_SESSION["account_info"]["zipcode"];
  $account["default_billing"] = $_SESSION["account_info"]["default_billing"];
  $account["default_shipping"] = $_SESSION["account_info"]["default_shipping"];
  $account["default_shipping_method"] = $_SESSION["account_info"]["default_shipping_method"];
  $smarty->assign('account_info',$_SESSION["account_info"]);
  destroySession("account_info");
}
$smarty->assign('account',$account);

$sql = "SELECT o.o_id, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2, ";
$sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone,";
$sql .= " o.instructions, o.need_by_date, o.include_card, o.include_card_cost, o.include_card_msg, o.tax, o.shipping, o.adult_signature, o.shipping_method, o.payment_method, o.status, o.status_timestamp, o.discount_id, o.discount_total, o.grand_total, o.cart_total, ";
$sql .= " r.rec_id AS recipient_id, r.user_id, r.first_name, r.last_name, r.address1, r.address2, r.city, r.state, r.zipcode, r.email, r.phone, o.placed ";
$sql .= " FROM store_order AS o, recipient AS r";
$sql .= " WHERE r.user_id = '".$userId."'  AND o.rec_id = r.rec_id ORDER BY o.placed DESC";
$result = $mydb->runSql($sql);
$counter = 0;
while ($row = $mydb->getAssoc($result)) {
  $orders[$counter++] = array('o_id' => $row["o_id"],
			      'invoice_number' => getInvoiceNumber($row["o_id"]),
			      'name' => $row["first_name"]." ".$row["last_name"],
			      'ship_to' => $row["ship_first_name"]." ".$row["ship_last_name"],
			      'ship_state' => $row["ship_state"],
			      'placed' => $row["placed"],
			      'formatted_placed' => date('m-d-y g:i A', $row["placed"]),
			      'grand_total' => $row["grand_total"],
			      'status' => $scodes[$row["status"]],
			      'status_timestamp' => date('m-d-y', $row["status_timestamp"]),
			      'need_by_date' => $row["need_by_date"],
			      'include_card' => $row["include_card"],
			      'include_card_cost' => $row["include_card_cost"],
			      'include_card_msg' => $row["include_card_msg"],
			      'instructions' => $row["instructions"]);
}
$smarty->assign('orders', $orders);

$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];
$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");

?>