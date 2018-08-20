<?PHP

if ($winery_name && $c_id) {
  $sort_name = removeAccent($winery_name);
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
		  "introduction" => $introduction,
		  "vineyards" => $vineyards,
		  "winemaking" => $winemaking,
		  "winemaking2" => $winemaking2,
		  "sidebar" => $sidebar,
		  "contact" => $contact,
		  "inactive" => $inactive,
		  "deleted" => '0');
				
  if ($mydb->insert("winery",$values)) {
    $_SESSION["winery_name"] = "";
    $_SESSION["web_name"] = "";
    $_SESSION["phonetic_name"] = "";
    $_SESSION["winery_appellation"] = "";
    $_SESSION["phonetic_appellation"] = "";
    $_SESSION["proprietor"] = "";
    $_SESSION["c_id"] = "";
    $_SESSION["website"] = "";
    $_SESSION["established"] = "";
    $_SESSION["details"] = "";
    $_SESSION["introduction"] = "";
    $_SESSION["vineyards"] = "";
    $_SESSION["winemaking"] = "";
    $_SESSION["winemaking2"] = "";
    $_SESSION["sidebar"] = "";
    $_SESSION["contact"] = "";
    $_SESSION["inactive"] = "";
    kickBack('','amn/add_winery','success');
    exit;
  } 
  else {
    kickBack($_POST,'amn/add_winery','error');
    exit;
  }
} 
else {
  kickBack($_POST,'amn/add_winery','error');
  exit;
}

?>