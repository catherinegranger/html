<?PHP

$is_vintage = TRUE;
if ($item_type > 0) $is_vintage = FALSE;
if ($vintage_name && (($vv_id && $wy_id && $type_id) || $grup || !$is_vintage)) {
  if (($bottles == 0) && $is_vintage) $bottles = 1;
  if ($bottles_per_case == 0) $bottles_per_case = 12;
  if (($bottles > 1) && ($size == 750)) $grup = 1; // not for magnums
  switch($show) {
      case BDW_SHOW_ALL:
	$view_webshop = 1;
	$view_ca = 1;
	$view_ny = 1;
	$view_dist = 1;
	break;      
      case BDW_SHOW_WEBSHOP_CA_NY:
	$view_webshop = 1;
	$view_ca = 1;
	$view_ny = 1;
	$view_dist = 0;
	break;      
      case BDW_SHOW_WEBSHOP_CA:
	$view_webshop = 1;
	$view_ca = 1;
	$view_ny = 0;
	$view_dist = 0;
	break;      
      case BDW_SHOW_WEBSHOP_ONLY:
	$view_webshop = 1;
	$view_ca = 0;
	$view_ny = 0;
	$view_dist = 0;
	break;      
  }
  $params = " WHERE vint_id = '".$vint_id."'";
  $values = array("name" => $vintage_name,
                  "item_type" => $item_type,
		  "wy_id" => $wy_id,
		  "product_id" => $product_id,
		  "upc" => $upc,
		  "ttb" => $ttb,
		  "appellation" => $appellation,
		  "country_id" => $country_id,
		  "bottles_per_case" => $bottles_per_case,
		  "year" => $year,
		  "size" => $size,
		  "alcohol" => $alcohol,
		  "residual_sugar" => $residual_sugar,
		  "acidity" => $acidity,
		  "aging" => $aging,
		  "composition" => $composition,
		  "climate" => $climate,
		  "soils" => $soils,
		  "exposure" => $exposure,
		  "notespairings" => $notespairings,
		  "organic" => $organic,
		  "grup" => $grup,
		  "bottles" => $bottles,
		  "shipping" => $shipping,
		  "price" => fixCurrency($price),
		  "sale" => fixCurrency($sale),
		  "wineclub_price" => fixCurrency($wineclub_price),
		  "wineclub_sale" => fixCurrency($wineclub_sale),
		  "buying_price" => fixCurrency($buying_price),
		  "landing_price" => fixCurrency($landing_price),
		  "ny_discount3" => $ny_discount3,
		  "notes" => $notes,
		  "low_inventory" => $low_inventory,
		  "online_store" => $online_store,
		  "stock" => $stock,
		  "view_webshop" => $view_webshop,
		  "view_ca" => $view_ca,
		  "view_ny" => $view_ny,
		  "view_dist" => $view_dist,
		  "image" => $image,
		  "type_id" => $type_id,
		  "inactive" => $inactive,
		  "is_label" => $is_label,
		  "deleted" => $deleted);
  if ($mydb->update("vintage",$values,$params)) {
    updateSearchText($vint_id);
    
    $to = "catherine@bluedanubewine.com";
    $me = "Catherine Granger";
    $reply = "From: \"".$me."\" <".$to.">";
    $subject = "Vintage Updated";
    $message = "Vintage ".$vint_id." ".$vintage_name." has been updated.";
    mail($to, $subject, $message, $reply);

    kickBack('','amn/edit_vintage/'.$vint_id,'success');
    exit;
  }		
  else {
    $to = "catherine@bluedanubewine.com";
    $me = "Catherine Granger";
    $reply = "From: \"".$me."\" <".$to.">";
    $subject = "Vintage Not Updated - Error ";
    $message = "Vintage ".$vint_id." ".$vintage_name." has not been updated: ".$_SESSION['error'];
    mail($to, $subject, $message, $reply);
    kickBack('','amn/edit_vintage/'.$vint_id,'error');
    exit;
  }
} 
else {
  kickBack('','amn/edit_vintage/'.$vint_id,'error');
  exit;
}

?>