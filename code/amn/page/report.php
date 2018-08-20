<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$two ? ($two) : $two = 'all';

if ($two == 'all') {
  $sql = "SELECT *, wy.name AS winery_name, v.name AS vintage_name, type.name as type_name ";
  $sql .= " FROM vintage AS v, winery AS wy, type";
  $sql .= " WHERE type.type_id = v.type_id and v.wy_id = wy.wy_id and v.deleted = 0";
  $sql .= " ORDER BY wy.sort_name, v.name, v.year DESC";
}
else {
  $sql = "SELECT *, wy.name AS winery_name, v.name AS vintage_name, type.name as type_name ";
  $sql .= " FROM vintage AS v, winery AS wy, type";
  $sql .= " WHERE type.type_id = v.type_id and v.wy_id = wy.wy_id and v.deleted = 0";
  $sql .= " ORDER BY wy.sort_name, v.name, v.year DESC";
}
$result = $mydb->runSql($sql);

$out = "Product Id,Winery,Name,Year,Size,Type,Appellation,Alcohol,UPC,TTB,Price,Sale,Notes\n";
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  if ($row["online_store"] == '0')
    $in_store = 'NO';
  else
    $in_store = 'YES';
  if ($row["year"] == '0')
    $year = 'NA';
  else
    $year = $row["year"];
  if ($row["alcohol"] == '0')
    $alcohol = '';
  else
    $alcohol = $row["alcohol"];
  if (($row["price"] > 0) ||
      ($row["ca_wholesale_price"] > 0) ||
      ($row["ny_wholesale_price"] > 0)) {
    $store_markup = 0;
    $ny_markup = 0;
    if ($row["ca_wholesale_price"] > 0) {
      $store_markup = round((($row["price"] - $row["ca_wholesale_price"]) / $row["ca_wholesale_price"]) * 100);
      $ny_markup = round((($row["ny_wholesale_price"] - $row["ca_wholesale_price"]) / $row["ca_wholesale_price"])*100);
    }
    $out .=$row["product_id"].",".$row["winery_name"].",".$row["vintage_name"].",".$row["year"].",".$row["size"].",".$row["type_name"].",".$row["appellation"].",".$row["alcohol"].",".$row["upc"].",".$row["ttb"].",".$row["price"].",".$row["sale"].","."\n";
    $vintages[$counter++] = array('vint_id' => $row["vint_id"],
				  'product_id' => $row["product_id"],
				  'winery' => $row["winery_name"],
				  'vintage' => $row["vintage_name"],
				  'type' => $row["type_name"],
				  'year' => $row["year"],
				  'size' => $row["size"],
				  'appellation' => $row["appellation"],
				  'alcohol' => $row["alcohol"],
				  'ttb' => $row["ttb"],
				  'upc' => $row["upc"],
				  'price' => fixCurrency($row["price"]),
				  'sale' => fixCurrency($row["sale"]),
				  'ny_price' => fixCurrency($row["ny_wholesale_price"]),
				  'ca_price' => fixCurrency($row["ca_wholesale_price"]),
				  'ny_price_case' => fixCurrency(12*$row["ny_wholesale_price"]),
				  'store_markup' => $store_markup,
				  'ny_markup' => $ny_markup,
				  'ny_discount3' => $row["ny_discount3"]
				  );
  }
}
$smarty->assign('vintages',$vintages);

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/vintage_report.csv";
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


?>