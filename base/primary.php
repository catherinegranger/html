<?PHP

define('BDW_USER_NEW_MEMBER', '1');
define('BDW_USER_ADMIN', '2');
define('BDW_USER_TRADE_CA', '3');
define('BDW_USER_TRADE_NY', '4');
define('BDW_USER_DISTRIBUTOR', '5');


define('BDW_LINE_ITEM_WINE', '0');
define('BDW_LINE_ITEM_GIFTCARD', '1');
define('BDW_LINE_ITEM_BOOK', '2');
define('BDW_GIFTCARD_PRODUCTID', 'Gift Card');
define('BDW_GFTCARD_TYPE_BASIC', '0');
define('BDW_GFTCARD_TYPE_BIRTHDAY', '1');
define('BDW_GFTCARD_TYPE_HOLIDAY', '2');
define('BDW_GFTCARD_TYPE_BOTTLES', '3');

define('BDW_DISCOUNT_TYPE_GENERAL', '0');
define('BDW_DISCOUNT_TYPE_WINERY', '1');
define('BDW_DISCOUNT_TYPE_WINE', '2');
define('BDW_DISCOUNT_TYPE_APPELLATION', '3');
define('BDW_DISCOUNT_TYPE_SHIPPING', '4');
define('BDW_DISCOUNT_TYPE_ONETIME', '5');
define('BDW_DISCOUNT_TYPE_ONETIME_CLUB', '6');
define('BDW_DISCOUNT_TYPE_COUNTRY', '7');
define('BDW_DISCOUNT_TYPE_ONETIME_CB645', '8');
define('BDW_DISCOUNT_TYPE_TYPE', '9');

define('BDW_DISCOUNT_APPLY_TO_REGULAR', '0');
define('BDW_DISCOUNT_APPLY_TO_SPECIALS', '1');
define('BDW_DISCOUNT_APPLY_TO_ALL', '2');

define('BDW_FEED', 'https://www.bluedanubewine.com/blog/feed/');

define('BDW_ADULT_SIGNATURE', '5');
define('BDW_CA_TAX_RATE', '9');
define('BDW_LOCAL_DELIVERY', '10');
define('BDW_CARD_COST', '5');
define('BDW_SHIP_STATES', 'Arizona, California, Colorado, Connecticut, District of Columbia, Idaho, Indiana, Iowa, Kansas, Louisiana, Minnesota, ​Nebraska, New Mexico, Nevada, North Carolina, North Dakota, Oregon, South Dakota, Virginia, Washington, West Virginia, Wisconsin, Wyoming.');
define('BDW_NO_SHIP_STATES', 'Alabama, Alaska, Arkansas, Delaware, Georgia, Florida, Hawwaii, Illinois, Kentucky, Maine, Maryland, Massachusetts, Michigan,  Mississipi, Missouri, Montana, ​New Hampshire, New Jersey, New York, Ohio, Oklahoma, Pennsylvania, Rhode Island, South Carolina, Tennessee, Texas, Utah, Vermont.');
define('BDW_NO_SHIP_STATES2', 'Alabama, Alaska, Arizona, Arkansas, Colorado, Connecticut, Delaware, Florida, Georgia, Hawwaii, Idaho, Illinois, Indiana, Iowa, Kansas, Kentucky, Louisiana, Maine, Maryland, Massachusetts, Michigan, Minnesota,  Mississipi, Missouri, Montana, Nebraska, Nevada, New Hampshire, New Jersey, New Mexico, New York, North Carolina, North Dakota, Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, South Carolina, South Dakota, Tennessee, Texas, Utah, Vermont, Virginia, Washington, Wisconsin, Wyoming.');
define('BDW_SHOW_ALL', '0');
define('BDW_SHOW_WEBSHOP_CA_NY', '1');
define('BDW_SHOW_WEBSHOP_CA', '2');
define('BDW_SHOW_WEBSHOP_ONLY', '3');

$root_dir = dirname(__FILE__)."/..";
require_once $root_dir.'/simplepie/autoloader.php';

$bad_stuff = array('"',',','@','+','!','#','$','%','^','*',':',';','(',')','[',']','{','}','|','=','?','<','>','/','\\','`','~','&','\'','.','_','¿','¡');

$shipping_states2 = array('AZ', 'CA','CO','CT','DC','FL', 'ID','IN','IA','KS', 'LA','MN', 
			       'NE', 'NM','NV','NC','ND','OR','SD', 'VA','WA','WV','WI','WY');
$shipping_states3 = array('CA','DC','WV');
$shipping_states = array('AZ', 'CA','CO','CT','DC', 'ID','IN','IA','KS', 'LA','ME',
                         'MA',  'MN','MO', 'MT', 'NE','NJ', 'NV','NM','NC','ND','OH','OR', 'PA', 'SC','SD', 'TN', 'VA','WA','WV','WI','WY');
$shipping_states_club = array('AZ', 'CA','CO','CT','DC', 'FL','GA', 'ID','IL','IN','IA','KS', 'LA','ME',
			      'MA', 'MI', 'MN','MO', 'MT', 'NE','NJ', 'NV','NM','NC','ND','OH','OR', 'PA', 
                             'SC','SD', 'TN','TX', 'VA','WA','WV','WI','WY');
$shipping_states_club2 = array('AZ','CA','CO','CT','DC','FL','GA','ID','IL', 'IN','IA','KS','LA','MA','ME',
			 'MD', 'MI', 'MN','MO', 'MT', 'NE','NJ', 'NV','NM','NC','ND','OH','OR','PA', 'RI','SC','TN','TX',
                         'VT','VA','WA','WV','WI','WY');
$shipping_states_club3 = array('CA','DC','WV');
$shipping_states_misc = array('AL', 'AZ','AR', 'CA','CO','CT','DC','DE', 'FL','GA', 'ID','IL','IN','IA','KS','KY', 'LA','ME',
			     'MD', 'MA', 'MI', 'MN','MO','MS', 'MT', 'NE','NJ', 'NH', 'NV','NM','NY','NC','ND','OH','OR','OK', 'PA', 'RI',
                             'SC','SD', 'TN','TX', 'UT', 'VT','VA','WA','WV','WI','WY');

$shipping_states3 = array('AZ','CA','CO','CT','DC','FL','GA','ID','IL','IN','IA','KS','LA','ME',
			 'MD', 'MI', 'MN','MO','NE','NJ', 'NV','NM','NY','NC','ND','OH','OR','PA', 'RI','SC','TN','TX',
			   'VT','VA','WA','WV','WI','WY');

$problem_states = array();
$problem_states2 = array('MI','TX','PA');


$years = array('','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022'. '2023');
	
$scodes = array('Declined by Customer','Declined by BDW','Paid Authorize','Shipped','Discard','New Order','Invoiced', 'Authorize Payment Declined','Suspended by Customer', 'Paid QuickBooks', 'Paid Other', 'Partially Shipped', 'Ship Later', 'Backlog', 'Weather Delay','Damaged', 'Re-ship', 'Returned to BDW','Contacted by BDW','THub Download Failed', 'Partially Payed','Paid Gift Card', 'Gift Card Maxed Out','Duplicate for Paid Authorize');


date_default_timezone_set('UTC'); //necessary for the following date to set timezone


function kickBack($postData,$first,$second) {
  if ($postData) {
    foreach($postData as $k => $v){
      $_SESSION[$k] = trim($v);
    }
  }
  //if ($first) { $located = $first; if (strpos($first, '#') === FALSE) { $located .= "/";    }  }
  !$first ? ($located) : $located = $first."/";
  !$second ? ($located) : $located = $located.$second."/";
  header("Location: /".$located);
  exit;
}

function validEmail($email) {
  return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}

function isValidEmail2($email){
  return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}

function check_email_address($email) {
  // First, we check that there's one @ symbol, 
  // and that the lengths are right.
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters 
    // in one section or wrong number of @ symbols.
    return FALSE;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",$local_array[$i])) {
      return FALSE;
    }
  }
  // Check if domain is IP. If not, 
  // it should be valid domain name
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
      return FALSE; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|↪([A-Za-z0-9]+))$",$domain_array[$i])) {
        return FALSE;
      }
    }
  }
  return TRUE;
}

function getQuickbooksId($product_id) {
  return $product_id;
}

function getQuickbooksId2($product_id) {
  $quickbooks_id = "";
  $counter = 0;
  $winery_read = FALSE;
  while ($counter < strlen($product_id)) {
    $c = $product_id[$counter++];
    $next_c = $product_id[$counter];
    $quickbooks_id .= $c;
    if (($winery_read == FALSE) && (is_numeric($c) == FALSE) && (is_numeric($next_c))) {
      $quickbooks_id .= " "; // add space after winery alpha prefix
      $winery_read = TRUE; 
    }
  }
  return $quickbooks_id;
}

function writeToFile($filename, $content) {
  $error = "";
  if (is_writable($file_name)) {
    if ($handle = fopen($filename, 'w')) {
      if (fwrite($handle, $out) === FALSE) {
	$error = "Cannot write to file ($filename)";
      }
      fclose($handle);
    }
    else {
      $error = "Cannot open file ($filename)";
    }
  }
  else {
    $error = "The file $weekly_filename is not writable";
  }
  return($error);
}

function removeAccent($name) {
  $name = unSlav($name);
  $name = unSpan($name);
  $name = unGerm($name);
  $name = unHun($name);
  return($name);
}

