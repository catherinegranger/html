<?PHP

$successes = $_SESSION["userCakeSuccesses"];
$errors = $_SESSION["userCakeErrors"];
$smarty->assign('uc_successes',$successes);	
$smarty->assign('uc_errors',$errors);
destroySession("userCakeSuccesses");
destroySession("userCakeErrors");

if ($two == 'sampler') {
  $vintage_id = $tri;
}
else {
  $vintage_id = $two;
}
$c_id = 0; // winery navigation

$sql = "SELECT *, v.name AS wine_name, t.name AS type_name, wy.name AS wy_name, wy.web_name AS wyweb_name";
$sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
$sql .= " WHERE v.wy_id = wy.wy_id AND wy.c_id = c.c_id AND v.type_id = t.type_id";
$sql .= " AND v.deleted = '0' AND v.inactive = '0' AND wy.deleted = '0' AND wy.inactive = '0' AND v.vint_id = '".$vintage_id."'";

$result = $mydb->runSql($sql);
if ($result) $row = $mydb->getAssoc($result);
if ((!is_array($row)) && ($two == 'sampler')) { // no type
  $sql = "SELECT *, v.name AS wine_name,  wy.name AS wy_name, wy.web_name AS wyweb_name";
  $sql .= " FROM vintage AS v, winery AS wy, country_code AS c";
  $sql .= " WHERE v.wy_id = wy.wy_id AND wy.c_id = c.c_id ";
  $sql .= " AND v.deleted = '0' AND v.inactive = '0' AND wy.deleted = '0' AND wy.inactive = '0' AND v.vint_id = '".$vintage_id."'";
}
$result = $mydb->runSql($sql);
if ($result) $row = $mydb->getAssoc($result);
if (!is_array($row)) { // no winery or other item?
  $sql = "SELECT *, v.name AS wine_name ";
  $sql .= " FROM vintage AS v";
  $sql .= " WHERE v.deleted = '0' AND v.inactive = '0' AND v.vint_id = '".$vintage_id."'";
  $result = $mydb->runSql($sql);
  if ($result) $row = $mydb->getAssoc($result);
}
if (is_array($row)) {
  $in_stock = $row["stock"];
  if (!$row["online_store"])
    $in_stock = 0;
  $country_id = $row["c_id"];
  $wine_name = $row["wine_name"];
  $wy_name = $row["wy_name"];
  $wyweb_name = $row["wyweb_name"];
  $year = $row["year"];
  $size = $row["size"];
  $wine_fullname = $wine_name;
  $wine_header = $wine_name;
  $wine_country_full_name = $row["full_name"];
  $wine_country_web_name = $row["web_name"];
  if (($row["wy_name"]) && ($row["wy_name"] != 'Specials')) {
    $wine_country_id = $row["country_id"];
    if ($wine_country_id > 0) {
      $wine_country_full_name = getCountryFullName($ncc, $wine_country_id);
      $wine_country_web_name = getCountryWebName($ncc, $wine_country_id);
    }
    $wine_fullname = $row["wy_name"].' '.$wine_fullname;
    $wine_header = $row["wy_name"].' '.$wine_header;
    $winery_name = $row["wy_name"];
    if ($row["appellation"]) {
      $wine_full_appellation = $row["appellation"];
      if ($wine_country_full_name) {
	$wine_full_appellation = $wine_full_appellation.' '.$wine_country_full_name;
      }
    }
    else if ($wine_country_full_name) {
	$wine_full_appellation = $wine_country_full_name;
    }
  }
  if ($year) {
    $wine_fullname = $year.' '.$wine_fullname;
  }
  $pretty_year_size = prettyYearSize($year, $size);
  $wine_header = $wine_header.' '.$pretty_year_size;
  $wineclub_member = isWineClubMemberLoggedIn();
  $actual_price = getActualVintagePrice($row);
  $actual_sale = getActualVintageSale($row);
  $wine_url = 'https://www.bluedanubewine.com/wine/'.$row["vint_id"].'/';
  $wine_image = 'https://www.bluedanubewine.com/img/bottles/'.$row["vint_id"].'.jpg';
  $item_type = $row["item_type"];
  $smarty->assign('wine_fullname', $wine_fullname);
  $smarty->assign('wine_header', $wine_header);
  $smarty->assign('winery_name', $winery_name);
  $smarty->assign('winery_web_name', $wyweb_name);
  $smarty->assign('c_id', $country_id);
  $smarty->assign('wine_country_full_name', $wine_country_full_name);
  $smarty->assign('wine_country_web_name', $wine_country_web_name);
  $smarty->assign('wine_full_appellation', $wine_full_appellation);
  $smarty->assign('wineclub_member', $wineclub_member);
  $smarty->assign('actual_price', $actual_price);
  $smarty->assign('actual_sale', $actual_sale);
  $smarty->assign('wine_url', $wine_url);
  $smarty->assign('wine_image', $wine_image);
  $smarty->assign('pretty_year_size', $pretty_year_size);
  $smarty->assign('in_stock', $in_stock);
  foreach($row as $key => $value) {
    $smarty->assign($key,$value);
  }
}
$sql = "SELECT resource_id, varietal.name AS varietal_name, friendly FROM var_vint, varietal, vintage ";
$sql .= " WHERE var_vint.v_id = varietal.v_id AND var_vint.vint_id = vintage.vint_id ";
$sql .= " AND vintage.vint_id = '".$vintage_id."'";
$result = $mydb->runSql($sql);
if ($result) {
    while ($row = $mydb->getAssoc($result)) {
        $resource_id = $row["resource_id"];
        $resourcesql = "SELECT resource.web_name AS resource_webname FROM resource ";
        $resourcesql .= " WHERE resource.r_id = '".$resource_id."'";
        $resourceresult = $mydb->runSql($resourcesql);
        if ($resourceresult) $resourcerow = $mydb->getAssoc($resourceresult);
        if ($resourcerow) $resource_webname =  $resourcerow["resource_webname"];
        else $resource_webname = "";
        $varietal_title = $varietal_title." ".$row["varietal_name"];
        $varietals[] = array('name' => $row["varietal_name"],
				 'friendly' => $row["friendly"],
				 'resource_id' => $row["resource_id"],
                 'resource_webname' => $resource_webname
				 );
    }
    $smarty->assign('varietals',$varietals);
    $smarty->assign('varietal_title',$varietal_title);
}
$sql = "SELECT title, url, rev_id FROM vint_review WHERE vint_id ='".$vintage_id."'";
$result = $mydb->runSql($sql);
if ($result) {
    while ($row = $mydb->getAssoc($result)) {
        $reviews[] = array('title' => $row["title"],
			       'url' => $row["url"],
			       'rev_id' => $row["rev_id"]);
    }
    $smarty->assign('reviews',$reviews);
}
if ($wine_name) {
    $wineweb_name = str_replace("'s",'s',$wineweb_name);
    $wineweb_name = prettyString($wine_name,$bad_stuff);
    $wineweb_name = unSlav($wineweb_name);
    $wineweb_name = unSpan($wineweb_name);
    $wineweb_name = unGerm($wineweb_name);
    $wineweb_name = unHun($wineweb_name);
    $wineweb_name = str_replace(' ','_',$wineweb_name);
    $complete_name = strtolower($wyweb_name)."_".strtolower($wineweb_name);
    $remove[] = "'";
    $remove[] = '"';
    $complete_name = str_replace( $remove, "", $complete_name);
    if ($year == 0)
        $tech_file_new_name = $complete_name.'.pdf';
    else
        $tech_file_new_name = $complete_name."_".$year.'.pdf';
    $wine_file_dir = dirname(__FILE__)."/../../techsheets/";
    $new_tech_file = $wine_file_dir.$tech_file_new_name;
    if (file_exists($new_tech_file)) {
        $tech_file_name = $tech_file_new_name;
    }
    $smarty->assign('tech_file_name', $tech_file_name);
    $smarty->assign('tech_file_new_name', $tech_file_new_name);
    $smarty->assign('tech_sheet_name', $new_tech_file);
    $smarty->assign('result', $result);
    $smarty->assign('wy_name', $wy_name);
    $smarty->assign('other_image', TRUE);
}
if  ($wy_name) {
  $smarty->assign('other_image', FALSE);
  $sql = "SELECT winery.wy_id AS winery_id, winery.name AS winery, winery.web_name AS wyweb_name, vint_id, product_id, item_type, vintage.name AS vint_name, image, notes, price, sale, wineclub_price, wineclub_sale, year, size, low_inventory, stock, grup, bottles, shipping, appellation, is_label FROM winery, vintage WHERE";
  $sql .= " winery.wy_id = vintage.wy_id AND winery.web_name = '".$wyweb_name."' AND vintage.online_store = '1' AND vintage.stock = '1' AND vintage.inactive = '0' AND vintage.deleted = '0'";
  $sql .= getViewableVintageQuery();
  $sql .= " ORDER BY vintage.name, vintage.year";
  $result = $mydb->runSql($sql);
  while ($result && ($row = $mydb->getAssoc($result))) {
    if ($row["item_type"] == BDW_LINE_ITEM_WINE) {
      $vintage_length = strlen($row["vint_name"]);
      if ($row["sale"] > 0)
	$vintage_length = $vintage_length + 5 + strlen($row["sale"]);
      if ($row["low_inventory"] > 0)
	$vintage_length = $vintage_length + 16;
      $wines[] = array('vint_id' => $row["vint_id"],
		     'product_id' => $row["product_id"],
		     'item_type' => $row["item_type"],
		     'vintage' => $row["vint_name"],
		     'vintage_length' => $vintage_length,
		     'winery_id' => $row["winery_id"],
		     'wyweb_name' => $row["wyweb_name"],
		     'winery' => $row["winery"],
		     'appellation' => $row["appellation"],
		     'year' => $row["year"],
		     'size' => $row["size"],
		     'pretty_year_size' => prettyYearSize($row["year"], $row["size"]),
		     'image' => $row["image"],
		     'notes' => $row["notes"],
		     'stock' => $row["stock"],
		     'low_inventory' => $row["low_inventory"],
		     'grup' => $row["grup"],
		     'bottles' => $row["bottles"],
		     'shipping' => $row["shipping"],
		     'is_label' => $row["is_label"],
		     'price' => getActualVintagePrice($row),
		     'sale' => getActualVintageSale($row),
		     'wineclub_price' => fixCurrency($row["wineclub_price"]),
		     'wineclub_sale' => fixCurrency($row["wineclub_sale"]),
		       );
    }
  }
  $smarty->assign('wines',$wines);
}
else if ($item_type > 0) {
  $sql = "SELECT *, vintage.name AS vintage_name ";
  $sql .= " FROM vintage ";
  $sql .= " WHERE vintage.deleted = '0' AND vintage.inactive = '0' AND vintage.online_store = '1' AND  vintage.stock = '1' AND vintage.item_type > 0 ";
  $result = $mydb->runSql($sql);
  while ($result && ($row = $mydb->getAssoc($result))) {
    $vintage_length = strlen($row["vint_name"]);
    if ($row["sale"] > 0)
      $vintage_length = $vintage_length + 5 + strlen($row["sale"]);
    if ($row["low_inventory"] > 0)
      $vintage_length = $vintage_length + 16;
    $wines[] = array('vint_id' => $row["vint_id"],
		     'product_id' => $row["product_id"],
		     'item_type' => $row["item_type"],
		     'vintage' => $row["vintage_name"],
		     'vintage_length' => $vintage_length,
		     'winery_id' => $row["winery_id"],
		     'wyweb_name' => $row["wyweb_name"],
		     'winery' => $row["winery"],
		     'appellation' => $row["appellation"],
		     'year' => $row["year"],
		     'size' => $row["size"],
		     'pretty_year_size' => prettyYearSize($row["year"], $row["size"]),
		     'image' => $row["image"],
		     'notes' => $row["notes"],
		     'stock' => $row["stock"],
		     'low_inventory' => $row["low_inventory"],
		     'grup' => $row["grup"],
		     'bottles' => $row["bottles"],
		     'shipping' => $row["shipping"],
		     'is_label' => $row["is_label"],
		     'price' => getActualVintagePrice($row),
		     'sale' => getActualVintageSale($row),
		     'wineclub_price' => fixCurrency($row["wineclub_price"]),
		     'wineclub_sale' => fixCurrency($row["wineclub_sale"]),
		     );
  }
  $smarty->assign('wines',$wines);
}

?>