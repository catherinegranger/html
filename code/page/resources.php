<?PHP

if ($two && $tri) {
  $sql = "SELECT *, r.title AS title, r.web_name AS web_name, rc.title AS rc_title, rc.web_name AS rc_web_name FROM resource AS r, resource_cat AS rc";
  $sql .= " WHERE r.rc_id = rc.rc_id AND r.web_name = '".$tri."'";
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  if ($row["rc_title"]) {
    $resource_id = $row["r_id"];
    $sql2 = "SELECT name, friendly FROM varietal WHERE varietal.resource_id = '".$resource_id."'";
    $result2 = $mydb->runSql($sql2);
    $row2 = $mydb->getAssoc($result2);
    if ($row2) {
      $smarty->assign('varietal_name',$row2["name"]);
      $smarty->assign('varietal_web',$row2["friendly"]);
    }
    foreach($row as $key => $value) {
      $smarty->assign(${key},$value);
    }
  }
  if ($row2) {// varietal
    $varietal_sql = "SELECT winery.wy_id AS winery_id, winery.name AS winery, winery.web_name AS wyweb_name, vintage.vint_id, vintage.product_id, vintage.item_type, vintage.name AS vint_name, vintage.image, vintage.notes, price, sale, wineclub_price, wineclub_sale, year, size, low_inventory, stock, grup, bottles, shipping, vintage.appellation FROM winery, vintage, varietal, var_vint WHERE";
    $varietal_sql .= "  winery.wy_id = vintage.wy_id  AND varietal.friendly = '".$row2["friendly"]."' AND vintage.online_store = '1' and vintage.deleted = '0' ";
    $varietal_sql .= " AND varietal.v_id = var_vint.v_id AND var_vint.vint_id = vintage.vint_id ";
    $varietal_sql .= getViewableVintageQuery();
    $varietal_sql .= " ORDER BY vintage.name, vintage.year";
    $varietal_result = $mydb->runSql($varietal_sql);
    while ($varietal_row = $mydb->getAssoc($varietal_result)) {
      $vintage_length = strlen($varietal_row["vint_name"]);
      if ($varietal_row["sale"] > 0)
	$vintage_length = $vintage_length + 5 + strlen($varietal_row["sale"]);
      if ($varietal_row["low_inventory"] > 0)
	$vintage_length = $vintage_length + 16;
      $wines[] = array('vint_id' => $varietal_row["vint_id"],
			       'product_id' => $varietal_row["product_id"],
			       'item_type' => $varietal_row["item_type"],
			       'vintage' => $varietal_row["vint_name"],
			       'vintage_length' => $vintage_length,
			       'winery_id' => $varietal_row["winery_id"],
			       'wyweb_name' => $varietal_row["wyweb_name"],
			       'winery' => $varietal_row["winery"],
			       'appellation' => $varietal_row["appellation"],
			       'year' => $varietal_row["year"],
			       'size' => $varietal_row["size"],
			       'pretty_year_size' => prettyYearSize($varietal_row["year"], $varietal_row["size"]),
			       'image' => $varietal_row["image"],
			       'notes' => $varietal_row["notes"],
			       'stock' => $varietal_row["stock"],
			       'low_inventory' => $varietal_row["low_inventory"],
			       'grup' => $varietal_row["grup"],
			       'bottles' => $varietal_row["bottles"],
			       'shipping' => $varietal_row["shipping"],
			       'price' => fixCurrency($varietal_row["price"]),
			       'sale' => fixCurrency($varietal_row["sale"]),
			       'wineclub_price' => fixCurrency($varietal_row["wineclub_price"]),
			       'wineclub_sale' => fixCurrency($varietal_row["wineclub_sale"]),
			       );

    }
    $smarty->assign('wines',$wines);
    $smarty->assign('wines_size',sizeof($wines));
  }
} 
elseif ($two) {
  $sql = "SELECT r.r_id, r.title, r.web_name, rc.title AS rc_title, r.img_art, r.resource_url,r.keyword, r.details  FROM resource AS r, resource_cat AS rc";
  $sql .= " WHERE r.deleted = '0' AND rc.deleted = '0' AND r.rc_id = rc.rc_id AND rc.web_name = '".$two."' ORDER BY web_name";
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $resources[] = array('r_id' => $row["r_id"],
			 'title' => $row["title"],
			 'web_name' => $row["web_name"],
			 'resource_url' => $row["resource_url"],
			 'keyword' => $row["keyword"],
			 'img_art' => $row["img_art"],
			 'details' => $row["details"],
			 'rc_title' => $row["rc_title"]);
  }
  $smarty->assign('resources',$resources);	
  //$smarty->assign('resources_size',sizeof($resources));	
} 
$smarty->assign('resource_category',$two);
$smarty->assign('resource_webname',$tri);
?>