function getOrderItems($order_id, $page) { 
  global $mydb;
  $sql = "SELECT store_order_item.ident, store_order_item.type, store_order_item.quantity,store_order_item.base_price, store_order_item.price, vintage.year, vintage.size, vintage.product_id, vintage.name AS vint_name, vintage.appellation, vintage.grup, vintage.bottles, vintage.shipping, vintage.price AS base_price, vintage.sale AS sale_price, winery.wy_id AS winery_id,  winery.name AS winery_name FROM store_order_item LEFT JOIN vintage ON vintage.vint_id = store_order_item.ident LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE store_order_item.o_id = '".$order_id."' ";
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    if ($row["type"] == BDW_LINE_ITEM_GIFTCARD) {
      $product_id = BDW_GIFTCARD_PRODUCTID;
      $product_name = BDW_GIFTCARD_PRODUCTID;
      $base_price = fixCurrency($row["price"]);
      if ($page == "edit_order") {
        $product_id .= " ".quickbooksPadding($row["ident"]);
        $giftcard = getGiftCardById($row["ident"]);
	$giftcard_info = "From ".$giftcard["purchaser_name"]." ".$giftcard["purchaser_email"].", For ".$giftcard["recipient_name"]." ".$giftcard["recipient_email"];
	$product_name = $giftcard_info;
      }
    }
    else {
      //$product_name = makeOrderItemDescription($row["year"], $row["winery_name"], $row["vint_name"]);
      $product_name = fullMobileCartName($row["winery_name"], $row["vint_name"],$row["year"],$row["size"]);
      $product_id = $row["product_id"];
      $base_price = fixCurrency($row["base_price"]);
    }
    $items[] = array('ident' => $product_name,
		     'product_id' => $product_id,
		     'quantity' => $row["quantity"],
		     'bottles' => $row["bottles"],
		     'base_price' => $base_price,
		     'price' => fixCurrency($row["price"]),
		     'total_price' => fixCurrency($row["price"]*$row["quantity"]),
		     );
  }
  return($items);
}

function getGiftCardTotal($order_grand_total, $giftcard_balance) {
  if ($order_grand_total <= $giftcard_balance) {
    return(0);
  }
  else {
    return($order_grand_total - $giftcard_balance);
  }
}

function isOneTimeClubDiscount($discount_type, $discount_id) { // deprecated
  return(checkOneTimeClubDiscount($discount_type, $discount_id));
}

function checkOneTimeDiscount($discount_type, $discount_id) {  // deprecated
  if ((isset($_SESSION["userCakeUser"])) && ($discount_type == BDW_DISCOUNT_TYPE_ONETIME)) {
    $userId = $_SESSION["userCakeUser"]["user_id"];
    if (($userId > 0) && (!isDiscountUsed($userId, $discount_id))) {
      return(TRUE);
    }
  }
  return(FALSE);
}

function checkOneTimeClubDiscount($discount_type, $discount_id) {  // deprecated
  if ((isset($_SESSION["userCakeUser"])) && ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CLUB)) {
    $userId = $_SESSION["userCakeUser"]["user_id"];
    if ($userId > 0) {
      $userDetails = fetchUserDetails(NULL, NULL, $userId);
      $subscription = $userDetails["subscription_id"];
      if (($subscription > 0) && (!isDiscountUsed($userId, $discount_id))) {
	return(TRUE);
      }
    }
  }
  return(FALSE);
}



function isDiscountUsed($userId, $discount_id) { // need to check user has purchased
  global $mydb;
  $sql = "SELECT o.o_id FROM store_order AS o, recipient AS r WHERE r.user_id = '".$userId."'  AND o.discount_id =  '".$discount_id."'  AND o.rec_id = r.rec_id AND o.status != '5' AND o.status != '0' AND o.status != '1' AND o.status != '7' AND o.status != '8' AND o.status != '18'  AND o.status != '4' AND o.status != '17'";
$result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  if ($row) {
    return(TRUE);
  }
  return(FALSE);
}

function isDiscountUsedByEmail($discount_id, $recipient_email) {
  global $mydb;
  $sql = "SELECT recipient.email FROM (recipient, store_order) WHERE store_order.rec_id = recipient.rec_id AND recipient.email like  '".$recipient_email."' AND store_order.discount_id = '".$discount_id."' AND store_order.status != 8 AND store_order.status != 4 AND store_order.status != 7 AND store_order.status != 0 AND store_order.status != 5 ";
  $result = $mydb->runSql($sql);
  $row = $mydb->getRow($result);
  if ($row) {
    return(TRUE);
  }
  return(FALSE);
}

function checkDiscountWindow($discount_from, $discount_to) {
  if (($discount_from > 0) && ($discount_to == 0)) // permanent
    return(TRUE);
  else {
    $today = time();
    if (($today >= $discount_from) && ($today <= $discount_to))
      return(TRUE);
  }
  return(FALSE);
}

function isOneTimeDiscount($discount_type) { 
  if (($discount_type == BDW_DISCOUNT_TYPE_ONETIME) ||
      ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CLUB) || 
      ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645))
    return(TRUE);
  return(FALSE);
}

function checkDiscountValid($discount_id, $discount_type, $discount_from, $discount_to) { // check discount window, one time discount
  if (!checkDiscountWindow($discount_from, $discount_to)) {
    return("CART_DISCOUNT_EXPIRED");
  }
  else if (isOneTimeDiscount($discount_type)) {
    $$userId = 0;
    if (isset($_SESSION["userCakeUser"])) 
      $userId = $_SESSION["userCakeUser"]["user_id"];
    if ($userId <= 0) {
      if (($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CLUB) || ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645))
	return("CART_DISCOUNT_MEMBERLOGIN");
      else
	return("CART_DISCOUNT_LOGIN");
    }
    else {
      if (isDiscountUsed($userId, $discount_id)) {
	return("CART_DISCOUNT_USED");
      }
      else if (($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CLUB) || ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645)) {
	$userDetails = fetchUserDetails(NULL, NULL, $userId);
	$subscription = $userDetails["subscription_id"];
	if ($subscription <= 0) {
	  return("CART_DISCOUNT_MEMBERONLY");
	}
      }
    }
  }
  return(NULL);
}

function checkDiscountMinBottles($discount_type, $discount_min_bottles, $bottle_quantity) {
  if (($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645) && 
      ($discount_min_bottles > $bottle_quantity)) {
    return("CART_DISCOUNT_MIN_BOTTLES");
  }
  return(NULL);
}

function checkDiscountStrictMinBottles($discount_type, $discount_min_bottles, $bottle_quantity) {
  if (($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645) && 
      ($discount_min_bottles != $bottle_quantity)) {
    return("CART_DISCOUNT_STRICT_MIN_BOTTLES");
  }
  return(NULL);
}

function checkDiscountSize($discount_type_value_string, $vintage_id) {
  global $mydb;
  $size = 0;
  $sql = "SELECT vint_id, size FROM vintage WHERE vint_id  = '".$vintage_id."'  ";
  $result = $mydb->runSql($sql);
  if ($row = $mydb->getAssoc($result)) {
    $size = $row["size"];
  }
  if (($discount_type_value_string == "Liter") && ($size == 1000))
    return(TRUE);
  return(FALSE);
}

function checkDiscountVarietal($discount_type_value_string, $vintage_id) {
  global $mydb;
  $sql = "SELECT vintage.vint_id FROM vintage, varietal, var_vint WHERE varietal.v_id = var_vint.v_id AND var_vint.vint_id = vintage.vint_id AND vintage.vint_id  = '".$vintage_id."' AND varietal.friendly = '".$discount_type_value_string."' ";
  $result = $mydb->runSql($sql);
  $row = $mydb->getRow($result);
  if ($row) 
    return(TRUE);
  return(FALSE);
}

function checkDiscountOrganic($discount_type_value_string, $vintage_id) {
  global $mydb;
  $sql = "SELECT vint_id, organic FROM vintage WHERE vintage.vint_id  = '".$vintage_id."' AND organic = 1 ";
  $result = $mydb->runSql($sql);
  $row = $mydb->getRow($result);
  if ($row) 
    return(TRUE);
  return(FALSE);
}

function checkDiscountTarget($discount_type, $discount_type_value, $discount_type_value_string, $vintage_id, $winery_id, $appellation, $country, $wine_type) { 
  if ($discount_type_value_string == "Liter") 
    return(checkDiscountSize($discount_type_value_string, $vintage_id)); // need to redo this to include size
  if ($discount_type_value_string == "Furmint")
    return(checkDiscountVarietal($discount_type_value_string, $vintage_id)); // need to redo this to include varietals
  if ($discount_type_value_string == "Bluegrape") {
    if (checkDiscountVarietal("Blaufrankisch", $vintage_id))
      return(TRUE);
    else
      return(checkDiscountVarietal("Kekfrankos", $vintage_id));
  }
  if ($discount_type_value_string == "Organic") 
    return(checkDiscountOrganic($discount_type_value_string, $vintage_id)); // need to redo this to include organic
  if ($discount_type_value_string == "Istria") { // need appellation and sub appellation
    if (($appellation == "Koper") || ($appellation == "Kras")) 
      $appellation = $discount_type_value_string;
  }
  else 
    $appellation = removeAccent($appellation);
  if ($discount_type_value_string == "Balkan") { 
    if (($country == "Croatia") || ($country == "Bosnia Herzegovina")) 
      $country = $discount_type_value_string;
  }  
  if ($discount_type_value_string == "SLOCRO") { 
    if (($country == "Croatia") || ($country == "Slovenia")) 
      $country = $discount_type_value_string;
  }  
  if (($discount_type == BDW_DISCOUNT_TYPE_GENERAL) ||
      ($discount_type == BDW_DISCOUNT_TYPE_ONETIME) ||
      ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CLUB) ||
      ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645) ||
      (($discount_type == BDW_DISCOUNT_TYPE_WINERY) && ($discount_type_value == $winery_id)) ||
      (($discount_type == BDW_DISCOUNT_TYPE_WINE) && ($discount_type_value == $wine_id)) ||
      (($discount_type == BDW_DISCOUNT_TYPE_COUNTRY) && ($discount_type_value_string == $country)) ||
      (($discount_type == BDW_DISCOUNT_TYPE_TYPE) && ($discount_type_value_string == $wine_type)) ||
      (($discount_type == BDW_DISCOUNT_TYPE_APPELLATION) && ($discount_type_value_string == $appellation)))
    return(TRUE);
  if (($discount_type == BDW_DISCOUNT_TYPE_WINE) && (strlen($discount_type_value_string) > 0)) {
    // case multiple ids
    $ids_string = ';'.$discount_type_value_string.';';
    $id_string = ';'.$vintage_id.';';
    if (strpos($ids_string,$id_string) !== FALSE) 
      return (TRUE);
  }
  else if (($discount_type == BDW_DISCOUNT_TYPE_WINERY) && (strlen($discount_type_value_string) > 0)) {
    // case multiple ids
    $ids_string = ';'.$discount_type_value_string.';';
    $id_string = ';'.$winery_id.';';
    if (strpos($ids_string,$id_string) !== FALSE) 
      return (TRUE);
  }
  return(FALSE);
}


