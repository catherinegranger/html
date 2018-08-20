<?PHP

$pathToImages = $file_dir.'../../img/news/';
$event = NULL;
if ($two) {
  $sql = "SELECT SQL_CACHE * FROM news WHERE deleted = '0' AND n_id = '".$two."' ";
  $result = $mydb->runSql($sql);
  if ($result) {
    $row = $mydb->getAssoc($result);
    if ($row) {
      $image_name = $row["n_id"].'.jpg';
      $image_file_name = $pathToImages.$image_name;
      $title = str_replace('&','&amp;',$row["title"]);
      $url = urlencode("https://www.bluedanubewine.com/events/".$row["n_id"]."/");
      $url_title = urlencode($title);
      $facebook_query = 's=100'.'&p[url]='.$url.'&p[title]='.$url_title;
      $facebook_url = 'http://www.facebook.com/sharer/sharer.php?'.htmlentities($facebook_query);
      $event = array('title' => $title,
		     'website' => $row["website"],
		     'details' => str_replace('&','&amp;',$row["details"]),
		     'location' => str_replace('&','&amp;',$row["location"]),
		     'n_id' => $row["n_id"],
		     'happens' => date("Y-m-d",$row["happens"]),
		     'year' => date("Y",$row["happens"]),
		     'month' => date("M",$row["happens"]),
		     'day' => date("d",$row["happens"]),
		     'image' => $image_file_name,
		     'url' =>$url,
		     'url_title' =>$url_title,
		     'facebook_url' =>$facebook_url,
		     );
      $og_url = "https://www.bluedanubewine.com/events/".$row["n_id"]."/";
      $og_title = "Event: ".$event["title"];
      $og_description = "Join us on ".$event["happens"]." at ".$event["location"];
      $og_image = "https://www.bluedanubewine.com/img/news/".$row["n_id"].".jpg";
      $smarty->assign('event',$event);
      $smarty->assign('og_url',$og_url);
      $smarty->assign('og_title',$og_title);
      $smarty->assign('og_description',$og_description);
      $smarty->assign('og_image',$og_image);
    }
  }
}
if (!$event) {
  $sql = "SELECT SQL_CACHE * FROM news WHERE deleted = '0' ORDER BY happens DESC LIMIT 0,10";
  $result = $mydb->runSql($sql);
  $counter = 0;
  while ($row = $mydb->getAssoc($result)) {
    $image_name = $row["n_id"].'.jpg';
    $image_file_name = $pathToImages.$image_name;
    $events[$counter++] = array('title' => str_replace('&','&amp;',$row["title"]),
				'website' => $row["website"],
				'details' => str_replace('&','&amp;',$row["details"]),
				'location' => str_replace('&','&amp;',$row["location"]),
				'n_id' => $row["n_id"],
				'happens' => date("Y-m-d",$row["happens"]),
				'year' => date("Y",$row["happens"]),
				'month' => date("M",$row["happens"]),
				'day' => date("d",$row["happens"]),
				'image' => $image_file_name,
				);
  }
  $smarty->assign('events',$events);
}

?>