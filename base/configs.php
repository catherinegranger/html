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
	
//if  ($_SERVER["HTTP_HOST"] != "www.bluedanubewine.com" && $_SERVER["HTTP_HOST"] != "dev.bluedanubewine.com") {
//  #header("Location: http://www.bluedanubewine.com".$_SERVER["REQUEST_URI"]);
//  #exit;
//}

$base_file_dir = dirname(__FILE__).'/../';
$rel_dir = $base_file_dir;
require($base_file_dir.'class//image.class.php');
require($base_file_dir.'class/databasei.class.php');
$mydb = new Database();

require('primary.php');
	
require($smartylib_dir.'Smarty.class.php');	
$smarty = new Smarty();
//$smarty->setTemplateDir(array('one' => '/var/www/html/smarty/templates'));
$smarty->setTemplateDir(array('one' => $base_file_dir.'smarty/templates'));
$smarty->compile_dir = $base_file_dir.'smarty/templates_c';
$smarty->cache_dir = $base_file_dir.'smarty/cache';
$smarty->config_dir = $base_file_dir.'smarty/configs';


if (isset($_SESSION["user"])) {
  //$user = new user($mydb,$smarty,$_SESSION['user']);
  //$user->churn();
  foreach($_SESSION["user"] as $k => $v){
    $$k = $v;
  }
}
	
$_SESSION["entry"] = TRUE;

$smarty->assign('one', $one);
$smarty->assign('two', $two);
$smarty->assign('tri', $tri);
$smarty->assign('for', $for);
$smarty->assign('fiv', $fiv);
$smarty->assign('six', $six);
$smarty->assign('svn', $svn);
$smarty->assign('ate', $ate);
	
$time_adjust = 60 * 60 * 3;
$today = time() - $time_adjust;
	
$ncc = getCountries();
$smarty->assign('ncc',$ncc);
$nwys = getWineries();
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
