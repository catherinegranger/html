<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT instructions, need_by_date,  o.include_card, o.include_card_cost,o.include_card_msg, tax, shipping, adult_signature, shipping_method, response_code, response_reason_text, transaction_id, authorization_code, payment_method, account_number, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
$sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone,";
$sql .= " r.first_name, r.last_name, r.address1, r.address2,";
$sql .= " r.city, r.state, r.zipcode, r.email, o.status, o.grand_total, o.o_id, r.phone,";
$sql .= " FROM_UNIXTIME(o.placed, '%c-%e-%y %l:%i%p') AS placed";
$sql .= " FROM store_order AS o, recipient AS r";
$sql .= " WHERE o.rec_id = r.rec_id";

$result = $mydb->runSql($sql);

$counter = 0;
$email_counter = 0;
$recipients[$counter++] = array('name' => "Name",
			      'email' => "Email Address",
			      'phone' => "Office Phone",
			      'address' => "Billing Street",
			      'city' => "Billing City",
			      'state' => "Billing State",
			      'zipcode' => "Billing Postal Code",
			      'country' => "Billing Country",
			      'ship_address' => "Shipping Street",
			      'ship_city' => "Shipping City",
			      'ship_state' => "Shipping State",
			      'ship_zipcode' => "Shipping Postal Code",
			      'ship_country' => "Shipping Country",
			      'type' => "Type"
			      );
$emails[0] = "";
while($row = $mydb->getAssoc($result)) {
  if (in_array($row["email"], $emails) == FALSE) {
    $emails[$email_counter++] = $row["email"];
    $name = $row["first_name"].' '.$row["last_name"];
    $address = $row["address1"].' '.$row["address2"];
    $ship_address = $row["ship_address1"].' '.$row["ship_address2"];
    $country = "United States";
    $type = "Store Customer";
    $recipients[$counter++] = array('name' => $name,
				    'email' => strtolower($row["email"]),
				  'phone' => $row["phone"],
				  'address' => $address,
				    'city' => ucwords($row["city"]),
				  'state' => $row["state"],
				  'zipcode' => $row["zipcode"],
				  'country' => $country,
				  'ship_address' => $ship_address,
				    'ship_city' => ucwords($row["ship_city"]),
				  'ship_state' => $row["ship_state"],
				  'ship_zipcode' => $row["ship_zipcode"],
				  'ship_country' => $country,
				  'type' => $type
				);
  }
}
$smarty->assign('recipients',$recipients);

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/recipient_export.csv";
if (is_writable($filename)) {
   if (!$file_handler = fopen($filename, 'w')) {
         $error = "Cannot open file ($filename)";
   }
   //if (fwrite($file, $out) === FALSE) { $error = "Cannot write to file ($filename)";  }
   foreach ($recipients as $recipient) {
     fputcsv($file_handler, $recipient);
   }
   fclose($file_handler);
} 
else {
   $error = "The file $filename is not writable";
}
$smarty->assign('filename',$filename);
$smarty->assign('error',$error);

	


?>