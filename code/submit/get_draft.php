<?PHP

$_SESSION["title"] = stripslashes($title);
$_SESSION["body"] = stripslashes($body);
$_SESSION["tags"] = $tags;
$_SESSION["sound"] = $sound;
$_SESSION["caption"] = $img_caption;

$_SESSION["day"] = $day;
$_SESSION["month"] = $month;
$_SESSION["year"] = $year;

kickBack('','amn/add_blog','');
exit;

?>