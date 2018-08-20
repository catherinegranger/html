<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}


$two ? ($two) : $two = 'all';
$tri ? ($tri) : $tri = 0;
$viewage = 20;
if ($two > 0) {
  $tri = 0;
}

if ($two == 'solve_reports') {
  $file_dir = dirname(__FILE__)."/";
  $filename = $file_dir."../../../reports/customer_report.csv";

  $daily_filename = $file_dir."../../../reports/daily_customer_report.csv";
  $weekly_filename = $file_dir."../../../reports/weekly_customer_report.csv";
  $monthly_filename = $file_dir."../../../reports/monthly_customer_report.csv";
  $country_filename = $file_dir."../../../reports/country_customer_report.csv";
  $orders_filename = $file_dir."../../../reports/orders_customer_report.csv";

  $report_url = "http://bluedanubewine.com/reports/customer_report.csv";
  $daily_report_url = "http://bluedanubewine.com/reports/daily_customer_report.csv";
  $weekly_report_url = "http://bluedanubewine.com/reports/weekly_customer_report.csv";
  $monthly_report_url = "http://bluedanubewine.com/reports/monthly_customer_report.csv";
  $country_report_url = "http://bluedanubewine.com/reports/country_customer_report.csv";
  $orders_report_url = "http://bluedanubewine.com/reports/orders_customer_report.csv";

  $time_adjust = 60 * 60 * 3;
  $today = time() - $time_adjust;
  $yesterday = time() - (24 * 60 * 60);
  $last_week = time() - (2 * 7 * 24 * 60 * 60);
  $last_month = time() - (6 * 7 * 24 * 60 * 60);
  $last_2_months = time() - (9 * 7 * 24 * 60 * 60);

  $sql = "SELECT o.o_id, o.status,o.grand_total, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
  $sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone, FROM_UNIXTIME(o.placed, '%m/%Y') AS placed,";
  $sql .= " r.first_name, r.last_name, r.address1, r.address2,";
  $sql .= " r.city, r.state, r.zipcode, r.email,  r.phone";
  $sql .= " FROM store_order AS o, recipient AS r";
  $sql .= " WHERE o.rec_id = r.rec_id AND o.status != '0'  AND o.placed > ".$last_month." AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8'  ORDER BY r.rec_id DESC";
  $result = $mydb->runSql($sql);
  $counter = 0;
  $grand_totals = array();
  while($row = $mydb->getAssoc($result)) {
    $recipient_email = trim(strtolower($row["email"]));
    if (array_key_exists($recipient_email, $grand_totals)) {
      $grand_totals[$recipient_email] += fixCurrency($row["grand_total"]);
    }
    else {
      $grand_totals[$recipient_email] = fixCurrency($row["grand_total"]);
      $name = $row["first_name"].' '.$row["last_name"];
      $country = "USA";
      $address = $row["address1"].' '.$row["address2"];
      $address = trim(str_replace(',',' ',$address));
      $city = ucwords(trim(str_replace(',',' ',$row["city"])));
      $full_address = $address.' '.$city.' '.strtoupper($row["state"]).' '.$row["zipcode"].' '.$country;
      $ship_address = $row["ship_address1"].' '.$row["ship_address2"];
      $ship_address = trim(str_replace(',',' ',$ship_address));
      $ship_city = ucwords(trim(str_replace(',',' ',$row["ship_city"])));
      $full_shipping_address =$ship_address.' '.$ship_city.' '.strtoupper($row["ship_state"]).' '.$row["ship_zipcode"].' '.$country;
      $type = "End User";
      $recipients[$counter++] = array('order_id' => $row["o_id"],
				      'status' => $row["status"],
				      'first_name' => $row["first_name"],
				      'last_name' => $row["last_name"],
				      'name' => $name,
				      'email' => $recipient_email,
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
				      'type' => $type
				      );
    }
  }
  $out = "First Name,Last Name,Personal Email,Personal Phone,Billing Address,State,Shipping Address,Lead Source,Notes,Categories,Assigned To\n";
  $counter = 0;
  $lead_source = "Website";
  $assigned_to = "Admin";
  $category = "End Customer";
  $total_array[$counter] = 0.0;
  $last_name_array[$counter] = "";
  foreach ($recipients as $recipient) {
    $grand_total = fixCurrency($grand_totals[$recipient["email"]]);
    if ($grand_total <= 0) {
      $grand_total = $recipient["grand_total"];
    }
    $total_array[$counter] = $grand_total;
    $last_name_array[$counter] = $recipient["last_name"];
    $customers[$counter++] = array('order_id' => $recipient["order_id"],
				   'status' => $row["status"],
				   'name' => $recipient["name"],
				   'last_name' => $recipient["last_name"],
				   'email' => $recipient["email"],
				   'phone' => $recipient["phone"],
				   'full_address' => $recipient["full_address"],
				   'address' => $recipient["address"],
				   'city' => $recipient["city"],
				   'state' => $recipient["state"],
				   'zipcode' => $recipient["zipcode"],
				   'country' => $recipient["country"],
				   'ship_address' => $recipient["ship_address"],
				   'ship_city' => $recipient["ship_city"],
				   'ship_state' => $recipient["ship_state"],
				   'ship_zipcode' => $recipient["ship_zipcode"],
				   'ship_country' => $recipient["ship_country"],
				   'grand_total' => $grand_total,
				   'grand_total2' => $recipient["grand_total"],
				   'placed' => $recipient["placed"],
				   'type' => $type
				   );
    $notes = "Total order amount: ".$grand_total.". Last order: ".$recipient["placed"];
    $out .=$recipient["first_name"].",".$recipient["last_name"].",".$recipient["email"].",".$recipient["phone"].",".$recipient["full_address"].",".$recipient["state"].",".$recipient["full_shipping_address"].",".$lead_source.",".$notes.",".$category.",".$assigned_to."\n";
  }
  if (is_writable($filename)) {
    if (!$handle = fopen($filename, 'w')) { $error = "Cannot open file ($filename)"; }
    //if (fwrite($handle, $out) === FALSE) { $error = "Cannot write to file ($filename)"; }
    fclose($handle);
  } 
  else { $error = "The file $filename is not writable"; }

  array_multisort($total_array, SORT_DESC, $customers);

 
  // monthly report
  $monthly_sql = "SELECT o.o_id, o.status, o.grand_total, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
  $monthly_sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone, FROM_UNIXTIME(o.placed, '%m/%d/%Y') AS placed,";
  $monthly_sql .= " r.first_name, r.last_name, r.address1, r.address2,";
  $monthly_sql .= " r.city, r.state, r.zipcode, r.email,  r.phone";
  $monthly_sql .= " FROM store_order AS o, recipient AS r";
  $monthly_sql .= " WHERE o.rec_id = r.rec_id AND o.placed > ".$last_month." ORDER BY r.rec_id DESC";
  $monthly_result = $mydb->runSql($monthly_sql);
  $counter = 0;
  $report_grand_totals = array();
  while ($row = $mydb->getAssoc($monthly_result)) {
    if (array_key_exists($row["email"], $report_grand_totals)) {
      $report_grand_totals[$row["email"]] += fixCurrency($row["grand_total"]);
    }
    else {
      $report_grand_totals[$row["email"]] = fixCurrency($row["grand_total"]);
      $country = "USA";
      $address = $row["address1"].' '.$row["address2"];
      $address = trim(str_replace(',',' ',$address));
      $city = ucwords(trim(str_replace(',',' ',$row["city"])));
      $full_address = $address.' '.$city.' '.strtoupper($row["state"]).' '.$row["zipcode"].' '.$country;
      $ship_address = $row["ship_address1"].' '.$row["ship_address2"];
      $ship_address = trim(str_replace(',',' ',$ship_address));
      $ship_city = ucwords(trim(str_replace(',',' ',$row["ship_city"])));
      $full_shipping_address = $ship_address.' '.$ship_city.' '.strtoupper($row["ship_state"]).' '.$row["ship_zipcode"].' '.$country;
      $prospect = FALSE;
      if ((($row["status"] == 0) || ($row["status"] == 1) || ($row["status"] == 4) || ($row["status"] == 7) || ($row["status"] == 8)) && (array_key_exists($row["email"], $grand_totals) == FALSE)) {
	$prospect = TRUE;
      }
      $monthly_report_recipients[$counter++] = array('order_id' => $row["o_id"],
						     'status' => $row["status"],
						     'first_name' => $row["first_name"],
						     'last_name' => $row["last_name"],
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
						     'placed' => $row["placed"]
						     );
    }
  }
  $monthly_content = "First Name,Last Name,Personal Email,Personal Phone,Billing Address,State,Shipping Address,Lead Source,Notes,Categories,Assigned To\n";
  $counter = 0;
  $lead_source = "Website";
  $assigned_to = "Admin";
  foreach ($monthly_report_recipients as $report_recipient) {
    $report_grand_total = fixCurrency($report_grand_totals[$report_recipient["email"]]);
    if ($report_grand_total <= 0) {
      $report_grand_total = $report_recipient["grand_total"];
    }
    if ($report_recipient["prospect"] == TRUE) {
      $category = "End Customer;Prospect";
    }
    else {
      $category = "End Customer";
    }
    $order_status = orderStatusToString($report_recipient["status"]);
    $notes = "Last order status: ".$order_status."; total order amount: ".$report_grand_total.". Last order: ".$report_recipient["placed"];
    $monthly_content .=$report_recipient["first_name"].",".$report_recipient["last_name"].",".$report_recipient["email"].",".$report_recipient["phone"].",".$report_recipient["full_address"].",".$report_recipient["state"].",".$report_recipient["full_shipping_address"].",".$lead_source.",".$notes.",".$category.",".$assigned_to."\n";
  }
  if (is_writable($monthly_filename)) {
    if (!$handle = fopen($monthly_filename, 'w')) {
      $error = "Cannot open file ($monthly_filename)";
    }
    if (fwrite($handle, $monthly_content) === FALSE) {
      $error = "Cannot write to file ($monthly_filename)";
    }
    fclose($handle);
  } 
  else {
    $error = "The file $monthly_filename is not writable";
  }
  

  // Interest for customers
  //$country = 'Montenegro';
  $country = 'None';
  $sql = "SELECT DISTINCT recipient.email FROM store_order, recipient, store_order_item, vintage, winery, country_code WHERE store_order.rec_id = recipient.rec_id AND store_order_item.o_id = store_order.o_id AND vintage.vint_id = store_order_item.ident AND vintage.wy_id = winery.wy_id and winery.c_id = country_code.c_id and country_code.web_name like '".$country."'";
  $result = $mydb->runSql($sql);
  $counter = 0;
  $grand_totals = array();
  while($row = $mydb->getAssoc($result)) {
      $country_recipients[$counter++] = array('email' => $row["email"],
					      'interest' => $country,
					      );
  }
  $country_content = "Contact Email,Interest\n";
  $counter = 0;
  foreach ($country_recipients as $country_recipient) {
    $country_content .=$country_recipient["email"].",".$country_recipient["interest"]."\n";
    
  }
  if (is_writable($country_filename)) {
    if (!$handle = fopen($country_filename, 'w')) {
      $error = "Cannot open file ($country_filename)";
    }
    if (fwrite($handle, $country_content) === FALSE) {
      $error = "Cannot write to file ($country_filename)";
    }
    fclose($handle);
  } 
  else {
    $error = "The file $country_filename is not writable";
  }

// Repeat customers

  $orders_content = "Contact Email,BDW Orders\n";
  foreach ($customers as $customer) {
    $recipient_email = trim(strtolower($customer["email"]));
    $sql = "SELECT store_order.o_id FROM store_order, recipient WHERE store_order.rec_id = recipient.rec_id AND recipient.email like  '".$recipient_email."' AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8' ";
    $result = $mydb->runSql($sql);
    if ($result) {
      $total_orders = $mydb->getCount($result);
      $orders_content .=$customer["email"].",".$total_orders."\n";
    }
  }
  if (is_writable($orders_filename)) {
    if (!$handle = fopen($orders_filename, 'w')) {
      $error = "Cannot open file ($orders_filename)";
    }
    if (fwrite($handle, $orders_content) === FALSE) {
      $error = "Cannot write to file ($orders_filename)";
    }
    fclose($handle);
  } 
  else {
    $error = "The file ".$orders_filename." is not writable";
  }
  $smarty->assign('error',$error);
  $smarty->assign('filename',$filename);
  $smarty->assign('daily_filename',$daily_filename);
  $smarty->assign('weekly_filename',$weekly_filename);
  $smarty->assign('monthly_filename',$monthly_filename);
  $smarty->assign('orders_filename',$orders_filename);
  $smarty->assign('report_url',$report_url);
  $smarty->assign('daily_report_url',$daily_report_url);
  $smarty->assign('weekly_report_url',$weekly_report_url);
  $smarty->assign('monthly_report_url',$monthly_report_url);
  $smarty->assign('country_report_url',$country_report_url);
  $smarty->assign('orders_report_url',$orders_report_url);

  $smarty->assign('daily_content',$daily_content);
  $smarty->assign('weekly_content',$weekly_content);
  $smarty->assign('monthly_content',$monthly_content);
  $smarty->assign('country_content',$country_content);
  $smarty->assign('orders_content',$country_content);

  if ($total > $viewage) {
    $smarty->assign('paginator', "<b>Pages:</b> ".paginator($total,$viewage,'/amn/customers/'.$two.'/',$tri));
  }
  $smarty->assign('two',$two);
  $smarty->assign('customers',$customers);
  $smarty->assign('report','solve_report');

}
else { // dashboard

  $time_adjust = 60 * 60 * 3;
  $today = time() - $time_adjust;
  $last_month = time() - (4 * 7 * 24 * 60 * 60);
  $last_2months = time() - (8 * 7 * 24 * 60 * 60);

  $sql = "SELECT o.o_id, o.status,o.grand_total, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
  $sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone, o.placed,";
  $sql .= " r.first_name, r.last_name, r.address1, r.address2,";
  $sql .= " r.city, r.state, r.zipcode, r.email,  r.phone";
  $sql .= " FROM store_order AS o, recipient AS r";
  $sql .= " WHERE o.rec_id = r.rec_id AND o.placed >= ".$last_month." AND o.status != '0' AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8'  ORDER BY r.rec_id DESC";

  $result = $mydb->runSql($sql);
  $counter = 0;
  while($row = $mydb->getAssoc($result)) {
    $recipient_email = trim(strtolower($row["email"]));
    $total_orders = 0;
    $sql2 = "SELECT store_order.o_id FROM store_order, recipient WHERE store_order.rec_id = recipient.rec_id AND recipient.email like  '".$recipient_email."' AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8' ";
    $result2 = $mydb->runSql($sql2);
    if ($result2) {
      $total_orders = $mydb->getCount($result2);
    }
    $orders[$counter++] = array('o_id' => $row["o_id"],
				'name' => $row["first_name"]." ".$row["last_name"],
				'email' => $recipient_email,
				'total_orders' => $total_orders,
				'state' => $row["state"],
				'ship_to' => $row["ship_first_name"]." ".$row["ship_last_name"],
				'placed' => date('m-d-y', $row["placed"]),
				'grand_total' => $row["grand_total"],
				'status' => $scodes[$row["status"]],
				);
  }

  $sql = "SELECT o.o_id, o.status,o.grand_total, o.first_name AS ship_first_name, o.last_name AS ship_last_name, o.address1 AS ship_address1, o.address2 AS ship_address2,";
  $sql .= " o.city AS ship_city, o.state AS ship_state, o.zipcode AS ship_zipcode, o.email AS ship_email, o.phone AS ship_phone, o.placed,";
  $sql .= " r.first_name, r.last_name, r.address1, r.address2,";
  $sql .= " r.city, r.state, r.zipcode, r.email,  r.phone";
  $sql .= " FROM store_order AS o, recipient AS r";
  $sql .= " WHERE o.rec_id = r.rec_id AND o.placed < ".$last_month." AND o.placed >= ".$last_2months." AND o.status != '0' AND o.status != '4' AND o.status != '1' AND o.status != '7' AND o.status != '8'  ORDER BY r.rec_id DESC";
  $result = $mydb->runSql($sql);
  if ($result) {
      $past_order_qty = $mydb->getCount($result);
  }
  $smarty->assign('orders',$orders);
  $smarty->assign('order_qty',count($orders));
  $smarty->assign('past_order_qty',$past_order_qty);
  $smarty->assign('report','dashboard');

}




?>