<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT *, country_code.web_name AS country_web_name,country_code.full_name AS country_name, winery.name AS winery_name, vintage.name AS vintage_name, type.type_id as type_id, type.name as type_name ";
$sql .= " FROM vintage, winery, country_code, type";
$sql .= " WHERE country_code.c_id = winery.c_id and type.type_id = vintage.type_id and vintage.wy_id = winery.wy_id and vintage.ca_wholesale_price > 0 and vintage.deleted = 0";
$sql .= " ORDER BY  winery.name, vintage.name, vintage.year DESC";
$result = $mydb->runSql($sql);

$counter = 0;
$vintages[$counter++] = array('product_id' => "SKU",
			      'status' => "Status",
			      'supplier' => "Supplier",
			      'product_type' => "Product Type",
			      'product_subtype' => "Product Subtype",
			      'product_style' => "Product Style",
			      'producer_name' => "Producer Name",
			      'product_name' => "Product Name",
			      'vintage' => "Vintage",
			      'grapes' => "Grapes/Raw Materials",
			      'country' => "Country",
			      'region' => "Region",
			      'sub_region' => "SubRegion",
			      'appellation' => "Appellation",
			      'description' => "Description",
			      'image_url' => "Image URL",
			      'features' => "Features",
			      'alcohol' => "Alcohol",
			      'size' => "Size",
			      'size_unit' => "Size Unit",
			      'container' => "Container",
			      'case' => "Case",
			      'fullcase' => "Full Case Only (Y)",
			      'keg' => "Keg Connection",
			      'hide_pricing' => "Hide Pricing (Y)",
			      'sales_div' => "Sales Division",
			      'ttb' => "TTB #",
			      'upc' => "UPC",
			      'frontline' => "Frontline Price (per bottle)",
			      'frontline_case' => "Frontline Price (per case)",
			      'discount' => "Discount Quantity 1 by bottle or by case)"
			      );
while($row = $mydb->getAssoc($result)) {
  $varietal_sql = "SELECT varietal.name AS varietal_name FROM var_vint, varietal WHERE var_vint.v_id = varietal.v_id AND var_vint.vint_id ='".$row["vint_id"]."'";
  $varietal_result = $mydb->runSql($varietal_sql);
  $varietal_row = $mydb->getAssoc($varietal_result);
  $grapes = $varietal_row["varietal_name"];
  while ($varietal_row = $mydb->getAssoc($varietal_result)) {
    $grapes = $grapes.", ".$varietal_row["varietal_name"];
  }
  if ($row["year"] == '0')
    $year = 'NV';
  else
    $year = $row["year"];
  if ($row["alcohol"] == '0')
    $alcohol = '';
  else
    $alcohol = $row["alcohol"];
  $features = "";
  $type_id = $row["type_id"];
  $product_subtype = "Still";
  $product_style = $row["type_name"];
  if ($type_id == 4) {
    $product_subtype = "Sparkling";
    $product_style = "White";
  }
  else if ($type_id == 6) {
    $product_style = "White";
    $features = "Dessert Wine";
  }
  $country = $row["country_name"];
  $region = $row["appellation"];
  $sub_region = $row["appellation"];
  $appellation = $row["appellation"];
  //$description = "";
  $description = $row["notes"];
  $image_url = "http://bluedanubewine.com/img/bottles/".$row["vint_id"].".jpg";
  $size_unit = "mL";
  $container = "bottle";
  $case = "12";
  $fullcase = "";
  $frontline = fixCurrency($row["ca_wholesale_price"]);
  $discount = "";
  //$discount = $row["ny_discount3"];
  $vintages[$counter++] = array('product_id' => $row["product_id"],
				'status' => "Available",
				'supplier' => "",
				'product_type' => "Wine",
				'product_subtype' => $product_subtype,
				'product_style' => $product_style,
				'producer_name' => $row["winery_name"],
				'product_name' => $row["vintage_name"],
				'vintage' => $year,
				'grapes' => $grapes,
				'country' => $country,
				'region' => $region,
				'sub_region' => $sub_region,
				'appellation' => $appellation,
				'description' => $description,
				'image_url' => $image_url,
				'features' => $features,
				'alcohol' => $alcohol,
				'size' => $row["size"],
				'size_unit' => $size_unit,
				'container' => $container,
				'case' => $case,
				'fullcase' => $fullcase,
				'keg' => "",
				'hide_pricing' => "",
				'sales_div' => "",
				'ttb' => $row["ttb"],
				'upc' => $row["upc"],
				'frontline' => $frontline,
				'frontline_case' => 12*$frontline,
				'discount' => $discount
				);
}
$smarty->assign('vintages',$vintages);

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/vintage_report_750.csv";
if (is_writable($filename)) {
   if (!$file_handler = fopen($filename, 'w')) {
         $error = "Cannot open file ($filename)";
   }
   //if (fwrite($file, $out) === FALSE) { $error = "Cannot write to file ($filename)";  }
   foreach ($vintages as $vintage) {
     fputcsv($file_handler, $vintage);
   }
   fclose($file_handler);
} 
else {
   $error = "The file $filename is not writable";
}

$report_url = "http://bluedanubewine.com/reports/vintage_report_750.csv";

$smarty->assign('filename',$report_url);
$smarty->assign('error',$error);

	


?>