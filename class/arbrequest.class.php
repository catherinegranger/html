<?php
/**
 * Easily interact with the Authorize.Net ARB XML API.
 */

$config_dir = dirname(__FILE__).'/../../';
$config_file = $config_dir.'authorizeconfig.ini';
$config = parse_ini_file($config_file);
define("AUTHORIZENET_API_LOGIN_ID", $config["login"]);
define("AUTHORIZENET_TRANSACTION_KEY",$config["key"]);

$dev_config_file = $config_dir.'authorizesandboxconfig.ini';
$dev_config = parse_ini_file($dev_config_file);
define("DEV_AUTHORIZENET_API_LOGIN_ID", $dev_config["login"]);
define("DEV_AUTHORIZENET_TRANSACTION_KEY",$dev_config["key"]);


$log_dir = dirname(__FILE__)."/..";
define("AUTHORIZENET_LOG_FILE",  $log_dir."/authorize-net.log");


// Append to log file
date_default_timezone_set('UTC'); //necessary for the following date to set timezone



class ARBRequest {
  const LIVE_URL = "https://api.authorize.net/xml/v1/request.api";
  const SANDBOX_URL = "https://apitest.authorize.net/xml/v1/request.api";

  private $_api_login;
  private $_transaction_key;
  private $_sandbox = FALSE;
  private $_post_string; 
  private $_log_file;
  private $_log_info;
  private $_request_type;
  private $_request_payload;
    
  /**
   * Constructor.
   *
   * @param string $api_login_id       The Merchant's API Login ID.
   * @param string $transaction_key The Merchant's Transaction Key.
   */
  public function __construct($api_login_id = false, $transaction_key = false) {
    $this->_api_login = AUTHORIZENET_API_LOGIN_ID;
    $this->_transaction_key = AUTHORIZENET_TRANSACTION_KEY;
    //$this->_api_login = DEV_AUTHORIZENET_API_LOGIN_ID;
    //$this->_transaction_key = DEV_AUTHORIZENET_TRANSACTION_KEY;

    $this->_log_file = AUTHORIZENET_LOG_FILE;
    $this->_logInfo(sprintf(" Logging Started: %s\n", date(DATE_RFC2822)));
  }

  /**
   * Optional. Used if the merchant wants to set a reference ID.
   *
   * @param string $refId
   */
  public function setRefId($refId) {
    $this->_request_payload = ($refId ? "<refId>$refId</refId>" : "");
  }
    
  protected function _sendRequest() {
    $this->_setPostString();
    $post_url = $this->_getPostUrl();
    $curl_request = curl_init($post_url);
    curl_setopt($curl_request, CURLOPT_POSTFIELDS, $this->_post_string);
    curl_setopt($curl_request, CURLOPT_HEADER, 0);
    curl_setopt($curl_request, CURLOPT_TIMEOUT, 45);
    curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_request, CURLOPT_SSL_VERIFYHOST, 2);
    
    curl_setopt($curl_request, CURLOPT_CAINFO, dirname(dirname(__FILE__)) . '/ssl/cert.pem');
    if (preg_match('/xml/',$post_url)) {
      curl_setopt($curl_request, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
    }
    $response = curl_exec($curl_request);
    if ($curl_error = curl_error($curl_request)) {
      $this->_logInfo("----CURL ERROR----\n$curl_error\n\n");
    }
    // Do not log requests that could contain CC info.
    //$this->_logInfo("----Request----\n{$this->_post_string}\n");
    $this->_logInfo("----Response----\n$response\n\n");
    curl_close($curl_request);
    return $this->_handleResponse($response);
  }

  /**
   * Create an ARB subscription
   *
   * @param ARBSubscription $subscription
   *
   * @return ARBResponse
   */
  public function createSubscription(ARBSubscription $subscription) {
    $this->_request_type = "CreateSubscriptionRequest";
    $this->_request_payload .= $subscription->getXml();
    return $this->_sendRequest();
  }
    
  /**
   * Update an ARB subscription
   *
   * @param int $subscriptionId
   * @param ARBSubscription $subscription
   *
   * @return ARBResponse
   */
  public function updateSubscription($subscriptionId, ARBSubscription $subscription) {
    $this->_request_type = "UpdateSubscriptionRequest";
    $this->_request_payload .= "<subscriptionId>$subscriptionId</subscriptionId>";
    $this->_request_payload .= $subscription->getXml();
    return $this->_sendRequest();
  }

  /**
   * Get status of a subscription
   *
   * @param int $subscriptionId
   *
   * @return ARBResponse
   */
  public function getSubscriptionStatus($subscriptionId) {
    $this->_request_type = "GetSubscriptionStatusRequest";
    $this->_request_payload .= "<subscriptionId>$subscriptionId</subscriptionId>";
    return $this->_sendRequest();
  }

  /**
   * Cancel a subscription
   *
   * @param int $subscriptionId
   *
   * @return ARBResponse
   */
  public function cancelSubscription($subscriptionId) {
    $this->_request_type = "CancelSubscriptionRequest";
    $this->_request_payload .= "<subscriptionId>$subscriptionId</subscriptionId>";
    return $this->_sendRequest();
  }
    
  /**
   * Get SubscriptionList Request
   *
   * @param AuthorizeNet_Subscription $subscriptionList
   *
   * @return AuthorizeNetARB_Response
   */
    public function getSubscriptionList(ARBGetSubscriptionList $subscriptionList) {
      $this->_request_type = "GetSubscriptionListRequest";
      $this->_request_payload .= $subscriptionList->getXml();
      return $this->_sendRequest();
    }

    /**
     * Handle response
     *
     * @param string $response
     * 
     * @return ARBResponse
     */
    protected function _handleResponse($response) {
      return new ARBResponse($response);
    }
    
    /**
     * @return string
     */
    protected function _getPostUrl() {
      return ($this->_sandbox ? self::SANDBOX_URL : self::LIVE_URL);
    }

    /**
     * @return string
     */
    public function getPostString() {
      return ($this->_post_string);
    }

    /**
     * @return string
     */
    public function getLogInfo() {
      return ($this->_log_info);
    }
    
    private function _logInfo($info) {
      if ($this->_log_file) {
	file_put_contents($this->_log_file, $info, FILE_APPEND);
      }
      $this->_log_info .= $info;
    }

    /**
     * Prepare the XML document for posting.
     */
    private function _setPostString() {
      $this->_post_string =<<<XML
<?xml version="1.0" encoding="utf-8"?>
<ARB{$this->_request_type} xmlns= "AnetApi/xml/v1/schema/AnetApiSchema.xsd">
    <merchantAuthentication>
        <name>{$this->_api_login}</name>
        <transactionKey>{$this->_transaction_key}</transactionKey>
    </merchantAuthentication>
    {$this->_request_payload}
</ARB{$this->_request_type}>
XML;
    }
}







?>