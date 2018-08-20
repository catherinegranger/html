<?php

$file_name = $smarty->getTemplateDir('one').'regions/'.$two.'.tpl';
$smarty->assign('region_file_name',$file_name);

if ($two) {
   $region_template_file = $smarty->getTemplateDir('one').'regions/'.$two.'.tpl';
  if (file_exists($region_template_file)) {
    $smarty->assign('regionContent', $smarty->fetch($region_template_file));
    $sql = "SELECT c_id FROM country_code  WHERE web_name = '".$two."' ";
    $result = $mydb->runSql($sql);
    $row = $mydb->getAssoc($result);
    $smarty->assign('c_id',$row["c_id"]); // for navigation

    $country_webname = $two;
    if (stripos($country_webname, "bosnia") !== FALSE) {
      $country_webname = "bosnia";
    }
    $country_name = $two;
    $feeditems = getRelatedBlogItems(100, $country_name, $country_webname);
    $smarty->assign('feeditems',$feeditems);
    $smarty->assign('feeditems_count',count($feeditems));

    $sql = "SELECT SQL_CACHE winery.wy_id AS winery_id, winery.name AS winery, winery.web_name AS wyweb_name, vint_id, product_id, item_type, vintage.name AS vint_name, image, notes, price, sale, wineclub_price, wineclub_sale, year, size, low_inventory, stock, grup, bottles, shipping, appellation ";
    $sql .= " FROM country_code, winery, vintage WHERE ";
    $sql .= " winery.wy_id = vintage.wy_id AND winery.c_id = country_code.c_id AND vintage.online_store = '1' and vintage.deleted = '0' AND vintage.stock = '1' AND  vintage.grup = '0' AND  vintage.item_type = '0' AND vintage.image = '1'";
    $sql .= getViewableVintageQuery();
    $sql .= " AND country_code.web_name = '".$two."'";
    $sql .= " ORDER BY RAND() LIMIT 3 ";
    $result = $mydb->runSql($sql);
    while($row = $mydb->getAssoc($result)) {
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
				 'price' => fixCurrency($row["price"]),
				 'sale' => fixCurrency($row["sale"]),
				 'wineclub_price' => fixCurrency($row["wineclub_price"]),
				 'wineclub_sale' => fixCurrency($row["wineclub_sale"]),
				 );
    }
    //$wine_rand = randomArray($wines, 3);
    $smarty->assign('wines',$wines);
    $smarty->assign('regionName',ucwords(strtolower(str_replace('_',' ',$two))));
  }
  else {
    kickBack('','','','');
  }
}




?>