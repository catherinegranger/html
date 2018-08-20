<?PHP

foreach($_GET as $k => $v){
	$$k = addslashes($v);
}
foreach($_POST as $k => $v){
	$$k = trim($v);
}

if ($one == 'amn') {
  $one = $two;
  $two = $tri;
  $tri = $for;
  $for = $fiv;
  $fiv = $six;
  $six = $svn;
  $svn = $ate;
  $one = ($one) ? $one : "home";
  $locale = 'amn/';
} 
elseif ($one == 'amnprint') {
	$one = $two;
	$two = $tri;
	$tri = $for;
	$for = $fiv;
	$fiv = $six;
	$six = $svn;
	$svn = $ate;
	$one = ($one) ? $one : "home";
	$locale = 'amnprint/';
} 
elseif ($one == 'print') {
	$one = $two;
	$two = $tri;
	$tri = $for;
	$for = $fiv;
	$fiv = $six;
	$six = $svn;
	$svn = $ate;
	$one = ($one) ? $one : "home";
	$locale = 'print/';
} 
elseif ($one == 'jax') {
  $one = $two;
  $two = $tri;
  $tri = $for;
  $for = $fiv;
  $fiv = $six;
  $six = $svn;
  $svn = $ate;
  $locale = 'jax/';
} 
else {
  $one = ($one) ? $one : "home";
}
	
if  ($_SERVER["HTTP_HOST"] != "www.bluedanubewine.com" && $_SERVER["HTTP_HOST"] != "dev.bluedanubewine.com") {
  #header("Location: http://www.bluedanubewine.com".$_SERVER["REQUEST_URI"]);
  #exit;
}

require('./class/database.class.php');
//require('./class/user.class.php');
require('./class/image.class.php');
require($smartylib_dir.'Smarty.class.php');	

$mydb->selectDB("bdwine_db");
require('primary.php');
	
$smarty = new Smarty();
if ($_SESSION['user']) {
  //$user = new user($mydb,$smarty,$_SESSION['user']);
  //$user->churn();
  foreach($_SESSION['user'] as $k => $v){
    $$k = $v;
  }
}
	
$_SESSION["entry"] = true;

$smarty->template_dir = $rel_dir.'smarty/templates';
$smarty->compile_dir = $rel_dir.'smarty/templates_c';
$smarty->cache_dir = $rel_dir.'smarty/cache';
$smarty->config_dir = $rel_dir.'smarty/configs';

$smarty->assign('one', $one);
$smarty->assign('two', $two);
$smarty->assign('tri', $tri);
$smarty->assign('for', $for);
$smarty->assign('fiv', $fiv);
$smarty->assign('six', $six);
$smarty->assign('svn', $svn);
$smarty->assign('ate', $ate);
	
$time_adjust = 60 * 60 * 3;
$today = mktime() - $time_adjust;
	
	
$sql = "SELECT country_code.c_id AS c_id, country_code.web_name AS web_name, country_code.full_name AS full_name FROM country_code, winery WHERE winery.c_id = country_code.c_id AND country_code.deleted = '0' AND winery.inactive = '0' AND winery.deleted = '0'";
$sql .= " GROUP BY country_code.c_id ORDER BY country_code.full_name";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $ncc[] = array('c_id' => $row["c_id"],
			   'web_name' => $row["web_name"],
			   'full_name' => $row["full_name"]);
}
$smarty->assign('ncc',$ncc);

$sql = "SELECT wy_id, c_id, web_name, name, sort_name, view_webshop,view_ca,view_ny,view_dist FROM winery WHERE inactive = '0' AND deleted = '0' ORDER BY sort_name";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  if (canShow($row["view_webshop"], $row["view_ca"], $row["view_ny"], $row["view_dist"])) {
    $nwys[] = array('wy_id' => $row["wy_id"],
		    'c_id' => $row["c_id"],
		    'web_name' => $row["web_name"],
		    'sort_name' => $row["sort_name"],
		    'name' => $row["name"]);
  }
}
$smarty->assign('nwys',$nwys);

if (isUserFromTrade())
  $smarty->assign('is_user_from_trade',1);
else 
  $smarty->assign('is_user_from_trade',0);
if (canShowRetailPrice())
  $smarty->assign('can_show_retail_price',1);
else 
  $smarty->assign('can_show_retail_price',0);

$smarty->assign('adult_signature', BDW_ADULT_SIGNATURE);
$smarty->assign('ca_tax_rate', BDW_CA_TAX_RATE);
$smarty->assign('local_delivery', BDW_LOCAL_DELIVERY);

?>