function checkDiscountApplies($discount_apply_to, $item_base_price, $item_price, $grup) {
  if (($discount_apply_to == BDW_DISCOUNT_APPLY_TO_ALL) ||
      (($discount_apply_to == BDW_DISCOUNT_APPLY_TO_REGULAR) && ($item_base_price <= $item_price)) ||
      (($discount_apply_to == BDW_DISCOUNT_APPLY_TO_SPECIALS) && ($item_base_price > $item_price) && ($grup == 0)))
    return(TRUE);
  return(FALSE);
}

function getShow($view_webshop,$view_ca,$view_ny,$view_dist) {
  $show = BDW_SHOW_ALL;
  if ($view_dist == 0) {
    if ($view_ny == 0) {
      if ($view_ca == 0) {
	$show = BDW_SHOW_WEBSHOP_ONLY;
      }
      else {
	$show = BDW_SHOW_WEBSHOP_CA;
      }
    }
    else {
      $show = BDW_SHOW_WEBSHOP_CA_NY;
    }
  }
  return($show);
}

function canShow($view_webshop,$view_ca,$view_ny,$view_dist) {
  if ((isset($_SESSION["userCakeUser"])) && ($_SESSION["userCakeUser"])) {
    if (((isTradeCALoggedin()) && (!$view_ca)) ||
	((isTradeNYLoggedin()) && (!$view_ny)) ||
	((isDistributorLoggedin()) && (!$view_dist)))
      return(FALSE);
  }
  return(TRUE);
}


function isUserFromTrade() {
  if ((isset($_SESSION["userCakeUser"])) && ($_SESSION["userCakeUser"])) {
    if ((isTradeCALoggedin()) || (isTradeNYLoggedin()) || (isDistributorLoggedin()))
      return(TRUE);
  }
  return(FALSE);
}


function canShowRetailPrice() {
  if (isUserFromTrade()) 
    return(FALSE);
  return(TRUE);
}

function getViewableVintageQuery() {
  $sql = "";
  if ((isset($_SESSION["userCakeUser"])) && ($_SESSION["userCakeUser"])) {
    if (isTradeCALoggedin()) {
      $sql = " AND vintage.view_ca = 1 ";
    }
    else if (isTradeNYLoggedin()) {
      $sql = " AND vintage.view_ny = 1 ";
    }
    else if (isDistributorLoggedin()) {
      $sql = " AND vintage.view_dist = 1 ";
    }
  }
  return($sql);
}

function getCountryFullName($countries, $country_id) {
  foreach ($countries as $country) {
    if ($country["c_id"] == $country_id)
      return($country["full_name"]);
  }
  return(NULL);
}

function getCountryWebName($countries, $country_id) {
  foreach ($countries as $country) {
    if ($country["c_id"] == $country_id)
      return($country["web_name"]);
  }
  return(NULL);
}

function getCountry($country_id) {
    global $ncc;
    foreach ($ncc as $country) {
        if ($country["c_id"] == $country_id) {
            return($country);
        }
    }
    return(NULL);
}

function getCountryId($country_name) {
    global $ncc;
    foreach ($ncc as $country) {
        if ($country["web_name"] == $country_name) {
            return($country["c_id"]);
        }
    }
    return(0);
}

function getCountryName($country_id) {
    global $ncc;
    foreach ($ncc as $country) {
        if ($country["c_id"] == $country_id) {
            return($country["web_name"]);
        }
    }
    return(NULL);
}

function getWineryCountry($winery_id) {
  $country_name = NULL;
  if ($winery_id > 0) {
    global $mydb;
    $sql =  "SELECT country_code.full_name FROM country_code, winery WHERE country_code.c_id = winery.c_id AND wy_id = '".$winery_id."' ";
    $result = $mydb->runSql($sql);
    $row = $mydb->getRow($result);
    if ($row) {
      $country_name = $row[0];
    }
  }
  return($country_name);
}

function getVintageCountry($vint_id) {
    $country_id = 0;
    $country_name = NULL;
    if ($vint_id > 0) {
        global $mydb;
        $sql =  "SELECT vintage.country_id, winery.c_id FROM vintage, winery WHERE vintage.wy_id = winery.wy_id AND vintage.vint_id = '".$vint_id."' ";
        $result = $mydb->runSql($sql);
        $row = $mydb->getRow($result);
        if ($row) {
            $vintage_country_id = $row[0];
            $winery_country_id = $row[1];
            if ($vintage_country_id > 0)
                $country_id = $vintage_country_id;
            else
                $country_id = $winery_country_id;
        }
        if ($country_id > 0) {
            $sql =  "SELECT country_code.full_name FROM country_code  WHERE country_code.c_id = '".$country_id."' ";
            $result = $mydb->runSql($sql);
            $row = $mydb->getRow($result);
            if ($row) {
                $country_name = $row[0];
            }
        }
    }
    return($country_name);
}

function getWineType($wine_id) {
  $wine_type = NULL;
  if ($wine_id > 0) {
    global $mydb;
    $sql =  "SELECT type.name AS type_name FROM vintage, type WHERE vintage.type_id = type.type_id AND vintage.vint_id = '".$wine_id."' ";
    $result = $mydb->runSql($sql);
    $row = $mydb->getRow($result);
    if ($row) {
      $wine_type = $row[0];
    }
  }
  return($wine_type);
}

function getInvoiceNumber($order_number) {
  $invoice_number = 'W'.$order_number;
  return($invoice_number);
}

function getOrderNumber($invoice_number) {
  $order_number = str_replace("W","",$invoice_number);
  return($order_number);
}

function taxableOrder($ship_state, $ship_method) {
  $taxable = FALSE;
  if ((($ship_state == 'CA') && ($ship_method != "Contact Me")) ||
      ($ship_method == "Pick Up Los Altos Hills")) {
    $taxable = TRUE;
  }
  return($taxable);
}

function computeTax($total, $ship_state, $ship_method) {
  $tax = 0;
  if (taxableOrder($ship_state, $ship_method)) {
    $rate = BDW_CA_TAX_RATE;
    $tax = number_format((($total * $rate) / 100), 2);
  }
  return($tax);
}

function checkShippingState($ship_state, $shipping_states) {
  return(in_array($ship_state, $shipping_states));
}

function checkExpensiveState($ship_state) {
  $is_expensive = FALSE;
  if (($ship_state == 'AK') || ($ship_state == 'HI'))
    $is_expensive = TRUE;
  return($is_expensive);
}

function checkDeliveryQuantity($ship_method, $ship_state, $bottle_quantity) {
  $is_valid = TRUE;
  if (($ship_method == "Local Delivery") && ($ship_state == 'CA') && ($bottle_quantity < 3)) {
    $is_valid = FALSE;
  }
  return($is_valid);
}

function checkDeliveryZipcode($ship_method, $ship_state, $ship_zipcode) {
  $is_valid = FALSE;
  if ($ship_method == "Local Delivery") {
    if ($ship_state == 'CA') {
      $code = substr($ship_zipcode, 0, 2);
      switch($code) {
      case 94:
      case 95:
	$is_valid = checkZipcode($ship_zipcode);
	break;      
      }
    }
  }
  else {
    $is_valid = TRUE;
  }
  return($is_valid);
}

function checkShippingMethod($ship_method, $bottle_quantity, $ship_state, $ship_zipcode) {
  $is_valid = FALSE;
  if ($ship_method == "Local Delivery") {
    if (($ship_state == 'CA') && ($bottle_quantity >= 3)) {
      $code = substr($ship_zipcode, 0, 2);
      switch($code) {
      case 94:
      case 95:
        $is_valid = checkZipcode($ship_zipcode);
        break;      
      }
    }
  }
  else {
    $is_valid = TRUE;
  }
  return($is_valid);
}

function checkZipcode($ship_zipcode) {
  $is_valid = FALSE;
  $code = substr($ship_zipcode, 0, 5);
  switch($code) {
      case 95191:
      case 95002:
      case 94040:
      case 95194:
      case 95008:
      case 95009:
      case 95011:
      case 95013:
      case 95014:
      case 95015:
      case 94303:
      case 95193:
      case 94022:
      case 94023:
      case 94024:
      case 94035:
      case 94039:
      case 94040:
      case 94041:
      case 94042:
      case 94043:
      case 94301:
      case 94302:
      case 94303:
      case 94304:
      case 94305:
      case 94306:
      case 94309:
      case 95050:
      case 95051:
      case 95052:
      case 95053:
      case 95054:
      case 95055:
      case 95056:
      case 95055:
      case 94085:
      case 94086:
      case 94087:
      case 94088:
      case 94089:

      case 94002:
      case 94003:
      case 94005:
      case 94010:
      case 94011:
      case 94012:
      case 94014:
      case 94015:
      case 94016:
      case 94017:
      case 94020:
      case 94025:
      case 94026:
      case 94027:
      case 94028:
      case 94029:
      case 94030:
      case 94031:
      case 94059:
      case 94060:
      case 94061:
      case 94061:
      case 94062:
      case 94063:
      case 94064:
      case 94065:
      case 94066:
      case 94067:
      case 94070:
      case 94071:
      case 94080:
      case 94083:
      case 94096:
      case 94098:
      case 94099:
      case 94307:
      case 94308:


      case 95020:
      case 95038:
      case 95037:
      case 94022:
      case 94501:
      case 94502:
      case 94706:
      case 94027:
      case 94701:
      case 94702:
      case 94703:
      case 94704:
      case 94705:
      case 94706:
      case 94707:
      case 94708:
      case 94709:
      case 94710:
      case 94711:
      case 94712:
      case 94720:
      case 94010:
      case 94014:
      case 95014:
      case 94608:
      case 94025:
      case 94026:
      case 94040:
      case 94043:
      case 94601:
      case 94602:
      case 94603:
      case 94604:
      case 94605:
      case 94606:
      case 94607:
      case 94608:
      case 94609:
      case 94610:
      case 94611:
      case 94612:
      case 94618:
      case 94619:
      case 94621:
      case 94303:
      case 94306:
      case 94061:
      case 94062:
      case 94063:
      case 94064:
      case 94070:
      case 94101:
      case 94102:
      case 94103:
      case 94104:
      case 94105:
      case 94106:
      case 94107:
      case 94108:
      case 94109:
      case 94110:
      case 94111:
      case 94112:
      case 94113:
      case 94114:
      case 94115:
      case 94116:
      case 94117:
      case 94118:
      case 94119:
      case 94120:
      case 94121:
      case 94122:
      case 94123:
      case 94124:
      case 94125:
      case 94126:
      case 94127:
      case 94128:
      case 94129:
      case 94130:
      case 94131:
      case 94132:
      case 94133:
      case 94134:
      case 94158:
      case 94159:
      case 95109:
      case 95110:
      case 95111:
      case 95112:
      case 95113:
      case 95114:
      case 95115:
      case 95116:
      case 95117:
      case 95118:
      case 95119:
      case 95120:
      case 95121:
      case 95122:
      case 95127:
      case 94401:
      case 94402:
      case 94403:
      case 94404:
      case 94405:
      case 94406:
      case 94407:
      case 94408:
      case 94409:
      case 94497:
      case 95050:
      case 95051:
      case 95052:
      case 94080:
      case 94085:
      case 95595:
      case 95596:
      case 95597:
      case 95598:
        $is_valid = TRUE;
        break;      
  }
  return($is_valid);
}

