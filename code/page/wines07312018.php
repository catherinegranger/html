<?PHP

function getNew($vintage, $last_3_months) {
  if (($vintage["vcreated"] > $last_3_months) && ($vintage["sale"] == 0))
    return(1);
  return(0);
}

function getUrl($vintage) {
  $url = "/wine/";
  if ($vintage["grup"])
    $url.= "sampler/";
  $url.= $vintage["vint_id"]."/";
  return($url);
}

function getTitle($vintage) {
  $title = "";
  if ((isset($vintage["winery"])) && ($vintage["winery"] != "Specials"))
    $title .= $vintage["winery"]." ";
  $title .= $vintage["vint_name"];
  if ($vintage["year"] > 0)
    $title .= " ".$vintage["year"];
  return($title);
}

function getPrettyWineryName($vintage) {
  $winery_name = NULL;
  if ((isset($vintage["winery"])) && ($vintage["winery"] != "Specials"))
    $winery_name .= $vintage["winery"];
  return($winery_name);
}

function getImageFile($vint_id, $isThumb) {
  $base_dir = dirname(__FILE__)."/../..";
  if ($isThumb)
    $image_file = "/img/bottles/thumb/".$vint_id.".jpg";
  else
    $image_file =  "/img/bottles/".$vint_id.".jpg";
  if (file_exists($base_dir.$image_file)) {
    if ($isThumb) {
      list($image_width, $image_height) = getimagesize($base_dir.$image_file);
      if ($image_width < 55) 
	$image_file =  "/img/bottles/".$vint_id.".jpg";
    }
  }
  else {
    if ($isThumb)
      $image_file = "/img/bottles/thumb/0.jpg";
    else
      $image_file = "/img/bottles/0.jpg";
  }
  return($image_file);
}

function getImageDirFile($vint_id, $isThumb) {
  $base_dir = dirname(__FILE__)."/../..";
  if ($isThumb)
    $image_file = "/img/bottles/thumb/".$vint_id.".jpg";
  else
    $image_file =  "/img/bottles/".$vint_id.".jpg";
  return($base_dir.$image_file);
}

function getTruncatedNotes($vintage) {
  $truncation = 85;
  $notes = stripTags($vintage["vintage_notes"]);
  $vintage_length = strlen($vintage["vint_name"]);
  if ($vintage["sale"] > 0)
    $vintage_length += strlen($vintage["sale"]) + 5;
  if ($vintage["low_inventory"] > 0)
    $vintage_length += 16;
  if ($vintage["sale"] > 0)
    $notes = "WAS ".$vintage["price"]." ".$notes;
  if ($vintage["low_inventory"])
    $notes = "Low inventory. ".$notes;  
  if ($vintage["year"] > 0) { // takes 1 more line
    if ($vintage_length > 35) 
      $truncation = 55;
    else if ($vintage_length > 21)
      $truncation = 65;
  }
  else {
    if ($vintage_length > 35) 
      $truncation = 60;
    else if ($vintage_length > 21)
      $truncation = 75;
  }
  return(substr($notes, 0, $truncation));
}

function getProduct($vintage, $last_3_months) {
  $vintage["price"] = getActualVintagePrice($vintage);
  $vintage["sale"] = getActualVintageSale($vintage);
  if ($vintage["item_type"] > 0) { 
    return(array('vint_id' => $vintage["vint_id"],
		 'item_type' => $vintage["item_type"],
		 'product_id' => $vintage["product_id"],
		 'vintage' => $vintage["vint_name"],
		 'image_file' => getImageFile($vintage["vint_id"], TRUE),
		 'notes' => $vintage["vintage_notes"],
		 'truncated_notes' => getTruncatedNotes($vintage),
		 'new' => getNew($vintage, $last_3_months),
		 'stock' => $vintage["stock"],
		 'low_inventory' => $vintage["low_inventory"],
		 'grup' => $vintage["grup"],
		 'bottles' => $vintage["bottles"],
		 'shipping' => $vintage["shipping"],
		 'price' => $vintage["price"],
		 'sale' => $vintage["sale"],
		 'wineclub_price' => fixCurrency($vintage["wineclub_price"]),
		 'wineclub_sale' => fixCurrency($vintage["wineclub_sale"]),
		 'pretty_winery_name' => getPrettyWineryName($vintage),
		 'url' => getUrl($vintage),
		 'title' => getTitle($vintage),
		 ));
  }
  else {
    $country_id = $vintage["country_id"];
    if ($country_id == 0)
        $country_id = $vintage["c_id"];
    $country = getCountry($country_id);
    return(array('vint_id' => $vintage["vint_id"],
		 'item_type' => $vintage["item_type"],
		 'product_id' => $vintage["product_id"],
		 'vintage' => $vintage["vint_name"],
		 'winery_id' => $vintage["winery_id"],
		 'wyweb_name' => $vintage["wyweb_name"],
		 'winery' => $vintage["winery"],
		 'appellation' => $vintage["appellation"],
		 'year' => $vintage["year"],
		 'size' => $vintage["size"],
		 'type' => $vintage["type_name"],
		 'image_file' => getImageFile($vintage["vint_id"], TRUE),
		 'notes' => $vintage["vintage_notes"],
		 'truncated_notes' => getTruncatedNotes($vintage),
		 'new' => getNew($vintage, $last_3_months),
         'country_id' => $country["c_id"],
         'country' => $country["full_name"],
         'country_webname' => $country["web_name"],
		 'stock' => $vintage["stock"],
		 'low_inventory' => $vintage["low_inventory"],
		 'grup' => $vintage["grup"],
		 'bottles' => $vintage["bottles"],
		 'shipping' => $vintage["shipping"],
		 'price' => $vintage["price"],
		 'sale' => $vintage["sale"],
		 'wineclub_price' => fixCurrency($vintage["wineclub_price"]),
		 'wineclub_sale' => fixCurrency($vintage["wineclub_sale"]),
		 'pretty_year_size' => prettyYearSize($vintage["year"], $vintage["size"]),
		 'pretty_winery_name' => getPrettyWineryName($vintage),
		 'url' => getUrl($vintage),
		 'title' => getTitle($vintage),
		 ));
  }
}

