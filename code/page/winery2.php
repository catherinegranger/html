<?php

function isTagged2($clean_category, $clean_tag) {
  if (stripos($clean_category, $clean_tag) !== FALSE) {
    return(TRUE);
  }
  return(FALSE);
}

function getRelatedCategories($maxitems, $name, $webname) {
  $log = "Related categories for ".$name." and ".$webname.": ";
  $clean_name = removeAccent($name);
  $rss = fetchFixFeed('https://bluedanubewine.com/blog/feed/index.php');
  $regular_expression = '~src="[^"]*"~';
  $regular_expression2 =  '#<(\w+)\s[^>]*(class|id)\s*=\s*[\'"](' . 'wp-caption aligncenter' . 
    ')[\'"][^>]*>.*</\\1>#isU'; 
  $regular_expression3 =  '#<(\w+)\s[^>]*(class|id)\s*=\s*[\'"](' . 'wp-caption alignright' . 
    ')[\'"][^>]*>.*</\\1>#isU'; 
  $items = array_slice($rss->items, 0, $maxitems);
  $counter = 0;
  foreach ($items as $item) {
    $content = $item['content'];
    $encoded = $content['encoded'];
    $encoded2 = $content['encoded'];
    preg_match_all($regular_expression, $encoded2, $allimages);
    $imagecount = count($allimages[0]);
    if ($imagecount > 0) {
      $str1=$allimages[0][0];
      $str1=trim($str1);
      $len=strlen($str1);
      $imgpath=substr_replace(substr($str1,5,$len),"",-1);
      if (strpos($imgpath, 'http://') !== FALSE)
	$imgpath=substr_replace($imgpath,"https",0,4);
    }
    $encoded2 = preg_replace($regular_expression2, '', $encoded); // center caption
    $encoded3 = preg_replace($regular_expression3, '', $encoded); // right caption
    $cleaned = strip_tags($encoded2); // center caption
    $cleaned = removeAccent($cleaned);
    $cleaned = trim($cleaned);
    $categories = $item['category'];
    $clean_categories = removeAccent($categories);
    if ((isTagged($clean_categories, $clean_name)) || (isTagged($clean_categories, $webname))) {
      $log .= " match: ".$categories;
    }
    else {
      $log .= " no match: ".$categories;
    }
  }
  return($log);
  }

if ($two) {
$smarty->assign('winery_web_name',$two); // for navigation

  $sql = "SELECT * FROM winery WHERE web_name = '".$two."' ";
  $result = $mydb->runSql($sql);
  $rowed = $mydb->getAssoc($result);
  $winery_name = $rowed["name"];
  if ($rowed["wy_id"] > '0') {
    $winery_name = $rowed["name"];
    $winery_details = $rowed["details"];
    foreach($rowed as $k => $v){
      $smarty->assign(${k},$v);
    }
  }

  $sql = "SELECT winery.wy_id AS winery_id, winery.name AS winery, winery.web_name AS wyweb_name, vint_id, product_id, item_type, vintage.name AS vint_name, image, notes, price, sale, wineclub_price, wineclub_sale, year, size, low_inventory, stock, grup, bottles, shipping, appellation FROM winery, vintage WHERE";
  $sql .= "  winery.wy_id = vintage.wy_id  AND winery.web_name = '".$two."' AND vintage.online_store = '1' and vintage.deleted = '0'";
  $sql .= " ORDER BY vintage.name, vintage.year";
  $result = $mydb->runSql($sql);
  $counter = 0;
  while ($row = $mydb->getAssoc($result)) {
    $vintage_length = strlen($row["vint_name"]);
    if ($row["sale"] > 0)
      $vintage_length = $vintage_length + 5 + strlen($row["sale"]);
    if ($row["low_inventory"] > 0)
      $vintage_length = $vintage_length + 16;
    $wines[$counter++] = array('vint_id' => $row["vint_id"],
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
  $smarty->assign('wines',$wines);

  $feeditems = getRelatedBlogItems(100, $winery_name, $two);
  $smarty->assign('feeditems',$feeditems);
  $smarty->assign('feeditems_count',count($feeditems));

  $log = getRelatedCategories(100, $winery_name, $two);
  $smarty->assign('log',$log);
	
  $sql = "SELECT winery.wy_id, country_code.web_name AS country_web_name, country_code.full_name AS country_full_name FROM country_code, winery WHERE winery.c_id = country_code.c_id AND winery.web_name = '".$two."' ";
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  if ($row["wy_id"] > '0') {
    $smarty->assign('country_web_name',$row["country_web_name"]);
    $smarty->assign('country_full_name',$row["country_full_name"]);
  }

  $og_title = $winery_name;
  $clean_details = strip_tags($winery_details);
  if (strlen($clean_details) > 150) {
    $clean_details = wordwrap($clean_details, 150);
    $clean_details = substr($clean_details, 0, strpos($clean_details, "\n"));
  }
  $og_description = $clean_details."...";
  $smarty->assign('og_title',$og_title);
  $smarty->assign('og_description',$og_description);

  //$file_dir = dirname(__FILE__)."/";
  //include_once($file_dir.'../../resources/UberGallery.php');
  //$gallery = UberGallery::init()->createGallery('../../img/wineries/kabaj-folder'); 
  //$smarty->assign('gallery',$gallery);

}

?>