function computeAdultSignature($bottle_quantity, $ship_state, $ship_method) {
  $adult_signature = 0;
  if (($bottle_quantity > 0) && ($ship_method == "UPS Ground"))
    $adult_signature = BDW_ADULT_SIGNATURE;
  return($adult_signature);
}

function getDiscountType($discount_id) {
  $discount_type = -1;
  if ($discount_id > 0) {
    global $mydb;
    $sql = "SELECT type from order_discount where discount_id = '".$discount_id."' ";
    $result = $mydb->runSql($sql);
    $row = $mydb->getRow($result);
    if ($row) {
      $discount_type = $row[0];
    }
  }
  return($discount_type);
}

function getDiscountName($discount_id) {
    $discount_name = "";
    if ($discount_id > 0) {
        global $mydb;
        $sql = "SELECT name from order_discount where discount_id = '".$discount_id."' ";
        $result = $mydb->runSql($sql);
        $row = $mydb->getRow($result);
        if ($row) {
            $discount_name = $row[0];
        }
    }
    return($discount_name);
}

function isShippingDiscount($discount_type) { 
  if ($discount_type == BDW_DISCOUNT_TYPE_SHIPPING) 
    return(TRUE);
  return(FALSE);
}

function discountedShippingBottles($bottle_quantity) { // not used right now
  $discounted_bottle_quantity = $bottle_quantity;
  $halfcase_quantity = floor($bottle_quantity / 6);
  $bottle_mod = $bottle_quantity % 6;
  if ($bottle_mod == 0) {
    $discounted_bottle_quantity = 0;
  }
  else if (($bottle_quantity > 5) && ($bottle_quantity < 13)) {
    $discounted_bottle_quantity = 0;
  }
  else {
    $discounted_bottle_quantity = $bottle_mod;
  }
  return($discounted_bottle_quantity);
}

function checkDiscountShippingApplies($bottle_quantity, $discount_type) { 
  if (($bottle_quantity > 5) && ($bottle_quantity < 13)) {
    return(TRUE);
  }
  else {
    return(FALSE);
  }
}

function computeWineClubShippingBottles($user, $bottle_quantity) { 
  if (($user) && ($user["user_id"] > 0)) { // should have already checked wine club membership
    //if (($bottle_quantity > 5) && ($bottle_quantity < 13)) { return(0); }
    $bottle_mod = $bottle_quantity % 6;
    return($bottle_mod);
  }
  return($bottle_quantity);
}

function checkWineClubCartQtyCompliance($user, $bottle_quantity) { //deprecated
  $wineClubShippingBottles = computeWineClubShippingBottles($user, $bottle_quantity);
  if ($wineClubShippingBottles == 0)
    return(TRUE);
  return(FALSE);
}

function computeWineClubShipping($user, $bottle_quantity, $ship_state, $ship_method, $discount_type) { 
  if ($discount_type == BDW_DISCOUNT_TYPE_ONETIME_CB645)
    $bottle_quantity += 1; // free bottle
  $wineClubShippingBottles = computeWineClubShippingBottles($user, $bottle_quantity);
  if ($wineClubShippingBottles == 0) {
    return(0);
  }
  return(computeShipping($wineClubShippingBottles, $ship_state, $ship_method, $discount_type));
}

function computeShippingSaving($bottle_quantity, $ship_state, $ship_method, $discount_type) { 
  $regularshipping = computeShipping($bottle_quantity, $ship_state, $ship_method, $discount_type);
  $bottle_mod = $bottle_quantity % 6;
  if ($bottle_mod == 0) {
    return($regularshipping);
  }
  return($regularshipping - computeShipping($bottle_mod, $ship_state, $ship_method, $discount_type));
}

function computeShipping($bottle_quantity, $ship_state, $ship_method, $discount_type) { 
  if ((isShippingDiscount($discount_type)) && (checkDiscountShippingApplies($bottle_quantity, $discount_type))) {
    return(0);
  }
  return(computeActualShipping($bottle_quantity, $ship_state, $ship_method));
}

function computeActualShipping($bottle_quantity, $ship_state, $ship_method) { 
  $shipping = 0;
  if ($bottle_quantity > 0) {
    if ($ship_method == "Local Delivery") {
      $shipping = BDW_LOCAL_DELIVERY;
    }
    else if ($ship_method == "UPS Ground") {
      $case_quantity = floor($bottle_quantity / 12);
      $bottle_mod = $bottle_quantity % 12;
      $case_price = 0;
      $mod_price = 0;
      if ($ship_state == 'CA') {
	$case_price = 25;
	if ($bottle_mod == 0) {
	  $mod_price = 0;
	}
	else if ($bottle_mod == 1) {
	  $mod_price = 13;
	}
	else if ($bottle_mod < 4) {
	  $mod_price = 15;
	}
	else if ($bottle_mod < 7) {
	  $mod_price = 17;
	}
	else {
	  $mod_price = $case_price;
	}
      }
      else if (($ship_state == 'AZ') || 
	       ($ship_state == 'CO') ||
	       ($ship_state == 'ID') ||
	       ($ship_state == 'MT') || // montana
	       ($ship_state == 'NV') ||
	       ($ship_state == 'NM') ||
	       ($ship_state == 'OR') ||
	       ($ship_state == 'WA') ||
	       ($ship_state == 'WY') 
	       ) {
	$case_price = 30;
	if ($bottle_mod == 0) {
	  $mod_price = 0;
	}
	else if ($bottle_mod == 1) {
	  $mod_price = 15;
	}
	else if ($bottle_mod < 4) {
	  $mod_price = 18;
	}
	else if ($bottle_mod < 7) {
	  $mod_price = 20;
	}
	else {
	  $mod_price = $case_price;
	}
      }
      else {
	$case_price = 45;
	if ($bottle_mod == 0) {
	  $mod_price = 0;
	}
	else if ($bottle_mod == 1) {
	  $mod_price = 20;
	}
	else if ($bottle_mod < 4) {
	  $mod_price = 25;
	}
	else if ($bottle_mod < 7) {
	  $mod_price = 30;
	}
	else {
	  $mod_price = $case_price;
	}
      }
      $shipping = $case_quantity*$case_price + $mod_price;
    }
  }
  return($shipping);
}


function needOneMoreWineClubBottle($user, $bottle_quantity) { 
  if (($user) && ($user["user_id"] > 0) && ($bottle_quantity > 4)) { // should have already checked wine club membership
    $bottle_mod = $bottle_quantity % 6;
    if ($bottle_mod == 5) 
      return(TRUE);
  }
  return(FALSE);
}

function needOneLessWineClubBottle($user, $bottle_quantity) { 
  if (($user) && ($user["user_id"] > 0) && ($bottle_quantity > 6)) { // should have already checked wine club membership
    $bottle_mod = $bottle_quantity % 6;
    if ($bottle_mod == 1) 
      return(TRUE);
  }
  return(FALSE);
}

function getGiftcardStringType($giftcard_type) {
  if ($giftcard_type == 0) return ("");
  else if ($giftcard_type == 1) return ("Holiday");
  else if ($giftcard_type == 2) return ("Birthday");
  else if ($giftcard_type == 3) return ("Message in the Bottle");
  else return("");
}

function getCartGiftcardName($cartitem) {
  $name = "";
  if ($cartitem["type"] == BDW_LINE_ITEM_GIFTCARD) {
    $name = getGiftcardStringType($cartitem["giftcard_type"])." ".BDW_GIFTCARD_PRODUCTID." for ".$cartitem["recipient_name"];
  }
  return($name);
}

function makeOrderItemDescription($year, $wy_name, $vint_name) {
  $description = $vint_name;
  if (($wy_name) && ($wy_name != "Specials")) 
    $description = $wy_name . " " . $description;
  if ($year)
    $description = $year . " " . $description;
  return($description);
}

function hasRequiredBillingInformation($first_name, $last_name, $address1, $city, $state, $zipcode, $email, $phone, $instructions) {
  if ($first_name && $last_name && $address1 && $city && $state && $zipcode && $email && $phone)
    return(TRUE);
  return(FALSE);
}

function hasNoBillingInformation($first_name, $last_name, $address1, $city, $state, $zipcode, $email, $phone, $instructions) {
  if (!$first_name && !$last_name && !$address1 && !$city && !$state && !$zipcode && !$email && !$phone)
    return(TRUE);
  return(FALSE);
}

