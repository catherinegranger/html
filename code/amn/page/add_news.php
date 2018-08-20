<?PHP
if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$date = getdate();
$smarty->assign('month',make_month($date["mon"]));
$smarty->assign('day',make_day($date["mday"]));
$smarty->assign('year',make_year($date["year"],$years));

?>