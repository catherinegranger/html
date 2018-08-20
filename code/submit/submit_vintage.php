<?PHP

$is_vintage = TRUE;
if ($item_type > 0) $is_vintage = FALSE;
if ($vintage_name && (($v_id_1 && $wy_id && $type_id) || $grup || !$is_vintage)) {
  if (($bottles == 0) && $is_vintage) $bottles = 1;
  if ($bottles > 1) $grup = 1;
  if (!$bottles_per_case) $bottles_per_case = 12;
  if (!$country_id) $country_id = 0;
  if (!$year) $year = 0;
  if (!$size) $size = 750;
  if (!$alcohol) $alcohol = 0;
  if (!$residual_sugar) $residual_sugar = 0;
  if (!$acidity) $acidity = 0;
  if (!$organic) $organic = 0;
  if (!$low_inventory) $low_inventory = 0;
  if (!$spotlight) $spotlight = 0;
  if (!$top_pick) $top_pick = 0;
  if (!$shipping) $shipping = 0;
  if (!$is_label) $is_label = 0;
  if (!$inactive) $inactive = 0;
  if (!$online_store) $online_store = 0;
  $today = time() - $time_adjust;
  $values = array("name" => $vintage_name,
                  "item_type" => $item_type,
		  "product_id" => $product_id,
		  "upc" => $upc,
		  "ttb" => $ttb,
		  "wy_id" => $wy_id,
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
		  "low_inventory" => $low_inventory,
		  "spotlight" => $spotlight,
		  "top_pick" => $top_pick,
		  "price" => fixCurrency($price),
		  "sale" => fixCurrency($sale),
		  "wineclub_price" => fixCurrency($wineclub_price),
		  "wineclub_sale" => fixCurrency($wineclub_sale),
		  "buying_price" => fixCurrency($buying_price),
		  "landing_price" => fixCurrency($landing_price),
		  "us_distribution_price" => fixCurrency($us_distribution_price),
		  "ca_wholesale_price" => fixCurrency($ca_wholesale_price),
		  "ny_wholesale_price" => fixCurrency($ny_wholesale_price),
		  "ny_discount3" => $ny_discount3,
		  "notes" => $notes,
		  "online_store" => $online_store,
		  "stock" => $stock,
		  "type_id" => $type_id,
		  "grup" => $grup,
		  "bottles" => $bottles,
		  "shipping" => $shipping,
		  "inactive" => $inactive,
		  "is_label" => $is_label,
		  "created" => $today,
		  "deleted" => '0');
					
  if ($_FILES['upload_file']['error'] != '4') {
    $img = new image;
    $img->set_max_size(500000);
    $img->set_directory("img/temp");
    $img->set_tmp_name($_FILES['upload_file']['tmp_name']);
    $img->set_file_size($_FILES['upload_file']['size']);
    $img->set_file_type($_FILES['upload_file']['type']);
    $img->set_file_name($_FILES['upload_file']['name']);
    if ($img->user_file_size < '1') {
      kickBack($_POST,'amn/add_vintage','too_small');
      exit;
    }
    if ($img->user_file_size > $img->max_filesize) {
      kickBack($_POST,'amn/add_vintage','too_big');
      exit;
    }
    $values["image"] = '1';
  }
  if ($mydb->insert("vintage",$values)) {
    $vint_id = $mydb->getID();
    $smarty->assign('added_vint_id',$vint_id);
    for($i=1;$i<6;$i++) {
      if ($_POST["v_id_".${i}]) {
	$values1 = array("vint_id" => $vint_id,
			 "v_id" => $_POST["v_id_".${i}]);
	$mydb->insert("var_vint",$values1);
      }
    }
    updateSearchText($vint_id);
    $to = "catherine@bluedanubewine.com";
    $me = "Catherine Granger";
    $reply = "From: \"".$me."\" <".$to.">";
    $subject = "New Vintage";
    $message = "A new vintage ".$vint_id." ".$vintage_name." was created.";
    mail($to, $subject, $message, $reply);
    if ($review_title && $review_url) {
      $values2 = array("title" => $review_title,
		       "url" => $review_url,
		       "vint_id" => $vint_id);
      $mydb->insert("vint_review",$values2);
    }
    if ($values["image"] == '1') {
      $img->start_copy();
      $img->resize(0,0);
      $img->set_directory("img/bottles");
      $img->set_thumbnail_name($vint_id);
      $img->create_thumbnail();
      $img->set_thumbnail_size(0,0);
      $img->set_directory("img/bottles/thumb");
      $img->set_thumbnail_name($vint_id);
      $img->create_thumbnail();
      $img->set_thumbnail_size(0, 375);
      cleanUpImg();
    }
    $_SESSION["vintage_name"] = "";
    $_SESSION["product_id"] = "";
    $_SESSION["upc"] = "";
    $_SESSION["ttb"] = "";
    $_SESSION["wy_id"] = "";
    $_SESSION["appellation"] = "";
    $_SESSION["year"] = "";
    $_SESSION["size"] = "";
    $_SESSION["alcohol"] = "";
    $_SESSION["residual_sugar"] = "";
    $_SESSION["acidity"] = "";
    $_SESSION["aging"] = "";
    $_SESSION["composition"] = "";
    $_SESSION["climate"] = "";
    $_SESSION["soils"] = "";
    $_SESSION["exposure"] = "";
    $_SESSION["notespairings"] = "";
    $_SESSION["organic"] = "";
    $_SESSION["low_inventory"] = "";
    $_SESSION["spotlight"] = "";
    $_SESSION["top_pick"] = "";
    $_SESSION["price"] = "";
    $_SESSION["sale"] = "";
    $_SESSION["wineclub_price"] = "";
    $_SESSION["wineclub_sale"] = "";
    $_SESSION["buying_price"] = "";
    $_SESSION["landing_price"] = "";
    $_SESSION["us_distribution_price"] = "";
    $_SESSION["ca_wholesale_price"] = "";
    $_SESSION["ny_wholesale_price"] = "";
    $_SESSION["ny_discount3"] = "";
    $_SESSION["online_store"] = "";
    $_SESSION["stock"] = "";
    $_SESSION["notes"] = "";
    $_SESSION["type_id"] = "";
    $_SESSION["grup"] = "";
    $_SESSION["bottles"] = "";
    $_SESSION["shipping"] = "";
    $_SESSION["is_label"] = "";
    $_SESSION["v_id_1"] = "";
    $_SESSION["v_id_2"] = "";
    $_SESSION["v_id_3"] = "";
    $_SESSION["v_id_4"] = "";
    $_SESSION["review_title"] = "";
    $_SESSION["review_url"] = "";
    $_SESSION["inactive"] = "";
    
    kickBack('','amn/add_vintage','success');
    exit;
  } 
  else {
    kickBack($_POST,'amn/add_vintage','error');
    exit;
  }
} 
else {
  kickBack($_POST,'amn/add_vintage','error');
  exit;
}

?>