function storeInSessionBillingInformation2($first_name, $last_name, $address1, $address2, $city, $state, $zipcode, $email, $phone) {
  $_SESSION["recipient"]["first_name"] = $first_name;
  $_SESSION["recipient"]["last_name"] = $last_name;
  $_SESSION["recipient"]["address1"] = $address1;
  $_SESSION["recipient"]["address2"] = $address2;
  $_SESSION["recipient"]["city"] = $city;
  $_SESSION["recipient"]["state"] = $state;
  $_SESSION["recipient"]["zipcode"] = $zipcode;
  $_SESSION["recipient"]["email"] = $email;
  $_SESSION["recipient"]["phone"] = $phone;
}

function hasRequiredShippingInformation($ship_first_name, $ship_last_name, $ship_address1, $ship_city, $ship_state, $ship_zipcode, $ship_email, $ship_phone, $ship_method) {
  if ($ship_first_name && $ship_last_name && $ship_address1 && $ship_city && $ship_state && $ship_zipcode && $ship_method)
    return(TRUE);
  return(FALSE);
}

function hasNoShippingInformation($ship_first_name, $ship_last_name, $ship_address1, $ship_city, $ship_state, $ship_zipcode, $ship_email, $ship_phone, $ship_method) {
  if (!$ship_first_name && !$ship_last_name && !$ship_address1 && !$ship_city && !$ship_state && !$ship_zipcode)
    return(TRUE);
  return(FALSE);
}
function storeInSessionBillingInformation($first_name, $last_name, $address1, $address2, $city, $state, $zipcode, $email, $phone, $instructions) {
  $_SESSION["first_name"] = $first_name;
  $_SESSION["last_name"] = $last_name;
  $_SESSION["address1"] = $address1;
  $_SESSION["address2"] = $address2;
  $_SESSION["city"] = $city;
  $_SESSION["state"] = $state;
  $_SESSION["zipcode"] = $zipcode;
  $_SESSION["email"] = $email;
  $_SESSION["phone"] = $phone;
  $_SESSION["instructions"] = $instructions;
}

function storeBillingInformation($first_name, $last_name, $address1, $city, $state, $zipcode, $email, $phone, $instructions) { // old
  $_SESSION["first_name"] = $first_name;
  $_SESSION["last_name"] = $last_name;
  $_SESSION["address1"] = $address1;
  $_SESSION["address2"] = $address2;
  $_SESSION["city"] = $city;
  $_SESSION["state"] = $state;
  $_SESSION["zipcode"] = $zipcode;
  $_SESSION["email"] = $email;
  $_SESSION["phone"] = $phone;
  $_SESSION["instructions"] = $instructions;
}

function storeInSessionShippingInformation($ship_first_name, $ship_last_name, $ship_address1, $ship_address2, $ship_city, $ship_state, $ship_zipcode, $ship_email, $ship_phone, $ship_method) {
  $_SESSION["ship_first_name"] = $ship_first_name;
  $_SESSION["ship_last_name"] = $ship_last_name;
  $_SESSION["ship_address1"] = $ship_address1;
  $_SESSION["ship_address2"] = $ship_address2;
  $_SESSION["ship_city"] = $ship_city;
  $_SESSION["ship_state"] = $ship_state;
  $_SESSION["ship_zipcode"] = $ship_zipcode;
  $_SESSION["ship_email"] = $ship_email;
  $_SESSION["ship_phone"] = $ship_phone;
  $_SESSION["ship_method"] = $ship_method;
}
function storeShippingInformation($ship_first_name, $ship_last_name, $ship_address1, $ship_city, $ship_state, $ship_zipcode, $ship_email, $ship_phone, $ship_method) { // old
  $_SESSION["ship_first_name"] = $ship_first_name;
  $_SESSION["ship_last_name"] = $ship_last_name;
  $_SESSION["ship_address1"] = $ship_address1;
  $_SESSION["ship_address2"] = $ship_address2;
  $_SESSION["ship_city"] = $ship_city;
  $_SESSION["ship_state"] = $ship_state;
  $_SESSION["ship_zipcode"] = $ship_zipcode;
  $_SESSION["ship_email"] = $ship_email;
  $_SESSION["ship_phone"] = $ship_phone;
  $_SESSION["ship_method"] = $ship_method;
}

function storeInSessionShippingInformation2($ship_first_name, $ship_last_name, $ship_address1, $ship_address2, $ship_city, $ship_state, $ship_zipcode, $ship_email, $ship_phone, $ship_method, $instructions) {
  $_SESSION["ship_first_name"] = $ship_first_name;
  $_SESSION["ship_last_name"] = $ship_last_name;
  $_SESSION["ship_address1"] = $ship_address1;
  $_SESSION["ship_address2"] = $ship_address2;
  $_SESSION["ship_city"] = $ship_city;
  $_SESSION["ship_state"] = $ship_state;
  $_SESSION["ship_zipcode"] = $ship_zipcode;
  $_SESSION["ship_email"] = $ship_email;
  $_SESSION["ship_phone"] = $ship_phone;
  $_SESSION["ship_method"] = $ship_method;
  $_SESSION["instructions"] = $instructions;
}

function orderStatusToString($status) {
  $string_status = "";
  switch($status) {
  case 0: $string_status = "Declined by Customer"; break;
  case 1: $string_status = "Declined by BDW"; break;
  case 2: $string_status = "Paid Authorize"; break;
  case 3: $string_status = "Delivered"; break;
  case 4: $string_status = "Discard"; break;
  case 5: $string_status = "New Order"; break;
  case 6: $string_status = "Invoiced"; break;
  case 7: $string_status = "Authorize Payment Declined"; break;
  case 8: $string_status = "Suspended by Customer"; break;
  case 9: $string_status = "Paid QuickBooks"; break;
  case 10: $string_status = "Paid Other"; break;
  case 23: $string_status = "Paid Authorize"; break;
  }
  return($string_status);
}

function cartBottleQuantity($cart) { 
  $cart_bottle_quantity = 0;
  if ($cart) {
    foreach($cart as $key => $cartitem) {
      if ($cartitem["deleted"] == '0') {
	$cart_item_bottles = $cartitem["bottles"];
	//if ($cart_item_bottles == 0) $cart_item_bottles = 1;
	$cart_bottle_quantity = $cart_bottle_quantity + $cartitem["quantity"]*$cart_item_bottles;
      }
    }
  }
  return($cart_bottle_quantity);
}

function cartShippingBottleQuantity($cart) {
  $cart_bottle_quantity = 0;
  if ($cart) {
    foreach($cart as $key => $cartitem) {
      if ($cartitem["deleted"] == '0') {
	$cart_item_bottles = $cartitem["bottles"];
	if ($cart_item_bottles == 7) $cart_item_bottles = 0; // need to change this
	if (!$cartitem["shipping"]) $cart_item_bottles = 0; 
	$cart_bottle_quantity = $cart_bottle_quantity + $cartitem["quantity"]*$cart_item_bottles;
      }
    }
  }
  return($cart_bottle_quantity);
}

function hasFreeShippingSample($cart) {
  if ($cart) {
    foreach($cart as $key => $cartitem) {
      if ($cartitem["deleted"] == '0') {
	$cart_item_bottles = $cartitem["bottles"];
	$cart_item_shipping = $cartitem["shipping"];
	if (($cartitem["bottles"] > 1) && ($cartitem["shipping"] == 0)) {
	  return(TRUE);
	}
      }
    }
  }
  return(FALSE);
}

function greetingCardCost($cart) {
  if (hasFreeShippingSample($cart))
    return(0);
  else
    return(fixCurrency(BDW_CARD_COST));
}


function getUserRecipient($userId) {
  global $mydb;
  $sql = "SELECT rec_id, user_id, user_default, default_billing, default_shipping, default_shipping_method, first_name, last_name, address1, address2, city, state, zipcode, email, phone FROM recipient WHERE user_id = '".$userId."' AND user_default = '1' ";
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  return($row);
}

function isTradeCALoggedin() {
  return(isRoleLoggedin(BDW_USER_TRADE_CA));
}

function isTradeNYLoggedin() {
  return(isRoleLoggedin(BDW_USER_TRADE_NY));
}

function isDistributorLoggedin() {
  return(isRoleLoggedin(BDW_USER_DISTRIBUTOR));
}

function isAdminLoggedin() {
  return(isRoleLoggedin(BDW_USER_ADMIN));
}

function isRoleLoggedin($role) {
  return(isRoleUser($_SESSION["userCakeUser"], $role));
}

function isRoleUser($user, $role) {
  if (($user) && isset($user["role"]) && ($user["role"] == $role))
    return(TRUE);
  return(FALSE);
}

function Iswineclubmemberloggedin() {
  $user = NULL;
  if (isset($_SESSION["userCakeUser"]))
    $user = $_SESSION["userCakeUser"];
  if ($user) {
    return(isWineClubMember($user));
  }
  return(FALSE);
}

function isWineClubMember($user) {
  if ($user) {
    $userId = $user["user_id"];
    return(isWineClubMemberId($userId));
  }
  return(FALSE);
}

function isWineClubMemberId($userId) {
  if ($userId > 0) {
    $userDetails = fetchUserDetails(NULL, NULL, $userId);
    if (($userDetails) && ($userDetails["subscription_id"] > 0))
      return(TRUE);
  }
  return(FALSE);
}

function getActualVintagePrice($vintage) {
  if ((isWineClubMemberLoggedIn()) && ($vintage["wineclub_price"] > 0))
    return(fixCurrency($vintage["wineclub_price"]));
  else 
    return(fixCurrency($vintage["price"]));
}

function getActualVintageSale($vintage) {
  if ((isWineClubMemberLoggedIn()) && ($vintage["wineclub_sale"] > 0))
    return(fixCurrency($vintage["wineclub_sale"]));
  else 
    return(fixCurrency($vintage["sale"]));
}

