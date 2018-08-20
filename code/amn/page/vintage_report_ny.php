<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT *, country_code.web_name AS country_name, winery.name AS winery_name, vintage.name AS vintage_name, type.name as type_name ";
$sql .= " FROM vintage, winery, country_code, type";
$sql .= " WHERE country_code.c_id = winery.c_id and type.type_id = vintage.type_id and vintage.wy_id = winery.wy_id and vintage.ny_wholesale_price > 0 and vintage.deleted = 0";
$sql .= " ORDER BY country_name, winery.name, vintage.name, vintage.year DESC";
$result = $mydb->runSql($sql);

$out = "Product Id,Winery,Name,Year,Size,Type,Appellation,Alcohol,UPC,TTB,CA Wholesale, NY Wholesale,NY Discount\n";
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
  $out .=$row["product_id"].",".$row["winery_name"].",".$row["vintage_name"].",".$year.",".$row["size"].",".$row["type_name"].",".$row["appellation"].",".$alcohol.",".$row["upc"].",".$row["ttb"].",".$row["ca_wholesale_price"].",".$row["ny_wholesale_price"].",".$row["ny_discount3"]."\n";
  $vintages[$counter++] = array('vint_id' => $row["vint_id"],
				'product_id' => $row["product_id"],
				'winery' => $row["winery_name"],
				'vintage' => $row["vintage_name"],
				'type' => $row["type_name"],
				'year' => $year,
				'size' => $row["size"],
				'appellation' => $row["appellation"],
				'alcohol' => $alcohol,
				'ttb' => $row["ttb"],
				'upc' => $row["upc"],
				'in_store' => $in_store,
				'price' => fixCurrency($row["price"]),
				'sale' => fixCurrency($row["sale"]),
				'ny_discount3' => $row["ny_discount3"],
				'ca_price' => fixCurrency($row["ca_wholesale_price"]),
				'ny_price' => fixCurrency($row["ny_wholesale_price"]));
}
$smarty->assign('vintages',$vintages);

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/vintage_report_ny.csv";
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