<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT country_code.full_name AS country_name,country_code.web_name AS country_webname, winery.wy_id AS winery_id, winery.name AS winery_name, winery.web_name AS winery_webname, winery.phonetic_name AS winery_phonetic_name, winery.phonetic_appellation AS winery_phonetic_appellation, vintage.vint_id, vintage.name AS vintage_name, vintage.appellation, vintage.year, vintage.composition, vintage.climate, vintage.soils, vintage.exposure, vintage.aging, vintage.alcohol, vintage.residual_sugar, vintage.acidity, winery.introduction, winery.vineyards, winery.winemaking,  winery.winemaking2, vintage.notespairings  FROM vintage, winery, country_code WHERE winery.wy_id = vintage.wy_id AND winery.c_id = country_code.c_id AND vint_id ='".$two."'";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
foreach($row as $key => $value) {
  $smarty->assign(${key},$value);
}
$introduction = $row['introduction'];
$first_letter = substr($introduction, 0, 1);
$remaining = substr($introduction, 1);
$smarty->assign('first_letter', $first_letter);
$smarty->assign('introduction', $remaining);

$winery_webname = $row['winery_webname'];
$country_webname = $row['country_webname'];
$vint_id = $row['vint_id'];
$root_file_dir = dirname(__FILE__)."/../../..";
$winery_map_file_name = "/img/wineries/".$winery_webname."_map8x10.png";
$winery_map_file = $root_file_dir.$winery_map_file_name;
$country_map_file_name = "/img/wineries/".$country_webname."_map8x10.png";
$country_map_file = $root_file_dir.$country_map_file_name;
if (file_exists($winery_map_file)) {
  $smarty->assign('map_file', $winery_map_file_name);
}
else if (file_exists($country_map_file)) {
  $smarty->assign('map_file', $country_map_file_name);
}
$smarty->assign('winery_map_file_name', $winery_map_file);
$smarty->assign('country_map_file_name', $country_map_file);
$bottle_img_name = "/img/bottles/".$vint_id.".jpg";
$nobottle_img_name = "/img/bottles/0.jpg";
$bottle_img_file = $root_file_dir.$bottle_img_name;
$smarty->assign('bottle_img_file', $bottle_img_file);

if (file_exists($bottle_img_file)) {
  $smarty->assign('bottle_img_name', $bottle_img_name);
}
else {
  $smarty->assign('bottle_img_name', $nobottle_img_name);
}

?>