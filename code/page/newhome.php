<?PHP

define('MAGPIE_INPUT_ENCODING', 'UTF-8');
define('MAGPIE_OUTPUT_ENCODING', 'UTF-8');
$file_dir = dirname(__FILE__)."/";
require_once $file_dir.'../../magpierss-0.72/rss_fetch.inc'; 

//$rss = fetch_rss('http://bluedanubewine.com/media/feed.xml');
$rss = fetch_rss('http://bluedanubewine.com/blog/feed/index.php');
$regular_expression = '~src="[^"]*"~';
$regular_expression2 =  '#<(\w+)\s[^>]*(class|id)\s*=\s*[\'"](' . 'wp-caption aligncenter' . 
            ')[\'"][^>]*>.*</\\1>#isU'; 
$regular_expression3 =  '#<(\w+)\s[^>]*(class|id)\s*=\s*[\'"](' . 'wp-caption alignright' . 
            ')[\'"][^>]*>.*</\\1>#isU'; 
$maxitems = 1;
$items = array_slice($rss->items, 0, $maxitems);
$counter = 0;
foreach ($items as $item) {
      $content = $item['content'];
      $encoded = $content['encoded'];
      $encoded2 = $content['encoded'];
      preg_match_all($regular_expression, $encoded2, $allimages);
      $imagecount = count($allimages[0]);
      if ($imagecount > 0) {
	$str1=$allimages[0][0];
	$str1=trim($str1);
	$len=strlen($str1);
	$imgpath=substr_replace(substr($str1,5,$len),"",-1);
      }
      $encoded2 = preg_replace($regular_expression2, '', $encoded); // center caption
      $encoded3 = preg_replace($regular_expression3, '', $encoded); // right caption
      $cleaned = strip_tags($encoded2, '<a>'); // center caption
      $cleaned = removeAccent($cleaned);
      $cleaned = trim($cleaned);
      $feeditems[$counter++] = array('link' => $item['link'],
				     'title' => $item['title'],
				     'content' => $cleaned,
				     'imagepath' => $imgpath,
                                     'description' => $item['description']);
}
$smarty->assign('feeditems',$feeditems);


/*
$out = "<?xml version=\"1.0\" ?>";
$out .= "\n<rss version=\"2.0\">";
$out .= "\n\n\t<channel>";
$out .= "\n\n\t\t<title>Blue Danube Wine</title>";
$out .= "\n\t\t<description>The Blog</description>";
$out .= "\n\t\t<link>http://www.bluedanubewine.com/blog/</link>";
$filename = $file_dir.'../../media/blogfeed.xml';
if (is_writable($filename)) {
  if (!$handle = fopen($filename, 'w')) {
    echo "Cannot open file ($filename)";
  }
  if (fwrite($handle, $out) === FALSE) {
    echo "Cannot write to file ($filename)";
  }
  fclose($handle);
} 
else {
  echo "The file $filename is not writable";
}
*/

$sql = "SELECT SQL_CACHE * FROM feature WHERE deleted = '0' ORDER BY posted DESC LIMIT 0,1";
$result = $mydb->runSql($sql);
$feature = $mydb->getAssoc($result);
$smarty->assign('feature',$feature);

$sql = "SELECT SQL_CACHE *, v.name AS vint_name, w.name AS winery_name FROM vintage AS v, winery AS w, country_code AS c";
$sql .= " WHERE v.deleted = '0' AND v.spotlight = '1' AND v.wy_id = w.wy_id AND w.c_id = c.c_id ORDER BY vint_id DESC LIMIT 0,3";
$result = $mydb->runSql($sql);
$max_vintage_length = 0;
while($row = $mydb->getAssoc($result)) {
  $vintage_length = strlen(removeAccent($row["vint_name"]));
  if ($max_vintage_length < $vintage_length)
    $max_vintage_length = $vintage_length;
}
$counter = 0;
$result = $mydb->runSql($sql);
while($row = $mydb->getAssoc($result)) {
  $full_name = $row["winery_name"].' '.$row["vint_name"];
  if ($row["year"] > 1900)
    $full_name = $row["year"].' '.$full_name;
  $spots[$counter++] = array('winery' => $row["winery_name"],
			     'name' => $row["vint_name"],
			     'full_name' => $full_name,
			     'vintage_length' => strlen(removeAccent($row["vint_name"])),
			     'max_vintage_length' => $max_vintage_length,
			     'vint_id' => $row["vint_id"],
			     'year' => $row["year"],
			     'country' => $row["full_name"],
			     'notes' => $row["notes"]);
}
$smarty->assign('spots',$spots);

$sql = "SELECT SQL_CACHE * FROM news WHERE deleted = '0' ORDER BY happens DESC LIMIT 0,4";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $news[$counter++] = array('title' => str_replace('&','&amp;',$row["title"]),
			    'website' => $row["website"],
			    'location' => str_replace('&','&amp;',$row["location"]),
			    'details' => str_replace('&','&amp;',$row["details"]),
			    'n_id' => $row["n_id"],
			    'happens' => date("F d, Y",$row["happens"]));
}
$smarty->assign('news',$news);

?>