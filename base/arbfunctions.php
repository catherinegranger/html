<?PHP

require_once $root_dir.'/class/arbsubscription.class.php';
require_once $root_dir.'/class/arbresponse.class.php';
require_once $root_dir.'/class/arbrequest.class.php';

function createUserSubscription($recipient) {
  $subscription = new ARBSubscription;
  $subscription->name = "Short subscription";
  $subscription->intervalLength = "1";
  $subscription->intervalUnit = "months";
  $subscription->startDate = "2020-03-12";
  $subscription->totalOccurrences = "14";
  $subscription->amount = rand(1,100);
  $subscription->creditCardCardNumber = "6011000000000012";
  $subscription->creditCardExpirationDate = "2018-10";
  $subscription->creditCardCardCode = "123";
  $subscription->billToFirstName = $recipient["first_name"];
  $subscription->billToLastName = $recipient["last_name"];
  $refId = "ref" . time();
  $create_request = new ARBRequest;
  $create_request->setRefId($refId);
  $create_response = $create_request->createSubscription($subscription);
  return($create_response);
}

/**
 * test ARB Methods
 */


function testCreateSubscription() {
  // Set the subscription fields.
  $subscription = new ARBSubscription;
  $subscription->name = "Short subscription";
  $subscription->intervalLength = "1";
  $subscription->intervalUnit = "months";
  $subscription->startDate = "2020-03-12";
  $subscription->totalOccurrences = "14";
  $subscription->amount = rand(1,100);
  $subscription->creditCardCardNumber = "6011000000000012";
  $subscription->creditCardExpirationDate = "2018-10";
  $subscription->creditCardCardCode = "123";
  $subscription->billToFirstName = "john";
  $subscription->billToLastName = "doe";
  // Create the subscription.
  $create_request = new ARBRequest;
  $create_response = $create_request->createSubscription($subscription);
  $create_subscription_success = $create_response->isOk();
  $subscription_id = $create_response->getSubscriptionId();
  return($subscription_id);
}

function testGetSubscriptionStatus($subscription_id) {
  $status_request = new ARBRequest;
  $status_response = $status_request->getSubscriptionStatus($subscription_id);
  $subscription_status = $status_response->getSubscriptionStatus();
  return($subscription_status);
}

function testUpdateSubscription($subscription_id) {
  $updated_subscription_info = new ARBSubscription;
  $updated_subscription_info->billToFirstName = "jane";
  $updated_subscription_info->billToLastName = "smith";
  $updated_subscription_info->creditCardCardNumber = "6011000000000012";
  $updated_subscription_info->creditCardExpirationDate = "2019-10";
  $updated_subscription_info->creditCardCardCode = "423";
  $update_request = new ARBRequest;
  $update_response = $update_request->updateSubscription($subscription_id, $updated_subscription_info);
  $update_subscription_success = $update_response->isOk();
  return($update_subscription_success);
}

function testCancelSubscription($subscription_id) {
  $cancel_request = new ARBRequest;
  $cancel_response = $cancel_request->cancelSubscription($subscription_id);
  $cancel_subscription_success = $cancel_response->isOk();
  return($cancel_subscription_success);
}

function testAllMethods() {
  // Set the subscription fields.
  $subscription = new ARBSubscription;
  $subscription->name = "Short subscription";
  $subscription->intervalLength = "1";
  $subscription->intervalUnit = "months";
  $subscription->startDate = "2020-03-12";
  $subscription->totalOccurrences = "14";
  $subscription->amount = rand(1,100);
  $subscription->creditCardCardNumber = "6011000000000012";
  $subscription->creditCardExpirationDate = "2018-10";
  $subscription->creditCardCardCode = "123";
  $subscription->billToFirstName = "john";
  $subscription->billToLastName = "doe";
  // Create the subscription.
  $create_request = new ARBRequest;
  $create_response = $create_request->createSubscription($subscription);
  $create_subscription_success = $create_response->isOk();
  $subscription_id = $create_response->getSubscriptionId();
  // Get the subscription status
  $status_request = new ARBRequest;
  $status_response = $status_request->getSubscriptionStatus($subscription_id);
  $subscription_status = $status_response->getSubscriptionStatus();
  // Update the subscription
  $update_request = new ARBRequest;
  $updated_subscription_info = new ARBSubscription;
  $updated_subscription_info->billToFirstName = "jane";
  $updated_subscription_info->billToLastName = "smith";
  $updated_subscription_info->creditCardCardNumber = "6011000000000012";
  $updated_subscription_info->creditCardExpirationDate = "2019-10";
  $updated_subscription_info->creditCardCardCode = "423";
  $update_response = $update_request->updateSubscription($subscription_id, $updated_subscription_info);
  $update_subscription_success = $update_response->isOk();
  // Cancel the subscription
  $cancel_request = new ARBRequest;
  $cancel_response = $cancel_request->cancelSubscription($subscription_id);
  $cancel_subscription_success = $cancel_response->isOk();
  // Get the subscription status
  $status_request = new ARBRequest;
  $status_response = $status_request->getSubscriptionStatus($subscription_id);
  $cancel_subscription_status = $status_response->getSubscriptionStatus();
}

function testCreateSubscriptionLong() {
  $subscription = new ARBSubscription;
  $subscription->name = "test subscription";
  $subscription->intervalLength = "1";
  $subscription->intervalUnit = "months";
  $subscription->startDate = "2015-03-12";
  $subscription->totalOccurrences = "14";
  $subscription->trialOccurrences = "";
  $subscription->amount = "6.99";
  $subscription->trialAmount = "";
  $subscription->creditCardCardNumber = "6011000000000012";
  $subscription->creditCardExpirationDate = "2018-10";
  $subscription->creditCardCardCode = "123";
  $subscription->bankAccountAccountType = "";
  $subscription->bankAccountRoutingNumber = "";
  $subscription->bankAccountAccountNumber = "";
  $subscription->bankAccountNameOnAccount = "";
  $subscription->bankAccountEcheckType = "";
  $subscription->bankAccountBankName = "";
  $subscription->orderInvoiceNumber = "";
  $subscription->orderDescription = "";
  $subscription->customerId = "12";
  $subscription->customerEmail = "foo@domain.com";
  $subscription->customerPhoneNumber = "";
  $subscription->customerFaxNumber = "";
  $subscription->billToFirstName = "john";
  $subscription->billToLastName = "doe";
  $subscription->billToCompany = "";
  $subscription->billToAddress = "";
  $subscription->billToCity = "";
  $subscription->billToState = "";
  $subscription->billToZip = "";
  $subscription->billToCountry = "";
  $subscription->shipToFirstName = "";
  $subscription->shipToLastName = "";
  $subscription->shipToCompany = "";
  $subscription->shipToAddress = "";
  $subscription->shipToCity = "";
  $subscription->shipToState = "";
  $subscription->shipToZip = "";
  $subscription->shipToCountry = "";
  $refId = "ref" . time();
  // Create the request and send it.
  $request = new ARBRequest;
  $request->setRefId($refId);
  $response = $request->createSubscription($subscription);
  // Handle the response.
  $subscription_success = $response->isOk();
  $message_code = $response->getMessageCode(); //I00001
  $message_text = $response->getMessageText(); //Successful
  $response_refId = $response->getRefId();
  $result_code = $response->getResultCode(); //Ok
  // Cancel the subscription to avoid duplicate errors in future
  $cancellation = new ARBRequest;
  $cancellation->setRefId($refId);
  $cancel_response = $cancellation->cancelSubscription($response->getSubscriptionId());
  $cancel_success = $cancel_response->isOk();
}

?>