function getDefaultOrder($recipient, $shipping_method) {
  $status = '5'; // new order
  $order = array('o_id' => 0,
		 'status' => $status,
		 'deleted' => '0',
		 'first_name' => $recipient["first_name"],
		 'last_name' => $recipient["last_name"],
		 'address1' => $recipient["address1"],
		 'address2' => $recipient["address2"],
		 'city' => $recipient["city"],
		 'state' => $recipient["state"],
		 'zipcode' => $recipient["zipcode"],
		 'email' => $recipient["email"],
		 'phone' => $recipient["phone"],
		 'shipping_method' => $shipping_method,
		 );
  return($order);
}

function getUserOrder($recipient) {  //deprecated
  $order = NULL;
  $order["ship_first_name"] = $recipient["first_name"];
  $order["ship_last_name"] = $recipient["last_name"];
  //$_SESSION["ship_last_name"] = $ship_last_name;
  //$_SESSION["ship_address1"] = $ship_address1;
  //$_SESSION["ship_address2"] = $ship_address2;
  //$_SESSION["ship_city"] = $ship_city;
  //$_SESSION["ship_state"] = $ship_state;
  //$_SESSION["ship_zipcode"] = $ship_zipcode;
  //$_SESSION["ship_email"] = $ship_email;
  //$_SESSION["ship_phone"] = $ship_phone;
  //$_SESSION["ship_method"] = $ship_method;
  return($order);
}

function sameRecipients($recipient1, $recipient2) {  
  if (trim(strtolower($recipient1["email"])) == trim(strtolower($recipient2["email"])))
    return(TRUE);
  return(FALSE);
}

//$bad_emails = array('fica','sates');
function blockOrder($email, $first_name, $last_name, $city, $ship_city, $bad_emails) {
  $clean_email = trim(strtolower($email));
  if (strpos($clean_email, 'juno.com') !== FALSE) {
    $head_email = str_replace("@juno.com", "", $clean_email);
    if (in_array($head_email, $bad_emails)) return(TRUE);
    $clean_first_name = trim(strtolower($first_name));
    $clean_last_name = trim(strtolower($last_name));
    if ((strpos($head_email, $clean_first_name) === FALSE) &&
	(strpos($head_email, $clean_last_name) === FALSE) &&
	($city != $ship_city)) 
      return(TRUE);
  }
  return(FALSE);
}

$spam_stuff_array = array('joelazzaro','spamavert','parelay','conventionoftheleft','reopenetic');
function blockNewsletterSignUp($email) {
  if (strpos($contactemail, 'parelay') !== FALSE) {
    return(TRUE);
  }
  $clean_email = trim(strtolower($email));
  foreach($spam_stuff_array as $spam_stuff) {
    if (strpos($clean_email, $spam_stuff) !== FALSE) {
      return(TRUE);
    }
  }
  return(FALSE);
}

function paginator($total,$dividend,$place,$page) {
  $divid = ceil($total / $dividend);
  $start = ($page/$dividend) - 5;
  $top = ($page/$dividend) + 6;
  if ($top > $divid) { $top = $divid; }
  if ($start < '0') { $start = '0'; }
  $lower = $start * $dividend;
  if ($page > '0') {
    $sub_menu .= "<a href=\"".$place."".($page-$dividend)."/\">&lt;&lt;</a>&nbsp;&nbsp;&nbsp;&nbsp;";
  }
  for($i=$start;$i<($top);$i++) {
    if ($lower == $page) {
      $sub_menu .= "<a href=\"".$place."".$lower."/\">(".($i+1).")</a>&nbsp;&nbsp;";
    } 
    else {
      $sub_menu .= "<a href=\"".$place."".$lower."/\">".($i+1)."</a>&nbsp;&nbsp;";
    }
    $lower = $lower + $dividend;
  }
  if (($page + $dividend) < $total) {
    $sub_menu .= "&nbsp;&nbsp;<a href=\"".$place."".($page+$dividend)."/\">&gt;&gt;</a>";
  }
  return $sub_menu;
}
	
	
function randomArray($array, $length) {
  $total = count($array);
  if ($total > 0) {
    $max = min($total, $length);
    $keys = array_keys($array);
    shuffle($keys);
    $random = array();
    for ($i = 0; $i < $max; $i++) {
      $random[$i] = $array[$keys[$i]];
    }
    return($random);
  }
  return($array);
}

function tagged($data_id) {
	
		global $mydb;

		$sql = "SELECT * FROM tag WHERE data_id = '".$data_id."' ORDER BY words";
		$result = $mydb->runSql($sql);
		
		$counter1 = 0;
		
		while($row = $mydb->getAssoc($result)) {
		
			$build[$counter1++] = array('words' => $row["words"]);
			
		}
		
		return $build;
		
	}
	
	
	function commential($data_id) {
	
		global $mydb;

		$sql = "SELECT * FROM comment AS c, commentor AS cm WHERE c.data_id = '".$data_id."' AND cm.deleted = '0' AND cm.approved = '1'";
		$sql .= " AND c.deleted = '0' AND c.cm_id = cm.cm_id ORDER BY c.posted";
		$result = $mydb->runSql($sql);
		
		$counter1 = 0;
		
		while($row = $mydb->getAssoc($result)) {
		
			$build[$counter1++] = array('name' => $row["name"],
										'website' => $row["website"],
										'blurb' => preg_replace('/\n/','<br />',$row["blurb"]),
										'posted' => date("m d Y",$row["posted"]-10800));
			
		}
		
		return $build;
		
	}
	
	
	
	function build($result) {
	
		global $mydb;
	
		$counter = 0;
	
		while($row = $mydb->getAssoc($result)){
		  
			$body = preg_replace('/\n/','<div class="spacing"></div>',$row["body"]);
			
			$build[$counter++] = array('title' => $row["title"],
								'web_name' => $row["web_name"],
								'data_id' => $row["data_id"],
								'img_art' => $row["img_art"],
								'img_caption' => $row["img_caption"],
								'u_id' => $row["u_id"],
								'bio' => $row["bio"],
								'posted' => date("m d Y",$row["posted"]),
								'body' => $body,
								'commented' => $row["commented"],
								'username' => $row["username"],
								'tags' => tagged($row["data_id"]),
								'comments' => commential($row["data_id"]));
		
		}
	
		return $build;
	
	}
	
	
	function prettyString($value,$parsings) {
	
		$splitted = explode('-',$value);
		$total = count($splitted);
		$counter = 0;
		if ($total > 1) {
		
			for($i=0;$i<$total;$i++) {
			
				if ($i != 0) { $temp .= "-"; }
				$temp .= trim(strtolower(str_replace($parsings, '', $splitted[$i])));
				
			}	
			$value = $temp;
			
		} else {
	
			$value = trim(strtolower(str_replace($parsings, '', $value)));
			
		}
		$value = str_replace('  ',' ',$value);
		return $value;
		
	}
	
	function unSlav($value) {
	  $value = str_replace('ă','a', $value);
	  $value = str_replace('č','c', $value);
	  $value = str_replace('ć','c', $value);
	  $value = str_replace('ž','z', $value);
	  $value = str_replace('đ','d', $value);
	  $value = str_replace('š','s', $value);
	  $value = str_replace('Č','C', $value);
	  $value = str_replace('Ć','C', $value);
	  $value = str_replace('Ž','Z', $value);
	  $value = str_replace('Đ','D', $value);
	  $value = str_replace('Š','S', $value);
	  return $value;
		
	}
	
	function unSpan($value) {
	
		$value = str_replace('ñ','n', $value);
		$value = str_replace('á','a', $value);
		$value = str_replace('é','e', $value);
		$value = str_replace('í','i', $value);
		$value = str_replace('ó','o', $value);
		$value = str_replace('ú','u', $value);
		$value = str_replace('ü','u', $value);
		$value = str_replace('Ñ','N', $value);
		$value = str_replace('Á','A', $value);
		$value = str_replace('É','E', $value);
		$value = str_replace('Í','I', $value);
		$value = str_replace('Ó','O', $value);
		$value = str_replace('Ú','U', $value);
		$value = str_replace('Ü','U', $value);
		
		return $value;
	
	}
	
	function unGerm($value) {
	
		$value = str_replace('ä','a', $value);
		$value = str_replace('ö','o', $value);
		$value = str_replace('ü','u', $value);
		$value = str_replace('ß','ss', $value);
		$value = str_replace('Ä','A', $value);
		$value = str_replace('Ö','O', $value);
		$value = str_replace('Ü','u', $value);
		
		return $value;
	
	}
	
function unHun($value) {
	
		$value = str_replace('ő','o', $value);
		$value = str_replace('ű','u', $value);
		$value = str_replace('Ő','O', $value);
		$value = str_replace('Ű','U', $value);
		return $value;
		
}
	
function make_month($finder_month) {
	
		$month = "<select name=\"month\">\n";
		for($i=1;$i<13;$i++) {
		
			$i == $finder_month ? $checked = " selected" : $checked = "";
			$month .= "<option value=\"".$i."\"".$checked.">".$i."</option>\n";
			
		}
		$month .= "</select>\n";
		return $month;
	
}
	
	
function make_day($finder_day) {
	
		$day = "<select name=\"day\">\n";
		for($i=1;$i<32;$i++) {
		
			$i == $finder_day ? $checked = " selected" : $checked = "";
			$day .= "<option value=\"".$i."\"".$checked.">".$i."</option>\n";
			
		}
		$day .= "</select>\n";
		return $day;
	
}
	
	
function make_year($finder_year) {
		
		global $years;
	
		$year = "<select name=\"year\">\n";
		for($i=1;$i<count($years);$i++) {
		
			$years[$i] == $finder_year ? $checked = " selected" : $checked = "";
			$year .= "<option value=\"".$years[$i]."\"".$checked.">".$years[$i]."</option>\n";
			
		}
		$year .= "</select>\n";
		return $year;
	
}
	
	
function make_rank($finder_rank,$total = '11') {
	
		$rank = "<select name=\"rank\">\n";
		for($i=1;$i<$total;$i++) {
		
			$i == $finder_rank ? $checked = " selected" : $checked = "";
			$rank .= "<option value=\"".$i."\"".$checked.">".$i."</option>\n";
			
		}
		$rank .= "</select>\n";
		return $rank;
	
}
	
