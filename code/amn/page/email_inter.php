<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/collado.csv";
$emails = array();

$handle = fopen($filename, 'r');
if ($handle) {
   $data = fgetcsv($handle, 1024);
   $emails[$data[0]] = $data[0];
   while (!feof($handle)) {
     $data = fgetcsv($handle, 1024);
     $emails[$data[0]] = $data[0];
   }
   
  //$current_line = fgets($handle);
  //$test = feof($handle);
  //while (!feof($handle)) { }
  fclose($handle);
}

$first_email = key($emails);
$smarty->assign('filename',$filename);
$smarty->assign('first_email',$first_email);

$customers = array();
$last_5_months = time() - (20 * 7 * 24 * 60 * 60);
$sql = "SELECT o.o_id, o.status,o.grand_total, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
$sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone, FROM_UNIXTIME(o.placed, '%m/%Y') AS placed,";
$sql .= " r.first_name, r.last_name, r.address1, r.address2,";
$sql .= " r.city, r.state, r.zipcode, r.email,  r.phone";
$sql .= " FROM store_order AS o, recipient AS r";
//$sql .= " WHERE o.rec_id = r.rec_id AND o.status != '0' AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8'  ORDER BY r.rec_id DESC";
$sql .= " WHERE o.rec_id = r.rec_id AND o.placed > ".$last_5_months." ORDER BY r.rec_id DESC";

$result = $mydb->runSql($sql);
$counter = 0;

while($row = $mydb->getAssoc($result)) {
  if (array_key_exists($row["email"], $emails)) {
    $name = $row["first_name"].' '.$row["last_name"];
    $order_status = orderStatusToString($row["status"]);
    $country = "USA";
    $address = $row["address1"].' '.$row["address2"];
    $address = trim(str_replace(',',' ',$address));
    $city = ucwords(trim(str_replace(',',' ',$row["city"])));
    $full_address = $address.' '.$city.' '.strtoupper($row["state"]).' '.$row["zipcode"].' '.$country;
    $ship_address = $row["ship_address1"].' '.$row["ship_address2"];
    $ship_address = trim(str_replace(',',' ',$ship_address));
    $ship_city = ucwords(trim(str_replace(',',' ',$row["ship_city"])));
    $full_shipping_address = $ship_address.' '.$ship_city.' '.strtoupper($row["ship_state"]).' '.$row["ship_zipcode"].' '.$country;
    $type = "End User";
    $customers[$counter++] = array('order_id' => $row["o_id"],
				    'status' => $row["status"],
				    'first_name' => $row["first_name"],
				    'last_name' => $row["last_name"],
				    'name' => $name,
				    'email' => strtolower($row["email"]),
				    'phone' => $row["phone"],
				    'full_address' => $full_address,
				    'full_shipping_address' => $full_shipping_address,
				    'address' => $address,
				    'city' => $city,
				    'state' => strtoupper($row["state"]),
				    'zipcode' => $row["zipcode"],
				    'country' => $country,
				    'ship_address' => $ship_address,
				    'ship_city' => $ship_city,
				    'ship_state' => strtoupper($row["ship_state"]),
				    'ship_zipcode' => $row["ship_zipcode"],
				    'ship_country' => $country,
				    'grand_total' => fixCurrency($row["grand_total"]),
				    'placed' => $row["placed"],
				    'order_status' => $order_status,
				    'type' => $type
				);
  }
}

$smarty->assign('customers',$customers);


?>