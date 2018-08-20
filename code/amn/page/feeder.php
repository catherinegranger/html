<?PHP

$date = getdate(time());

$upper = $date[0];

$sql = "SELECT * FROM article AS a, tag AS t WHERE a.deleted = '0'";
$sql .= " AND a.posted < '".$upper."' AND a.data_id = t.data_id AND t.words != 'newsletter' ORDER BY a.posted DESC GROUP BY t.data_id LIMIT 0,15";
$result = $mydb->runSql($sql);

$out = "<?xml version=\"1.0\" ?>";
$out .= "\n<rss version=\"2.0\">";
$out .= "\n\n\t<channel>";
$out .= "\n\n\t\t<title>Blue Danube Wine</title>";
$out .= "\n\t\t<description>The Blog</description>";
$out .= "\n\t\t<link>http://www.bluedanubewine.com/blog/</link>";

while($row = $mydb->getAssoc($result)) {

	$description = myfragment(strip_tags($row["body"]),'100');
	$published = date("r", $row["posted"]);

	$out .= "\n\n\t\t<item>";
	$out .= "\n\t\t\t<title>".$row["title"]."</title>";
	$out .= "\n\t\t\t<link>http://www.bluedanubewine.com/blog/view/".$row["web_name"]."/</link>";
	$out .= "\n\t\t\t<description>".$description."</description>";
	$out .= "\n\t\t\t<pubDate>".$published."</pubDate>";
	$out .= "\n\t\t\t<guid isPermaLink=\"true\">http://www.bluedanubewine.com/blog/view/".$row["web_name"]."/</guid>";
	$out .= "\n\t\t</item>";
	
}

$out .= "\n\n\t</channel>";
$out .= "\n\n</rss>";

$filename = "/home/bdwine/www/media/feed.xml";

if (is_writable($filename)) {

   if (!$handle = fopen($filename, 'w')) {
   
         echo "Cannot open file ($filename)";
         exit;
   
   }

   if (fwrite($handle, $out) === FALSE) {
   
       echo "Cannot write to file ($filename)";
       exit;
   
   }
  
   fclose($handle);
   
	kickBack('','amn/home','feed');
	exit;

} else {

   echo "The file $filename is not writable";

}

function myfragment($str, $n, $delim='...') {
   $len = strlen($str);
   if ($len > $n) {
       preg_match('/(.{' . $n . '}.*?)\b/', $str, $matches);
       return rtrim($matches[1]) . $delim;
   }
   else {
       return $str;
   }
}

?>