function cleanUpImg() {
	
		global $img;
	
		$img->set_directory("img/temp");
		$img->delete_image($img->user_file_name);
		
}
	
function unQuote($input) {
	
		$output = preg_replace('/"/','\'',$input);
		
		return $output;
		
}

function stripTags($text) {
  return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
}
	
function quickbooksPadding($amount) {
  return(str_pad($amount, 5, "0", STR_PAD_LEFT));
}

function fixCurrency($amount) {
  $work = explode('.',$amount); // used to have split
  if ((isset ($work[1])) && (strlen($work[1]) == 2)) {
    $amount = $amount;
  } 
  elseif ((isset ($work[1])) && (strlen($work[1]) == 1)) {
    $amount = $amount.'0';
  } 
  else {
    $amount = $amount.'.00';
  }
  return $amount;
}

function getCountries() {
  global $mydb;
  $mysqli = $mydb->getConnection();	
  $sql = "SELECT country_code.c_id AS c_id, country_code.web_name AS web_name, country_code.full_name AS full_name FROM country_code, winery WHERE winery.c_id = country_code.c_id AND country_code.deleted = '0' AND winery.inactive = '0' AND winery.deleted = '0' GROUP BY country_code.c_id ORDER BY country_code.full_name";
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  $stmt->bind_result($s_cid, $s_webname, $s_fullname);
  while ($stmt->fetch()) {
    $countries[] = array('c_id' => $s_cid, 'web_name' => $s_webname, 'full_name' => $s_fullname);
  }
  $stmt->close();
  return($countries);
}

function getWineries() {
  global $mydb;
  $mysqli = $mydb->getConnection();
  $sql = "SELECT wy_id, c_id, web_name, name, sort_name, view_webshop,view_ca,view_ny,view_dist FROM winery WHERE inactive = '0' AND deleted = '0' ORDER BY sort_name"; 
  $stmt = $mysqli->prepare($sql);
  $stmt->execute();
  $stmt->bind_result($s_wyid, $s_cid, $s_webname, $s_name, $s_sortname, $s_viewwebshop, $s_viewca, $s_viewny, $s_viewdist);
  while ($stmt->fetch()) {
    if (canShow($s_viewwebshop, $s_viewca, $s_viewny, $s_viewdist)) {
      $wineries[] = array('wy_id' => $s_wyid, 'c_id' => $s_cid, 'web_name' => $s_webname, 'sort_name' => $s_sortname, 'name' => $s_name);
    }
  }
  $stmt->close();
  return($wineries);
}
	
function commentNotify($data_id,$email) {
	
		global $mydb;
		
		$sql = "SELECT * FROM comment_notify AS c, article AS a WHERE c.data_id = '".$data_id."' AND c.email != '".$email."' AND a.data_id = c.data_id";
		$result = $mydb->runSql($sql);
		
		while($row = $mydb->getAssoc($result)) {
		
			$to = $row["email"];
			$reply = "From: \"Blue Danube Wine\" <info@bluedanubewine.com>";
			$subject = "New Article Comment";
			$message = " You have received this email, because you opted in to receive notifications when you posted a comment to www.bluedanubewine.com.";
			$message .= "  This is to let you know that there is a new comment to the article:\n\n'".$row["title"]."'";
			$message .= "\n\nIf you prefer not to receive these updates, click here - https://www.bluedanubewine.com/unsubscribe/comments/".$row["notify_id"]."/".$data_id."/";
			mail($to, $subject, $message, $reply);
			
		}
		
	}

function prettySize($size) {
  if ($size == 1000)
    return ("1L");
  else if ($size > 1000) {
    $liter_size = number_format($size/1000,1);
    return ($liter_size."L");
  }
  return ($size."ml");
}

function prettyCartSize($size) {
  $pretty_string = "";
  if (($size > 0) && ($size != 750)) {
    $pretty_string .= " (".prettySize($size).")";
  }
  return($pretty_string);
}

function prettyYearSize($year, $size) {
  $pretty_string = "";
  if ($year) {
    $pretty_string .= $year;
  }
  if (($size > 0) && ($size != 750)) {
    $pretty_string .= " (".prettySize($size).")";
  }
  return($pretty_string);
}

function fullCartName($winery_name, $wine_name, $size) {
  $full_name = $wine_name.prettyCartSize($size);
  if (($winery_name) && ($winery_name != "Specials")) {
    $full_name = $winery_name." ".$full_name;
  }
  return($full_name);
}

function fullMobileCartName($winery_name, $wine_name, $year, $size) {
  $full_name = fullCartName($winery_name, $wine_name, $size);
  if (($year) && ($year > 0)) {
    $full_name = $year." ".$full_name;
  }
  return($full_name);
}

function prettyItemType($type) {
  if ($type == BDW_LINE_ITEM_WINE)
    return("Wine");
  else if ($type == BDW_LINE_ITEM_BOOK)
    return("Book");
  return("");
}

function updateSearchText($vint_id) {
  global $mydb;
  $sql = "SELECT *, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vintage, t.name AS type_name, c.web_name AS countryweb_name ";
  $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
  $sql .= " WHERE v.vint_id = '".$vint_id."' AND v.wy_id = wy.wy_id AND wy.c_id = c.c_id";
  $sql .= " AND v.type_id = t.type_id";
  $result = $mydb->runSql($sql);
  while($row = $mydb->getAssoc($result)) {
    $winery_name = $row["winery"];
    if ($winery_name)
      $winery_name = removeAccent($winery_name);
    $vintage_name = $row["vintage"];
    if ($vintage_name)
      $vintage_name = removeAccent($vintage_name);
    $appellation = $row["appellation"];
    if ($appellation)
      $appellation = removeAccent($appellation);
    $search_text = $row["year"] . " " . $winery_name .  " " . $row["wyweb_name"] . " " . $appellation . " " . $row["type_name"] . " " . $row["countryweb_name"] . " " . $row["full_name"] .  " " . $vintage_name;
    $sql2 = "SELECT varietal.name AS vname, varietal.friendly FROM var_vint, varietal WHERE var_vint.vint_id ='".$vint_id."' AND varietal.v_id = var_vint.v_id";
    $result2 = $mydb->runSql($sql2);
    $counter = 1;
    while($row2 = $mydb->getAssoc($result2)) {
      $varietal_friendly = str_replace("_", " ", $row2["friendly"]);
      $search_text = $search_text . " " . $row2["vname"] . " " . $varietal_friendly;
    }
    $params = " WHERE vint_id = '".$row["vint_id"]."'";
    $values = array("search_text" => $search_text);
    $mydb->update("vintage",$values,$params);
  }
}	

function updateAllSearchText() {
  global $mydb;
  $sql = "SELECT *, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vintage, t.name AS type_name, c.web_name AS countryweb_name ";
  $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
  $sql .= " WHERE v.wy_id = wy.wy_id AND wy.c_id = c.c_id";
  $sql .= " AND v.type_id = t.type_id";
  $result = $mydb->runSql($sql);
  while($row = $mydb->getAssoc($result)) {
    $winery_name = $row["winery"];
    if ($winery_name)
      $winery_name = removeAccent($winery_name);
    $vintage_name = $row["vintage"];
    if ($vintage_name)
      $vintage_name = removeAccent($vintage_name);
    $appellation = $row["appellation"];
    if ($appellation)
      $appellation = removeAccent($appellation);
    $search_text = $row["year"] . " " . $winery_name .  " " . $row["wyweb_name"] . " " . $appellation . " " . $row["type_name"] . " " . $row["countryweb_name"] . " " . $row["full_name"] .  " " . $vintage_name;
    $sql2 = "SELECT varietal.name AS vname, varietal.friendly FROM var_vint, varietal WHERE var_vint.vint_id = '".$row["vint_id"]."' AND varietal.v_id = var_vint.v_id";
    $result2 = $mydb->runSql($sql2);
    $counter = 1;
    while($row2 = $mydb->getAssoc($result2)) {
      $varietal_friendly = str_replace("_", " ", $row2["friendly"]);
      $search_text = $search_text . " " . $row2["vname"] . " " . $varietal_friendly;
    }
    $params = " WHERE vint_id = '".$row["vint_id"]."'";
    $values = array("search_text" => $search_text);
    $mydb->update("vintage",$values,$params);
  }
}	

function isTagged($blog_category, $tag) {
  if (stripos($blog_category, $tag) !== FALSE) {
    return(TRUE);
  }
  return(FALSE);
}

function isNews($blog_category) {
  return(isTagged($blog_category, 'News'));
}

function isSpotlight($blog_category) {
  return(isTagged($blog_category, '#WineWednesday Spotlight'));
}

function isTravel($blog_category) {
  if ((isTagged($blog_category, 'Travel')) || (isTagged($blog_category, 'Wine Tours')))
    return(TRUE);
  return(FALSE);
}

function getCountryCategory($blog_category) {
  if (strpos($blog_category, 'Croatia') !== FALSE)
    return('Croatia');
  else if (strpos($blog_category, 'Hungary') !== FALSE)
    return('Hungary');
  else if (strpos($blog_category, 'Slovenia') !== FALSE)
    return('Slovenia');
  else if (strpos($blog_category, 'Georgia') !== FALSE)
    return('Georgia');
  else if (strpos($blog_category, 'Austria') !== FALSE)
    return('Austria');
  else if (strpos($blog_category, 'Bosnia') !== FALSE)
    return('Bosnia Herzegovina');
  else if (strpos($blog_category, 'Herzegovina') !== FALSE)
    return('Bosnia Herzegovina');
  else if (strpos($blog_category, 'Montenegro') !== FALSE)
    return('Montenegro');
  else if (strpos($blog_category, 'Serbia') !== FALSE)
    return('Serbia');
  else if (strpos($blog_category, 'Turkey') !== FALSE)
    return('Turkey');
  return('News');
}

function getMainCategory($blog_category) {
  if (isSpotlight($blog_category))
    return('Spotlight');
  else if (isNews($blog_category))
    return('News');
  else if (isTravel($blog_category))
    return('Travel');
  return(getCountryCategory($blog_category));
}


