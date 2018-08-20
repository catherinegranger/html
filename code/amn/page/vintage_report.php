<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT *, country_code.full_name AS country_name, wy.web_name AS wyweb_name, wy.name AS winery_name, v.name AS vintage_name, type.name as type_name ";
$sql .= " FROM vintage AS v, winery AS wy, country_code, type";
$sql .= " WHERE wy.c_id = country_code.c_id AND type.type_id = v.type_id and v.wy_id = wy.wy_id and v.deleted = 0 and v.stock = 1 and v.online_store = 1 and v.inactive = 0";
$sql .= " ORDER BY wy.sort_name, v.name, v.year DESC";
$result = $mydb->runSql($sql);

$out = "Product Id,Winery,Name,Year,Size,Type,Country,Alcohol,UPC,Price,Techsheet?\n";
$counter = 0;

while($row = $mydb->getAssoc($result)) {
  $hasnotes = "No";
  if (strlen($row["notes"]) > 1)
    $hasnotes = "Yes";
  $notes = escape_csv_value($row["notes"]);
  $image = "No";
  if ($row["image"] == 1)
    $image = "Yes";
  $techsheet = "No";
  $wineweb_name = prettyString($row["vintage_name"],$bad_stuff);
  $wineweb_name = unSlav($wineweb_name);
  $wineweb_name = unSpan($wineweb_name);
  $wineweb_name = unGerm($wineweb_name);
  $wineweb_name = unHun($wineweb_name);
  $wineweb_name = str_replace(' ','_',$wineweb_name);
  $complete_name = strtolower($row["wyweb_name"])."_".strtolower($wineweb_name);
  if ($row["year"] == 0)
    $tech_file_name = $complete_name.'.pdf';
  else
    $tech_file_name = $complete_name."_".$row["year"].'.pdf';
  $tech_file = $root_dir."/techsheets/".$tech_file_name;
  if (file_exists($tech_file)) {
    $techsheet = "Yes";
  }
  $out .=$row["product_id"].",".$row["winery_name"].",".$row["vintage_name"].",".$row["year"].",".$row["size"].",".$row["type_name"].",".$row["country_name"].",".$row["alcohol"].",".$row["upc"].",".$row["price"].",".$techsheet."\n";
  $ny_price_case = 12*$row["ny_wholesale_price"];
  $vintages[$counter++] = array('vint_id' => $row["vint_id"],
				'product_id' => $row["product_id"],
				'winery' => $row["winery_name"],
				'vintage' => $row["vintage_name"],
				'type' => $row["type_name"],
				'year' => $row["year"],
				'size' => $row["size"],
				'appellation' => $row["appellation"],
				'alcohol' => $row["alcohol"],
				'ttb' => $tech_file_name,
				'upc' => $row["upc"],
				'price' => fixCurrency($row["price"]),
				'sale' => fixCurrency($row["sale"]),
				'ny_price' => fixCurrency($row["ny_wholesale_price"]),
				'ny_price_case' => fixCurrency($ny_price_case),
				'ny_discount3' => fixCurrency($row["ny_discount3"]),
				'notes' => $hasnotes,
				'image' => $image
				);
}
$smarty->assign('vintages',$vintages);

$filename = $root_dir."/reports/vintage_report.csv";
if (is_writable($filename)) {
   if (!$handle = fopen($filename, 'w')) {
         $error = "Cannot open file ($filename)";
   }
   if (fwrite($handle, $out) === FALSE) {
       $error = "Cannot write to file ($filename)";
   }
   fclose($handle);
} 
else {
   $error = "The file $filename is not writable";
}
$smarty->assign('filename',$filename);
$smarty->assign('error',$error);

$sql = "SELECT *, wy.name AS winery_name, v.name AS vintage_name, type.name as type_name";
$sql .= " FROM vintage AS v, winery AS wy, type";
$sql .= " WHERE type.type_id = v.type_id and v.wy_id = wy.wy_id and v.deleted = 0";
$sql .= " ORDER BY wy.sort_name, v.name, v.year DESC";
$counter = 0;	
//$result = $mydb->runSql($sql);
//while($row = $mydb->getAssoc($result)) {}

function escape_csv_value($value) {
  $value = str_replace('"', '""', $value); // First off escape all " and make them ""
  if (preg_match('/,/', $value) or preg_match("/\n/", $value) or preg_match('/"/', $value)) { 
    // Check if I have any commas or new lines
    return '"'.$value.'"'; // If I have new lines or commas escape them
  } 
  else {
    return $value; // If no new lines or commas just return the value
  }
}
?>