<?PHP
if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}
$today = time();
if ($_SESSION["from_month"] && $_SESSION["from_day"] && $_SESSION["from_year"]) {
  $from_month = $_SESSION["from_month"];
  $from_day = $_SESSION["from_day"];
  $from_year = $_SESSION["from_year"];
} 
else {
  $from_date = getdate($today);
  $from_month = $from_date["mon"];
  $from_day = $from_date["mday"];
  $from_year = $from_date["year"];
  $_SESSION["from_month"] = $from_month;
  $_SESSION["from_day"] = $from_day;
  $_SESSION["from_year"] = $from_year;
}
if ($_SESSION["to_month"] && $_SESSION["to_day"] && $_SESSION["to_year"]) {
  $to_month = $_SESSION["to__month"];
  $to_day = $_SESSION["to_day"];
  $to_year = $_SESSION["to_year"];
} 
else {
  $to_date = getdate($today);
  $to_month = $to_date["mon"];
  $to_day = $to_date["mday"];
  $to_year = $to_date["year"];
  $_SESSION["to_month"] = $to_month;
  $_SESSION["to_day"] = $to_day;
  $_SESSION["to_year"] = $to_year;
}

//$smarty->assign('from_month',make_month($from_month));
//$smarty->assign('from_day',make_day($from_day));
//$smarty->assign('from_year',make_year($from_year,$years));
//$smarty->assign('to_month',make_month($to_month));
//$smarty->assign('to_day',make_day($to_day));
//$smarty->assign('to_year',make_year($to_year,$years));

?>