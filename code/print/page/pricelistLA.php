<?PHP

$root_file_dir = dirname(__FILE__)."/../../..";


function getPrettyWineName($vintage) {
  $pretty_name = "";
  if ((isset($vintage["winery_name"])) && ($vintage["winery_name"] != "Specials"))
    $pretty_name .= $vintage["winery_name"]." ";
  $pretty_name .= $vintage["vintage_name"];
  if ($vintage["year"] > 0) 
    $pretty_name .= " ".$vintage["year"];
  if ($vintage["size"] > 0) 
     $pretty_name .= " (".prettySize($vintage["size"]).")";
  return($pretty_name);
}

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$country_vintages = array();

$sql = "SELECT country_code.c_id AS c_id, country_code.web_name AS web_name, country_code.full_name AS full_name FROM country_code, winery WHERE winery.c_id = country_code.c_id AND country_code.deleted = '0' AND winery.inactive = '0' AND winery.deleted = '0'";
$sql .= " GROUP BY country_code.c_id ORDER BY country_code.full_name";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $all_countries[] = array('c_id' => $row["c_id"],
			   'web_name' => $row["web_name"],
			   'full_name' => $row["full_name"]);
}


$sql = "SELECT *, country_code.c_id AS winery_country_id, country_code.web_name AS country_web_name,country_code.full_name AS country_name,country_code.description AS country_description, winery.name AS winery_name, winery.web_name AS winery_web_name, vintage.name AS vintage_name, type.type_id as type_id, type.name as type_name ";
$sql .= " FROM vintage, winery, country_code, type";
$sql .= " WHERE country_code.c_id = winery.c_id AND type.type_id = vintage.type_id AND vintage.wy_id = winery.wy_id AND vintage.ca_wholesale_price > 0  AND at_event2 > 0 AND vintage.inactive = 0 AND vintage.deleted = 0";
$sql .= " ORDER BY country_code.full_name, winery.sort_name, vintage.name, vintage.year, vintage.size";
$result = $mydb->runSql($sql);
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
  $residual_sugar = $row["residual_sugar"];
  $acidity = $row["acidity"];
  $features = "";
  $type_id = $row["type_id"];
  $product_subtype = "Still";
  $product_style = $row["type_name"];
  if ($type_id == 4) {
    $product_subtype = "Sparkling";
    $product_style = "";
  }
  //else if ($type_id == 6) { $product_style = "Dessert Wine";  }
  if ($row["organic"])
    $features = "Organic";
  $country = $row["country_name"];
  $wine_country_full_name = $row["country_name"];
  $wine_country_web_name = $row["country_web_name"];
  if ($row["country_id"] > 0) {
    $wine_country_full_name = getCountryFullName($all_countries, $row["country_id"]);
    $wine_country_web_name = getCountryWebName($all_countries, $row["country_id"]);
  }
  $region = $row["appellation"];
  $appellation = $row["appellation"];
  //$description = "";
  $description = $row["notes"];
  $bottle_img_name = "/img/bottles/".$row["vint_id"].".jpg";
  $nobottle_img_name = "/img/bottles/0.jpg";
  $bottle_img_file = $root_file_dir.$bottle_img_name;
  if (!file_exists($bottle_img_file)) 
    $bottle_img_file = $root_file_dir.$nobottle_img_name;
  $image_url = "https://bluedanubewine.com/img/bottles/".$row["vint_id"].".jpg";
  $producer_image_url = "https://bluedanubewine.com/img/wineries/".$row["winery_web_name"]."_pricelist.jpg";
  $size_unit = "mL";
  $container = "bottle";
  $case = $row["bottles_per_case"];
  $fullcase = "";
  $frontline = fixCurrency($row["ca_wholesale_price"]);
  $discount = "";
  //$discount = $row["ny_discount3"];
  $vintage_array = array('product_id' => $row["product_id"],
			 'status' => "Available",
			 'product_type' => "Wine",
			 'product_subtype' => $product_subtype,
			 'product_style' => $product_style,
			 'producer_name' => $row["winery_name"],
			 'producer_webname' => $row["winery_web_name"],
			 'producer_description' => $row["short_description"],
			 'producer_image_file' => "/img/wineries/".$row["winery_web_name"]."_pricelist.jpg",
			 'producer_image_url' => $producer_image_url,
			 'producer_image' => $row["short_description"],
			 'product_name' => $row["vintage_name"],
			 'pretty_name' => getPrettyWineName($row),
			 'year' => $year,
			 'grapes' => $grapes,
			 'country_id' => $row["winery_country_id"],
			 'country' => $wine_country_full_name,
			 'region' => $region,
			 'appellation' => $appellation,
			 'description' => $description,
			 'image_file' => "/img/bottles/".$row["vint_id"].".jpg",
			 'image_url' => $image_url,
			 'features' => $features,
			 'alcohol' => $alcohol,
			 'residual_sugar' => $residual_sugar,
			 'acidity' => $acidity,
			 'size' => $row["size"],
			 'size_unit' => $size_unit,
			 'container' => $container,
			 'case' => $case,
			 'fullcase' => $fullcase,
			 'frontline' => $frontline,
			 'frontline_case' => fixCurrency($case*$frontline),
			 'discount' => $discount
		      );

  $country_names[$row["winery_country_id"]] = $row["country_name"];
  $country_descriptions[$row["winery_country_id"]] = $row["country_description"];
  $vintages[] = $vintage_array;
  $country_vintages[$row["winery_country_id"]][] = $vintage_array;
}
$smarty->assign('country_names',$country_names);
$smarty->assign('country_vintages',$country_vintages);
$smarty->assign('country_descriptions',$country_descriptions);
$smarty->assign('vintages',$vintages);
$smarty->assign('sql',$sql);



?>