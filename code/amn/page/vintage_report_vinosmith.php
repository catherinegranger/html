<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}


$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/vinosmith_wine_export.csv";
$vinosmith_vintage_ids = array();
$vinosmith_vintage_names = array();
$vinosmith_producer_names = array();
$vinosmith_vintage = array();
$error = NULL;

if (($handle = fopen($filename, "r")) !== FALSE) {
  $data = fgetcsv($handle, 1024, ",");
  while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      $vinosmith_vintage[$c] = $data[$c];
    }
    $wine_id = $vinosmith_vintage[0];
    $wine_name = $vinosmith_vintage[1];
    $wine_code = $vinosmith_vintage[2];
    $producer_name = $vinosmith_vintage[4];
    $vinosmith_vintage_ids[$wine_code] = $wine_id;
    $vinosmith_vintage_names[$wine_code] = $wine_name;
    $vinosmith_producer_names[$wine_code] = $producer_name;
  }
  fclose($handle);
}
else {
  $error = "cannot read file ".$filename;
}


$countries[] = NULL;
$appellations[] = NULL;
$regions[] = NULL;
$varietals[] = NULL;
$sql = "SELECT *, country_code.c_id AS country_id, country_code.web_name AS country_web_name,country_code.full_name AS country_name, winery.name AS winery_name, vintage.name AS vintage_name, type.type_id as type_id, type.name as type_name ";
$sql .= " FROM vintage, winery, country_code, type";
$sql .= " WHERE country_code.c_id = winery.c_id and type.type_id = vintage.type_id and vintage.wy_id = winery.wy_id and vintage.inactive = 0 and vintage.item_type = 0 and vintage.grup = 0 and online_store = 1 and vintage.deleted = 0";
$sql .= " ORDER BY  winery.name, vintage.name, vintage.year DESC";
$result = $mydb->runSql($sql);
$vintages[] = array('wine_id' => "Wine ID",
		    'name' => "Name",
		    'product_id' => "Code",
		    'vintage' => "Vintage",
		    'producer_name' => "Producer",
		    'importer' => "Importer",
		    'alcohol' => "Alcohol",
		    'classification' => "Classification",
		    'single_vineyard' => "Single Vineyard",
		    'appellation' => "Appellation",
		    'sub_appellation' => "Sub-Appellation",
		    'region' => "Region",
		    'country' => "Country",
		    'bottle_size' => "Bottle Size",
		    'unit_of_measure' => "Unit of Measure",
		    'grapes' => "Varietals",
		    'description' => "Tasting Sheet Notes",
		    'admin_only' => "Admin Only",
		    'disabled' => "Disabled?",
		    'biodynamic' => "Biodynamic",
		    'organic' => "Organic",
		    'sustainable' => "Sustainable",
		    'category' => "Category",
		    'vineyard' => "Vineyard",
		    'aging' => "Aging",
		    'vinification' => "Vinification",
		    );
$blank = "";
$category = "wine";
$unit_of_measure = "12";
while($row = $mydb->getAssoc($result)) {
  $varietal_sql = "SELECT varietal.v_id AS varietal_id, varietal.name AS varietal_name FROM var_vint, varietal WHERE var_vint.v_id = varietal.v_id AND var_vint.vint_id ='".$row["vint_id"]."'";
  $varietal_result = $mydb->runSql($varietal_sql);
  $varietal_row = $mydb->getAssoc($varietal_result);
  $grapes = $varietal_row["varietal_name"];
  $varietals[$varietal_row["varietal_id"]] = $varietal_row["varietal_name"];
  while ($varietal_row = $mydb->getAssoc($varietal_result)) {
    $grapes = $grapes.", ".$varietal_row["varietal_name"];
    $varietals[$varietal_row["varietal_id"]] = $varietal_row["varietal_name"];
  }
  $countries[$row["country_id"]] = $row["country_name"];
  $regions[$row["appellation"]] = $row["appellation"];
  if ($row["year"] == '0')
    $year = 'NV';
  else
    $year = $row["year"];
  if ($row["alcohol"] == '0')
    $alcohol = '';
  else
    $alcohol = $row["alcohol"];
  if ($row["organic"])
    $organic = "yes";
  $vinification = $row["aging"];
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
  $name = $row["winery_name"]." ".$row["vintage_name"];
  $country = $row["country_name"];
  $region = $row["appellation"];
  $sub_region = $row["appellation"];
  $appellation = $row["appellation"];
  //$description = "";
  $description = $row["notes"];
  $image_url = "http://bluedanubewine.com/img/bottles/".$row["vint_id"].".jpg";
  $size_unit = "ml";
  $bottle_size = $row["size"].$size_unit;
  $case = "12";
  $fullcase = "";
  $frontline = fixCurrency($row["ca_wholesale_price"]);
  $discount = "";
  //$discount = $row["ny_discount3"];
  $vintages[] = array('wine_id' => $vinosmith_vintage_ids[$row["product_id"]],
		      'name' => $vinosmith_vintage_names[$row["product_id"]],
		      'product_id' => $row["product_id"],
		      'vintage' => $year,
		      'producer_name' => $vinosmith_producer_names[$row["product_id"]],
		      'importer' => $blank,
		      'alcohol' => $alcohol,
		      'classification' => $blank,
		      'single_vineyard' => $blank,   
		      'appellation' => $appellation, 
		      'sub_appellation' => $blank, 
		      'region' => $region, 
		      'country' => $country, 
		      'bottle_size' => $bottle_size, 
		      'unit_of_measure' => $unit_of_measure, 
		      'grapes' => $grapes, 
		      'description' => $description, 
		      'admin_only' => $blank, 
		      'disabled' => $blank, 
		      'biodynamic' => $blank, 
		      'organic' => $organic, 
		      'sustainable' => $blank, 
		      'category' => $category, 
		      'vineyard' => $blank, 
		      'aging' => $blank, 
		      'vinification' => $vinification,
		      );
}
$smarty->assign('vintages',$vintages);

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/vintage_report_vinosmith.csv";
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

$report_url = "http://bluedanubewine.com/reports/vintage_report_vinomith.csv";

asort($countries);
asort($regions);
asort($varietals);

$smarty->assign('filename',$report_url);
$smarty->assign('error',$error);
$smarty->assign('countries',$countries);
$smarty->assign('regions',$regions);
$smarty->assign('varietals',$varietals);

	


?>