<?PHP

if ($winery_name && $c_id) {
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
  $sort_name = removeAccent($winery_name);
  $params = " WHERE wy_id = '".$wy_id."'";
  if (!$deleted) $deleted = 0;
  $values = array("name" => $winery_name,
		  "web_name" => $web_name,
		  "sort_name" => $sort_name,
		  "phonetic_name" => $phonetic_name,
		  "winery_appellation" => $winery_appellation,
		  "phonetic_appellation" => $phonetic_appellation,
		  "proprietor" => $proprietor,
		  "c_id" => $c_id,
		  "website" => $website,
		  "established" => $established,
		  "details" => $details,
		  "short_description" => $short_description,
		  "introduction" => $introduction,
		  "motto" => $motto,
		  "introduction_img_caption" => $introduction_img_caption,
		  "vineyards" => $vineyards,
		  "winemaking" => $winemaking,
		  "winemaking2" => $winemaking2,
		  "view_webshop" => $view_webshop,
		  "view_ca" => $view_ca,
		  "view_ny" => $view_ny,
		  "view_dist" => $view_dist,
		  "sidebar" => $sidebar,
		  "contact" => $contact,
		  "inactive" => $inactive,
		  "deleted" => $deleted);
				
  if ($mydb->update("winery",$values,$params)) {
    kickBack('','amn/edit_winery/'.$wy_id,'success');
    exit;
  } 
  else {
    kickBack('','amn/edit_winery/'.$wy_id,'error');
    exit;
  }
} 
else {
  kickBack('','amn/edit_winery/'.$wy_id,'error');
  exit;
}

?>