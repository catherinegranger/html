<?PHP

$discount_name = trim($discount_name);


if ($discount_name) {
  if (($discount_value == "") || ($discount_value <= 0))
    $discount_value = 0;
  if (($discount_percent == "") || ($discount_percent <= 0))
    $discount_percent = 0;
  if (($discount_type_value == "") || ($discount_type_value <= 0))
    $discount_type_value = 0;
  if (($min_bottles == "") || ($min_bottles == 0))
    $min_bottles = 1;
  if (($apply_to == "") || ($apply_to < 0))
    $apply_to = 0;
  $from_date = mktime(0,0,0,$from_month,$from_day,$from_year);
  if ($to_month == 0)
    $to_date = 0;
  else {
    date_default_timezone_set('Pacific/Honolulu'); // way to cover all US for to_date 
    $to_date = mktime(0,0,0,$to_month,$to_day,$to_year);
  }
  $stuff = array('name' => $discount_name,
		 'discount_from' => $from_date,
		 'discount_to' => $to_date,
		 'value' => $discount_value,
		 'percent' => $discount_percent,
		 'type' => $discount_type,
		 'apply_to' => $apply_to,
		 'min_bottles' => $min_bottles,
		 'type_value' => $discount_type_value,
		 'type_value_string' => $discount_type_value_string,
		 );
  if ($mydb->insert("order_discount",$stuff)) { 
    $_SESSION["discount_name"] = "";
    $_SESSION["discount_value"] = 0;
    $_SESSION["discount_percent"] = 0;
    $_SESSION["discount_type"] = 0;
    $_SESSION["discount_type_value"] = 0;
    $_SESSION["discount_type_value_string"] = "";
    $_SESSION["apply_to"] = 0;
    $_SESSION["min_bottles"] = 1;
    $_SESSION["from_month"] = "";
    $_SESSION["from_day"] = "";
    $_SESSION["from_year"] = "";
    $_SESSION["to_month"] = "";
    $_SESSION["to_day"] = "";
    $_SESSION["to_year"] = "";
    kickBack('','amn/add_discount','success');
    exit;
  }
  else {
    echo $_SESSION["error"];
    exit;
  }
} 
else {
  kickBack($_POST,'amn/add_discount','no_name');
  exit;
}

?>