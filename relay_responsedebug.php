<?php 
require_once 'class/databasei.class.php'; 
$mydb = new Database();
require_once 'anet_php_sdk/AuthorizeNet.php'; 

$config_file = dirname(__FILE__).'/../'.'authorizeconfig.ini';
$config = parse_ini_file($config_file);
define("AUTHORIZENET_API_LOGIN_ID", $config["login"]);
define("AUTHORIZENET_MD5_SETTING",$config["md5"]);

$debug_flag = TRUE;
$redirect_url = "https://www.bluedanubewine.com/order_receipt"; 
if ($debug_flag == TRUE) {
  $redirect_url = "https://www.bluedanubewine.com/order_receiptdebug"; 
}

$response = new AuthorizeNetSIM(AUTHORIZENET_API_LOGIN_ID, AUTHORIZENET_MD5_SETTING);

if ($response->isAuthorizeNet()) {
  $order_number = str_replace("W","",$response->invoice_num);
  if ($debug_flag == TRUE) {
    $sql = "SELECT placed from store_order where o_id = '".$order_number."' ";
  }
  else {
    $sql = "SELECT placed from store_order where o_id = '".$order_number."' ";
  }
  $result = $mydb->runSql($sql);
  if (($result) && ($row = $mydb->getAssoc($result))) {
    $placed = $row["placed"];
  }
  if (($response->approved) || ($response->held)) {
    $status = '2';
    $values = array("response_code" => $response->response_code,
		    "response_reason_text" => $response->response_reason_text,
		    "authorization_code" => $response->authorization_code,
		    "transaction_id" => $response->transaction_id,
		    "payment_method" => $response->card_type,
		    "account_number" => $response->account_number,
		    "status" => $status
		    );
  }
  else {
    $status = '7';
    $values = array("response_code" => $response->response_code,
		    "response_reason_text" => $response->response_reason_text,
		    "status" => $status
		    );
  }
  if ($debug_flag == TRUE) {
    $mydb->update("store_order", $values, $params = " WHERE o_id = '".$order_number."'");
  }
  else {
    $mydb->update("store_order", $values, $params = " WHERE o_id = '".$order_number."'");
  }
  $redirect_url .= '/' . $response->response_code . '/' . $placed  . '/' . $order_number . '/' ;
  echo AuthorizeNetDPM::getRelayResponseSnippet($redirect_url);
  //echo $redirect_url;
}
else {
  echo 'Response not authenticated'; 
}

?>