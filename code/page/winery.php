<?php

if ($two) {
  $smarty->assign('winery_web_name',$two); // for navigation
  $sql = "SELECT * FROM winery WHERE web_name = '".$two."' AND inactive = '0' ";
  $result = $mydb->runSql($sql);
  if ($result) {
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
      $sql .= "  winery.wy_id = vintage.wy_id  AND winery.web_name = '".$two."' AND vintage.inactive = '0' AND vintage.online_store = '1' and vintage.deleted = '0'";
      $sql .= getViewableVintageQuery();
      $sql .= " ORDER BY vintage.name, vintage.year";
      $result = $mydb->runSql($sql);
      while ($row = $mydb->getAssoc($result)) {
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
      $smarty->assign('wines',$wines);
      
      $feeditems = getRelatedBlogItems(100, $winery_name, $two);
      $smarty->assign('feeditems',$feeditems);
      $smarty->assign('feeditems_count',count($feeditems));

	
      $sql = "SELECT winery.wy_id, country_code.web_name AS country_web_name, country_code.full_name AS country_full_name FROM country_code, winery WHERE winery.c_id = country_code.c_id AND winery.web_name = '".$two."' ";
      $result = $mydb->runSql($sql);
      $row = $mydb->getAssoc($result);
      if ($row["wy_id"] > '0') {
          $smarty->assign('country_web_name',$row["country_web_name"]);
          $smarty->assign('country_full_name',$row["country_full_name"]);
      }
      $image_file_dir = dirname(__FILE__)."/../../img/wineries/";
      $introduction_image_file_name = $two.'_introduction_16x9.jpg';
      $introduction_image_file = $image_file_dir.$introduction_image_file_name;
      if (file_exists($introduction_image_file)) {
          $smarty->assign('introduction_image_file_name',$introduction_image_file_name);
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
}

?>