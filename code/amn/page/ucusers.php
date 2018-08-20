<?PHP

function getUserRecipientFromEmail($email) {
  global $mydb;
  $sql = "SELECT rec_id, user_id, user_default, default_billing, default_shipping, default_shipping_method, first_name, last_name, address1, address2, city, state, zipcode, email, phone FROM recipient WHERE email = '".$email."' ORDER BY rec_id DESC ";
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  return($row);
}

function getLastOrderFromEmail($email) {
  global $mydb;
  $sql = "SELECT r.rec_id, r.user_id, r.first_name, r.last_name, r.state, r.email, FROM_UNIXTIME(o.placed, '%c-%e-%y') AS order_placed,  o.status, o.cart_total FROM store_order AS o, recipient AS r WHERE o.rec_id = r.rec_id  AND o.status != '0' AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8' AND r.email = '".$email."' ORDER BY o.placed DESC LIMIT 1";
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  return($row);
}

function getOrderCountFromEmail($email) {
  global $mydb;
  $sql = "SELECT r.rec_id FROM store_order AS o, recipient AS r WHERE o.rec_id = r.rec_id  AND o.status != '0' AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8' AND r.email = '".$email."' ";
  $result = $mydb->runSql($sql);
  $count = $mydb->getCount($result);
  return($count);
}

function getLastOrderFromLastName($last_name) {
  global $mydb;
  $sql = "SELECT r.rec_id, r.user_id, r.first_name, r.last_name, r.state, r.email, FROM_UNIXTIME(o.placed, '%c-%e-%y') AS order_placed,  o.status, o.cart_total FROM store_order AS o, recipient AS r WHERE o.rec_id = r.rec_id  AND o.status != '0' AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8' AND r.last_name = '".$last_name."' ORDER BY o.placed DESC ";
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  return($row);
}

function getOrderCountFromLastName($last_name) {
  global $mydb;
  $sql = "SELECT r.rec_id FROM store_order AS o, recipient AS r WHERE o.rec_id = r.rec_id  AND o.status != '0' AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8' AND r.last_name = '".$last_name."' ";
  $result = $mydb->runSql($sql);
  $count = $mydb->getCount($result);
  return($count);
}

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = 'all';

$userDetails = fetchAllUsers(); //Fetch information for all users
foreach ($userDetails as $userDetail) {
  if ($userDetail['last_sign_in_stamp'] == '0') {
    $stamp = "Never";	
  }
  else {
    $stamp = date("j M, Y", $userDetail['last_sign_in_stamp']);
  }
  if ($userDetail['subscription_create_date'] == '0') {
    $subscription_create_date = "NA";	
  }
  else {
    $subscription_create_date = date("j M, Y", $userDetail['subscription_create_date']);
  }
  if (($two == 'all') || (($two == 'wineclub') && ($userDetail['subscription_id'] > 0))) {
    if (($two == 'wineclub') && ($userDetail['subscription_id'] > 0)) {
      $email = $userDetail['email'];
      $recipient = getUserRecipientFromEmail($email);
      $last_name = $recipient['last_name'];
      $state = $recipient['state'];
      $order_count = getOrderCountFromEmail($email);
      $order_status = "N/A";
      //$order_count = count($orders);
      if ($order_count > 0) {
	$order = getLastOrderFromEmail($email);
	//$order_status = $scodes[$order["status"]];
	$order_placed = $order["order_placed"];
      }
    }
    $users[] = array('id' => $userDetail['id'],
			     'active' => $userDetail['active'],
			     'subscription_id' => $userDetail['subscription_id'],
			     'subscription_create_date' => $subscription_create_date,
			     'subscription_referral' => $userDetail['subscription_referral'],
			     'user_name' => $userDetail['user_name'],
			     'display_name' => $userDetail['display_name'],
			     'title' => $userDetail['title'],
			     'email' => $userDetail['email'],
         		     'state' => $state,
			     'last_name' => $recipient['last_name'],
			     'order_count' => $order_count,
		             'order_placed' => $order_placed,
			     'last_sign_in_stamp' => $stamp);
  }
}
$smarty->assign('users',$users);
$smarty->assign('two',$two);
$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];
$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");


?>