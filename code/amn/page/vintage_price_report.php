<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$report_url = "http://bluedanubewine.com/reports/vintage_price_report.csv";

$sql = "SELECT *, country_code.full_name AS country_name, wy.web_name AS wyweb_name, wy.name AS winery_name, v.name AS vintage_name, type.name as type_name ";
$sql .= " FROM vintage AS v, winery AS wy, country_code, type";
$sql .= " WHERE wy.c_id = country_code.c_id AND type.type_id = v.type_id and v.wy_id = wy.wy_id and v.deleted = 0 and  v.ca_wholesale_price > 0 and v.inactive = 0";
$sql .= " ORDER BY country_code.web_name, wy.sort_name, v.name, v.year DESC";
$result = $mydb->runSql($sql);

$out = "Product Id,Winery,Name,Year,Size,CA Price\n";

while($row = $mydb->getAssoc($result)) {
  $out .=$row["product_id"].",".$row["winery_name"].",".$row["vintage_name"].",".$row["year"].",".$row["size"].",".fixCurrency($row["ca_wholesale_price"])."\n";
  $vintages[] = array('vint_id' => $row["vint_id"],
				'product_id' => $row["product_id"],
				'winery' => $row["winery_name"],
				'vintage' => $row["vintage_name"],
				'year' => $row["year"],
				'size' => $row["size"],
				'ca_price' => fixCurrency($row["ca_wholesale_price"]),
				);
}
$smarty->assign('vintages',$vintages);

$filename = $root_dir."/reports/vintage_price_report.csv";
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
$smarty->assign('report_url',$report_url);

?>