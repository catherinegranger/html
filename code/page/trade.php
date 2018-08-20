<?php

if ((!isUserFromTrade()) && (!isAdminLoggedin())) {
  //$_SESSION["redirectPage"] = $one;
  //kickBack("", "login", "");
  //exit;
}

$price_list_ca_dir = dirname(__FILE__)."/../../bdwca/";
$price_list_ny_dir = dirname(__FILE__)."/../../bdwny/";
$price_list_ca_name = "BDWCAPriceBook1216.pdf";
$price_list_ny_name = "BDWNYPriceBook1216.pdf";
$price_list_ca_file = $price_list_ca_dir.$price_list_ca_name;
$price_list_ca_url = "/bdwca/".$price_list_ca_name;
$price_list_ny_file = $price_list_ny_dir.$price_list_ny_name;
$price_list_ny_url = "/bdwny/".$price_list_ny_name;
if (isTradeCALoggedin()) $smarty->assign('price_list',$price_list_ca_url);
if ((isTradeCALoggedin()) && (file_exists($price_list_ca_file))) {
  $smarty->assign('price_list_url',$price_list_ca_url);
}
else if ((isTradeNYLoggedin()) && (file_exists($price_list_ny_file))) {
  $smarty->assign('price_list_url',$price_list_ny_url);
}


if ($two) {
  $sql = "SELECT * FROM winery WHERE";
  $sql .= " web_name = '".$two."' ";
  $result = $mydb->runSql($sql);
  $rowed = $mydb->getAssoc($result);
  if ($rowed["wy_id"] > '0') {
    foreach($rowed as $k => $v){
      $smarty->assign(${k},$v);
    }
  }

  $wine_file_dir = dirname(__FILE__)."/../../techsheets/";
  $sql = "SELECT vintage.name AS vint_name, image, notes, vint_id, price, sale, size, vintage.view_webshop,vintage.view_ca,vintage.view_ny,vintage.view_dist,  year FROM winery, vintage WHERE";
  $sql .= " winery.wy_id = vintage.wy_id AND winery.web_name = '".$two."' AND vintage.inactive = '0' and vintage.deleted = '0'";
  $sql .= " ORDER BY vintage.name, vintage.year";
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    if (canShow($row["view_webshop"], $row["view_ca"], $row["view_ny"], $row["view_dist"])) {
      $tech_file_exists = 0;
      $wineweb_name = prettyString($row["vint_name"], $bad_stuff);
      $wineweb_name = unSlav($wineweb_name);
      $wineweb_name = unSpan($wineweb_name);
      $wineweb_name = unGerm($wineweb_name);
      $wineweb_name = unHun($wineweb_name);
      $wineweb_name = str_replace(' ','_',$wineweb_name);
      $complete_name = strtolower($two)."_".strtolower($wineweb_name);
      if ($row["year"] == 0)
	$tech_file_new_name = $complete_name.'.pdf';
      else
	$tech_file_new_name = $complete_name."_".$row["year"].'.pdf';
      $full_tech_file = $wine_file_dir.$tech_file_new_name;
      if (file_exists($full_tech_file)) {
	$tech_file_exists = 1;
      }
      $wines[] = array('name' => $row["vint_name"],
		       'tech_file_exists' => $tech_file_exists,
		       'tech_file_name' => $tech_file_new_name,
		       'image' => $row["image"],
		       'notes' => $row["notes"],
		       'vint_id' => $row["vint_id"],
		       'price' => $row["price"],
		       'sale' => $row["sale"],
		       'size' => $row["size"],
		       'year' => $row["year"]);
    }
    $smarty->assign('wines',$wines);
  }
}

?>