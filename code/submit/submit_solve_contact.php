<?php


define('USER', 'solve360@bluedanubewine.com');
define('CATHERINE', 'catherine@bluedanubewine.com');
define('TOKEN', 'n4I4J5b8s4W4Tfv41bH3R9md509dF4scX1J7K0gb');

$header  = "From: no-reply@bluedanubewine.com\r\n" .  "X-Mailer: php\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$contactname = trim($_POST["lastname"]);
$contactemail = trim($_POST["email"]);
//$one = trim($_POST["one"]);
//$two = trim($_POST["two"]);
//$tri = trim($_POST["tri"]);

// Configure service gateway object
require $root_dir.'/base/Solve360Service.php'; 
$solve360Service = new Solve360Service(USER, TOKEN);

$contactData = array(
    'lastname' => $contactname,		     
    'otheremail' => $contactemail,		     
    'ownership' => 84443309,
    'assignedto' => 57241680,
    'custom9516267' => 'Newsletter',
    'custom9516268' => 'Subscribed',

    // Add categories
    'categories'    => array(
        'add' => array('category' => array(63236422,63236422))
    ),
    
);

$contactName = $contactname;
$contactId = 0;

if (strpos($contactemail, 'reopenetic') !== FALSE)  mail( $contactemail, 'Contact has subscribed', $contactname . ' ('. $contactData['otheremail'] . ') ' );


//
// Saving the contact
//
// If there was business email provided:
// check if the contact already exists by searching for a matching email address.
// if a match is found update the existing contact, otherwise create a new one.
//
//if ($contactData['otheremail']) {
if (FALSE) {
    $contacts = $solve360Service->searchContacts(array(
        'filtermode' => 'byemail',
        'filtervalue' => $contactData['otheremail'],
    ));
}
if (isset($contacts) && (integer)$contacts->count > 0) {
    $contactId = (integer)current($contacts->children())->id;
    $contactName = (string)current($contacts->children())->name;
    //$contact = $solve360Service->editContact($contactId, $contactData);
} 
else {
  //$contact = $solve360Service->addContact($contactData);
  //$contactName = (string)$contact->item->name;
  //$contactId = (integer)$contact->item->id;
}

if (isset($contact->errors)) {
  $errors[] = lang("SOLVE_ADD_CONTACT_FAIL");
  $_SESSION["userCakeErrors"] = $errors;
  mail(CATHERINE, 'Error while adding contact to Solve360', 'Error: ' . $contact->errors->asXml() );
} 
//else if (strpos($contactemail, 'yahoo') == FALSE) {
else {

  $successes[] = lang("SOLVE_ADD_CONTACT_SUCCESS");
  $_SESSION["userCakeSuccesses"] = $successes;
  if ((strpos($contactemail, 'reopenetic') !== FALSE) ||
      (strpos($contactemail, 'parelay') !== FALSE) ||
      (strpos($contactemail, 'joelazzaro') !== FALSE) ||
      (strpos($contactemail, 'yandex') !== FALSE) ||
      (strpos($contactemail, 'mail.ru') !== FALSE) ||
      (strpos($contactemail, 'cleotildeihambrosinol') !== FALSE) ||
      (strpos($contactemail, 'madelynggcoraiih') !== FALSE) ||
      (strpos($contactemail, 'tomasaiitookermll') !== FALSE) ||
      (strpos($contactemail, 'spamavert') !== FALSE) ||
      (strpos($contactemail, 'rom11') !== FALSE) ||
      (strpos($contactemail, 'qqmuch') !== FALSE) ||
      (strpos($contactemail, 'discopied') !== FALSE) ||
      (strpos($contactemail, 'conventionoftheleft') !== FALSE)) {
      mail( CATHERINE, 'Bogus contact posted to Solve360', $contactName . ' '. $contactData['otheremail'], $header  );
  }
  else if (strpos($contactemail, 'yahoo') !== FALSE) {
      mail( CATHERINE, 'Yahoo contact posted to Solve360', $contactName . ' '. $contactData['otheremail'], $header  );
  }
  //else if (blockNewsletterSignUp($contactemail)) mail( CATHERINE, 'Bogus Contact posted to Solve360', 'Contact ' . $contactName . ' ('. $contactData['otheremail'] . ') ' . ' https://secure.solve360.com/contact/' . $contactId . ' was posted to Solve360' );
  else {
      mail( CATHERINE, 'Contact posted to Solve360', $contactName . ' '. $contactData['otheremail'], $header  );
  }
}


kickBack('', '', '');
exit;





