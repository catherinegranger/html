<?PHP
if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}
if ($_SESSION["month"] && $_SESSION["day"] && $_SESSION["year"]) {
  $month = $_SESSION["month"];
  $day = $_SESSION["day"];
  $year = $_SESSION["year"];
} 
else {
  $tomorrow = time() + (21 * 60 * 60);
  $today = time();
  $date = getdate($today);
  $month = $date["mon"];
  $day = $date["mday"];
  $year = $date["year"];
}
$smarty->assign('month',make_month($month));
$smarty->assign('day',make_day($day));
$smarty->assign('year',make_year($year,$years));

$sql = "SELECT (SELECT COUNT(*) FROM article WHERE deleted = '0') AS blog_count FROM article";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
$smarty->assign('blog_count',$row["blog_count"]);
$sql = "SELECT blogroll FROM controller WHERE site = '1'";
$result = $mydb->runSql($sql);
$row = $mydb->getAssoc($result);
$smarty->assign('blogroll',$row["blogroll"]);
?>