function getBlogItems($maxitems) {
    return(getSimplePieBlogItems());
}

function getRelatedBlogItems($maxitems, $name, $webname) {
    return(getSimplePieRelatedBlogItems($name, $webname));
}

function getSimplePieFeedItems() { 
    $feed = new SimplePie();
    // Set the feed to process.
    $feed->set_feed_url(BDW_FEED);
    // Run SimplePie.
    $feed->init();
    // This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
    $feed->handle_content_type();
    $items = $feed->get_items();
    return($items);
}

function getImagePath($item) { 
    $content = $item->get_content(); 
    $regular_expression = '~src="[^"]*"~';
    preg_match_all($regular_expression, $content, $allimages);
    $imagecount = count($allimages[0]);
    if ($imagecount > 0) {
        $str1=$allimages[0][0];
        $str1=trim($str1);
        $len=strlen($str1);
        $imgpath = substr($str1,5,$len);
        $imgpath = str_replace('"', '', $imgpath);
    }
    return($imgpath);
}

function getCleanCategoriesString($item) { 
    $categories = $item->get_categories();
    $categories_string = "";
    if (is_array($categories)) {
        foreach($categories as $category) {
            $categories_string .= $category->get_label()." ";
        }
    }
    return(removeAccent($categories_string));
}

function getSimplePieBlogItems() { 
    $items = getSimplePieFeedItems();
    foreach ($items as $item) {
        $cleaned_categories = getCleanCategoriesString($item);
        $feeditems[] = array(
            'link' => $item->get_permalink(),
            'title' => $item->get_title(),
            'is_news' => isNews($cleaned_categories),
            'is_spotlight' => isSpotlight($cleaned_categories),
            'is_travel' => isTravel($cleaned_categories),
            'country_category' => getCountryCategory($cleaned_categories),
            'category' => getMainCategory($cleaned_categories),
            'content' => $item->get_description(),
            'imagepath' => getImagePath($item),
            'description' => $item->get_description());
    }
    return($feeditems);
}

function getSimplePieRelatedBlogItems($name, $webname) {
    $clean_name = removeAccent($name);
    $items = getSimplePieFeedItems();
    foreach ($items as $item) {
      $cleaned_categories = getCleanCategoriesString($item);
      if ((isTagged($cleaned_categories, $clean_name)) || (isTagged($cleaned_categories, $webname))) {
          $feeditems[] = array(
                  'link' => $item->get_permalink(),
                  'title' => $item->get_title(),
                  'content' => $item->get_description(),
                  'imagepath' => getImagePath($item),
                  'description' => $item->get_description());
      }
    }
    return($feeditems);
}


function sendWelcomeEmail($customer_name, $customer_email, $user_id, $debug) {
  global $mydb;
  //$isWineClubMember = isWineClubMemberId($user_id);
  $to = $cutomer_email;
  $toc = "catherine@bluedanubewine.com";
  $header = 'From: Webshop@bluedanubewine.com';
  $header .= "\r\n".'Bcc: cgranger@gmail.com' . "\r\n";
  $subject = "Thank you for your order and welcome!";
  $message = "Dear ".$customer_name.",\n\nCongratulations on your first Blue Danube Wine Co. order and welcome! You are now part of a thriving wine lover community. We hope you will enjoy our wines and we are looking forward to hearing from you again.\n\nShould you have any questions or need personalized services, don't hesitate to contact us at webshop@bluedanubewine.com or 650-941-4699.";
  $message .="\n\nFollow us and share your experience on \n Facebook: https://www.facebook.com/BlueDanubeWine \n Twitter: https://twitter.com/BlueDanubeWine \n Instagram: https://www.instagram.com/bluedanubewine/ ";
  $message .="\n\nThank you again,\n\nThe Blue Danube Wine Co. Team";
  $total_orders = 0;
  $sql = "SELECT store_order.o_id FROM store_order, recipient WHERE store_order.rec_id = recipient.rec_id AND recipient.email like  '".$customer_email."' AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8' ";
  $result = $mydb->runSql($sql);
  if ($result) {
    $total_orders = $mydb->getCount($result);
  }
  //if ($debug) {    $total_orders = 1;  }
  if ($total_orders == 1) {
    if (!$debug) {
      mail($to, $subject, $message, $header);
    }
    mail($toc, $subject, $message, $header);
  }
}

function sendWelcomeMail($customer_name, $customer_email) { // depreciated
  global $mydb;
  $to = $cutomer_email;
  $toc = "catherine@bluedanubewine.com";
  $header = 'From: Webshop@bluedanubewine.com';
  $subject = "Thank you for your order and welcome!";
  $message = "Dear ".$customer_name.",\n\nCongratulations on your first Blue Danube Wine Co. order and welcome! You are now part of a thriving wine lover community. We hope you will enjoy our wines and we are looking forward to hearing from you again.\n\nShould you have any questions or need personalized services, don't hesitate to contact me at webshop@bluedanubewine.com or 707-731-1376.";
  $message .="\n\nFollow us and share your experience on \n Facebook: https://www.facebook.com/BlueDanubeWine \n Twitter: https://twitter.com/BlueDanubeWine \n Instagram: https://www.instagram.com/bluedanubewine/ ";
  $message .="\n\nThank you again,\n\nGisele and the Blue Danube Wine Co. Team";
  $total_orders = 0;
  $sql = "SELECT store_order.o_id FROM store_order, recipient WHERE store_order.rec_id = recipient.rec_id AND recipient.email like  '".$customer_email."' AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8' ";
  $result = $mydb->runSql($sql);
  if ($result) {
    $total_orders = $mydb->getCount($result);
  }
  if ($total_orders == 1) {
    //mail($to, $subject, $message, $header);
    mail($toc, $subject, $message, $header);
  }
}

function getAuthorizeConfigFile() {
    $config_dir = dirname(__FILE__).'/../../';
    return($config_dir.'authorizeconfig.ini');
}

function getAuthorizeNetLogin() { 
    $ini_file = getAuthorizeConfigFile();
    if ($config = parse_ini_file($ini_file)) {
        return($config["login"]);
    }
    return(0);
}

function getAuthorizeNetKey() { 
    $ini_file = getAuthorizeConfigFile();
    if ($config = parse_ini_file($ini_file)) {
        return($config["key"]);
    }
    return(0);
}


function getSimplePieBlogItems2() { 
    $regular_expression = '~src="[^"]*"~';
    $regular_expression2 =  '#<(\w+)\s[^>]*(class|id)\s*=\s*[\'"](' . 'wp-caption aligncenter' . 
        ')[\'"][^>]*>.*</\\1>#isU'; 
    $regular_expression3 =  '#<(\w+)\s[^>]*(class|id)\s*=\s*[\'"](' . 'wp-caption alignright' . 
        ')[\'"][^>]*>.*</\\1>#isU'; 
    $feedString = "";
    $items = getSimplePieFeedItems();
    foreach ($items as $item) {
        $content = $item->get_content(); 
        $encoded = $content;
        $encoded2 = $content;
        preg_match_all($regular_expression, $content, $allimages);
        $imagecount = count($allimages[0]);
        if ($imagecount > 0) {
            $str1=$allimages[0][0];
            $str1=trim($str1);
            $len=strlen($str1);
            $imgpath = substr($str1,5,$len);
            $imgpath = str_replace('"', '', $imgpath);
            $imgpath = getImagePath($item);
            //if (strpos($imgpath, 'http://') !== FALSE)  $imgpath=substr_replace($imgpath,"https",0,4);
            $encoded2 = preg_replace($regular_expression2, '', $encoded); // center caption
            $cleaned_content = strip_tags($encoded2); // center caption
            $cleaned_content = removeAccent($cleaned_content);
            $cleaned_content = trim($cleaned_content);
            $cleaned_categories = getCleanCategoriesString($item);
            $is_news = isNews($cleaned_categories);
            $is_spotlight = isSpotlight($cleaned_categories);
            $is_travel = isTravel($cleaned_categories);
            $country_category = getCountryCategory($cleaned_categories);
            $main_category = getMainCategory($cleaned_categories);
            $feeditems[] = array('link' => $item->get_permalink(),
                                 'title' => $item->get_title(),
                                 'is_news' => $is_news,
                                 'is_spotlight' => $is_spotlight,
                                 'is_travel' => $is_travel,
                                 'country_category' => $country_category,
                                 'category' => $main_category,
                                 'content' => $cleaned_content,
                                 'imagepath' => $imgpath,
                                 'description' => $item->get_description());
        }
    }
    return($feeditems);
}


function getSimplePieRelatedBlogItems2($name, $webname) {
    $clean_name = removeAccent($name);
    $items = getSimplePieFeedItems();
    $regular_expression = '~src="[^"]*"~';
    $regular_expression2 =  '#<(\w+)\s[^>]*(class|id)\s*=\s*[\'"](' . 'wp-caption aligncenter' . 
      ')[\'"][^>]*>.*</\\1>#isU'; 
    foreach ($items as $item) {
      $content = $item->get_content(); 
      $encoded = $content;
      $encoded2 = $content;
      preg_match_all($regular_expression, $content, $allimages);
      $imagecount = count($allimages[0]);
      if ($imagecount > 0) {
          $str1=$allimages[0][0];
          $str1=trim($str1);
          $len=strlen($str1);
          $imgpath=substr_replace(substr($str1,5,$len),"",-1);
          $encoded2 = preg_replace($regular_expression2, '', $encoded); // center caption
          $cleaned_content = strip_tags($encoded2); // center caption
          $cleaned_content = removeAccent($cleaned_content);
          $cleaned_content = trim($cleaned_content);
          $cleaned_categories = getCleanCategoriesString($item);
          if ((isTagged($cleaned_categories, $clean_name)) || (isTagged($cleaned_categories, $webname))) {
              $feeditems[] = array('link' => $item->get_permalink(),
                                   'title' => $item->get_title(),
                                   'content' => $cleaned_content,
                                   'imagepath' => $imgpath,
                                   'description' => $item->get_description());
          }
      }
  }
  return($feeditems);
}

?>