function getSearchSql($criteria, $last_3_months, $countries, $varietals, $search_keywords, $wine_only, $limit) {
  $wine_only_sql = "";
  if ($wine_only) 
    $wine_only_sql = " AND grup = '0' AND v.item_type = 0 ";
  $order_by_sql = NULL;
  if ($limit) {
    $order_by_sql = " ORDER BY RAND() ";
  }
  if ($criteria == 'samplers') {
    $sql = "SELECT SQL_CACHE *, c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND grup = '1'";
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif ($criteria == 'specials') {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND sale > 0";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif ($criteria == 'new') {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= "  AND sale = '0' AND v.created > '".$last_3_months."'";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif ($criteria == 'organic') {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND v.organic = '1' ";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif ($criteria == 'magnums') {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND v.size = '1500'";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif (($criteria == 'others') || ($criteria == 'books')) {
    $sql = "SELECT SQL_CACHE *, v.name AS vint_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.item_type > 0";
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY v.name";
  } 
  elseif ($criteria == 'toppicks') {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND top_pick > 0";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year ";
  } 
  elseif (($criteria == "red") || ($criteria == "white") || ($criteria == "rose") || ($criteria == "sparkling") || ($criteria == "dessert")) {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name, v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND t.name = '".$criteria."'";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif ($criteria == "tokaj")  {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND appellation = '".$criteria."'";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif  ($criteria == "somlo")  {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND appellation like 'soml%' ";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif ($criteria == "istria")  {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND (appellation like '".$criteria."' OR appellation like 'koper' OR appellation like 'kras')";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif ($criteria == "slocro")  {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND (c.web_name = 'croatia' OR c.web_name = 'slovenia')";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  }
  elseif ($criteria == "monthly_offer")  {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND (wy.wy_id = 118 OR wy.wy_id = 94) ";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, v.name, v.year";
  } 
  elseif ($criteria == "bluegrape")  {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name, v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t, varietal AS var, var_vint AS vv";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND (var.friendly = 'Blaufrankisch' || var.friendly = 'Kekfrankos')";
    $sql .= " AND var.v_id = vv.v_id AND vv.vint_id = v.vint_id";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, t.name, v.name, v.year";
  } 
  elseif (in_array($criteria,$countries)) {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated, c.web_name AS country_web_name";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND c.web_name = '".$criteria."'";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, t.name, v.name, v.year";
  } 
  elseif (in_array($criteria,$varietals)) {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name, v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t, varietal AS var, var_vint AS vv";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND var.friendly = '".$criteria."'";
    $sql .= " AND var.v_id = vv.v_id AND vv.vint_id = v.vint_id";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, t.name, v.name, v.year";
  } 
  elseif ($search_keywords) {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND match (v.search_text) against ('".$search_keywords."' IN BOOLEAN MODE)" ;
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, t.name, v.name, v.year";
  } 
  elseif ($criteria == 'all') {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, t.name, v.name, v.year";
  }
  elseif (isset($criteria)) {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= " AND match (v.search_text) against ('".$criteria."' IN BOOLEAN MODE)" ;
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, t.name, v.name, v.year";
  }
  else {
    $sql = "SELECT SQL_CACHE *,  c.web_name AS country_webname, wy.wy_id AS winery_id, wy.name AS winery, wy.web_name AS wyweb_name, v.name AS vint_name, t.name AS type_name,  v.notes AS vintage_notes, v.created AS vcreated";
    $sql .= " FROM vintage AS v, winery AS wy, country_code AS c, type AS t";
    $sql .= " WHERE v.deleted = '0' AND v.online_store = '1' AND v.stock = '1' AND v.price > '0' AND v.wy_id = wy.wy_id AND v.type_id = t.type_id AND wy.c_id = c.c_id";
    $sql .= $wine_only_sql;
    if ($order_by_sql) 
      $sql .= $order_by_sql;
    else 
      $sql .= " ORDER BY c.full_name, wy.sort_name, t.name, v.name, v.year";
  }
  if ($limit)
    $sql .= " LIMIT ".$limit;
  return($sql);
}


$last_3_months = time() - (9 * 7 * 24 * 60 * 60 * 3);
$search_all = FALSE;
$search_by_country = FALSE;
$search_by_type = FALSE;
$search_by_style = FALSE;
$search_by_varietal = FALSE;
$search_keywords = NULL;
$keyword_match = NULL;
$other_wines = NULL;
$other_items = NULL;
$magnums = NULL;
$new_arrivals = NULL;
$organic_wines = NULL;
$specials = NULL;
$austria = NULL;
$bosnia = NULL;
$croatia = NULL;
$georgia = NULL;
$hungary = NULL;
$serbia = NULL;
$slovenia = NULL;
$turkey = NULL;
$limit = NULL;
$wine_only = FALSE;

if (!isset($two))
  $two = "all";
else if ($two == 'books') 
  $two = 'others';
else if ($two == 'giftcard') {
  kickBack('','giftcard', '');
  exit;
}

if (($_SESSION["entry"]) && (isset($search)) && (strlen($search) > 0)) 
  $search_keywords = $search; // filter from search box
else if ($two == 'all') 
  $search_all = TRUE;  // default

if ((isset($two)) && (strpos($two, ' ') !== FALSE)) { // combined keywords?
  $index = strpos($two, ' ');
  $smarty->assign('index',$index);
  $keyword1 = substr($two, 0, $index); 
  $keyword2 = substr($two, $index+1); 
  $smarty->assign('keyword1',$keyword1);
  $smarty->assign('keyword2',$keyword2);
  $keyword_match = '+'.$keyword1.' +'.$keyword2;
}
if (!$search_keywords) $search_keywords = $keyword_match; // only 1 search in BOOLEAN MODE

foreach ($ncc as $c)   $all_countries[] = $c["web_name"];

if (in_array($two,$all_countries)) $search_by_country = TRUE;


$sql = "SELECT SQL_CACHE name, friendly FROM varietal, var_vint WHERE varietal.v_id = var_vint.v_id";
$sql .= " AND deleted = '0' GROUP BY name ORDER BY name";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $all_varietals[] = $row["friendly"];
  $varietals[] = array('full_name' => $row["name"], 'web_name' => $row["friendly"], 'name' => $row["name"], 'friendly' => $row["friendly"]);
}
if (in_array($two,$all_varietals)) $search_by_varietal = TRUE;
$smarty->assign('varietals',$varietals);

$wine_types[] = array('full_name' => 'New Arrivals', 'web_name' => 'new', 'url' => '/wines/new/');
$wine_types[] = array('full_name' => 'Special Offers', 'web_name' => 'specials', 'url' => '/wines/specials/');
$wine_types[] = array('full_name' => 'Organic', 'web_name' => 'organic', 'url' => '/wines/organic/');
$wine_types[] = array('full_name' => 'Gifts & Samplers', 'web_name' => 'samplers', 'url' => '/wines/samplers/');
$wine_types[] = array('full_name' => 'Gift Cards', 'web_name' => 'giftcard', 'url' => '/giftcard/');
$wine_types[] = array('full_name' => 'Books & Misc.', 'web_name' => 'books', 'url' => '/wines/books/');
if (($two == "new") || ($two == "specials") || ($two == "organic") || ($two == "samplers") || ($two == "books") || ($two == "others")) $search_by_type = TRUE;
$smarty->assign('wine_types',$wine_types);

$wine_styles[] = array('full_name' => 'Reds', 'web_name' => 'red', 'url' => '/wines/red/');
$wine_styles[] = array('full_name' => 'Whites', 'web_name' => 'white', 'url' => '/wines/white/');
$wine_styles[] = array('full_name' => 'Rosé', 'web_name' => 'rose', 'url' => '/wines/rose/');
$wine_styles[] = array('full_name' => 'Dessert', 'web_name' => 'dessert', 'url' => '/wines/dessert/');
$wine_styles[] = array('full_name' => 'Sparkling', 'web_name' => 'sparkling', 'url' => '/wines/sparkling/');
if (($two == "red") || ($two == "white") || ($two == "rose") || ($two == "sparkling") || ($two == "dessert"))
  $search_by_style = TRUE;
$smarty->assign('wine_styles',$wine_styles);

if ($search_all) {
  $wine_only = TRUE;
  $limit = 3;
  $sql =  getSearchSql("austria", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $wine_countries[$row["c_id"]] = $row["full_name"];
    $austria[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("bosnia", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $wine_countries[$row["c_id"]] = $row["full_name"];
    $bosnia[] = getProduct($row,  $last_3_months);
  }
 $sql =  getSearchSql("croatia", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $wine_countries[$row["c_id"]] = $row["full_name"];
    $croatia[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("georgia", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $wine_countries[$row["c_id"]] = $row["full_name"];
    $georgia[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("hungary", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $wine_countries[$row["c_id"]] = $row["full_name"];
    $hungary[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("serbia", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $wine_countries[$row["c_id"]] = $row["full_name"];
    $serbia[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("slovenia", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $wine_countries[$row["c_id"]] = $row["full_name"];
    $slovenia[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("turkey", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $wine_countries[$row["c_id"]] = $row["full_name"];
    $turkey[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("new", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $smarty->assign('sql',$sql); // debug
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $new_arrivals[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("specials", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $specials[] = getProduct($row,  $last_3_months);
  }
  $sql =  getSearchSql("organic", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $organic_wines[] = getProduct($row,  $last_3_months);
  }
  $sql = getSearchSql("others", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
      $other_items[] = getProduct($row,  $last_3_months);
  }
}
else {
  $sql =  getSearchSql($two, $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
  $result = $mydb->runSql($sql);
  while ($row = $mydb->getAssoc($result)) {
    $product = getProduct($row,  $last_3_months);
    if ($row["item_type"] > 0) {
      $other_items[] = $product;
    }
    else {
      if ($row["winery"] != "Specials") {
	$wine_countries[$row["c_id"]] = $row["full_name"];
	$wines[] = $product;
      }
      else {
	if (!$search_by_country || !$row["grup"])
	  $other_wines[] = $product;
      }
    }
  }
  if ($search_by_country) { // get related samplers
    $sql = getSearchSql("samplers", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
    $result = $mydb->runSql($sql);
    while($row = $mydb->getAssoc($result)) {
      if ($two == strtolower($row["appellation"])) {
	$smarty->assign('appellation',$row["appellation"]);
	$other_wines[] = getProduct($row,  $last_3_months);
      }
    }
  } 
  if ($two == 'samplers') { // get magnums
    $sql = getSearchSql("magnums", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
    $result = $mydb->runSql($sql);
    while($row = $mydb->getAssoc($result)) {
      $magnums[] = getProduct($row,  $last_3_months);
    }
  } 
  if (($two=='samplers') && (!$other_items)) { // get books and misc.
    $sql = getSearchSql("others", $last_3_months, $all_countries, $all_varietals, $search_keywords, $wine_only, $limit);
    $result = $mydb->runSql($sql);
    while($row = $mydb->getAssoc($result)) {
      $other_items[] = getProduct($row,  $last_3_months);
    }
  }
}

$smarty->assign('search_criteria',$two);
//$smarty->assign('search_keywords',$search_keywords); 
$smarty->assign('wines',$wines);
$smarty->assign('magnums',$magnums);
//$smarty->assign('magnums_size',sizeof($magnums));
$smarty->assign('other_wines',$other_wines);
$smarty->assign('other_items',$other_items);
//$smarty->assign('other_items_size',sizeof($other_items));
$smarty->assign('new_arrivals',$new_arrivals);
$smarty->assign('specials',$specials);
$smarty->assign('organic_wines',$organic_wines);
$smarty->assign('austria',$austria);
$smarty->assign('bosnia',$bosnia);
$smarty->assign('croatia',$croatia);
$smarty->assign('georgia',$georgia);
$smarty->assign('hungary',$hungary);
$smarty->assign('serbia',$serbia);
$smarty->assign('slovenia',$slovenia);
$smarty->assign('turkey',$turkey);
$smarty->assign('wine_countries',$wine_countries);
$smarty->assign('search_all',$search_all);
$smarty->assign('search_by_country',$search_by_country);
$smarty->assign('search_by_type',$search_by_type);
$smarty->assign('search_by_style',$search_by_style);
$smarty->assign('search_by_varietal',$search_by_varietal);

unset($_SESSION["redirectShop"]);
if (isset($two)) {
  $_SESSION["redirectShop"] = "wines/".$two."/";
}


?>