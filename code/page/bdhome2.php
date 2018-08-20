<?PHP

if (isset($_SESSION["userCakeSuccesses"])) {
  $successes = $_SESSION["userCakeSuccesses"];
  $smarty->assign('uc_successes',$successes);
  destroySession("userCakeSuccesses");
}	
if (isset($_SESSION["userCakeErrors"])) {
  $errors = $_SESSION["userCakeErrors"];
  $smarty->assign('uc_errors',$errors);
  destroySession("userCakeErrors");
}

$random_img1 = rand(0, 2);
$random_img2 = rand(0, 2);
$random_img3 = rand(0, 2);
$random_img4 = rand(0, 2);
$random_img5 = rand(0, 4);

$gallery[] = array('country' => "Croatia", 
                   'img' => "croatia".$random_img1."9x4.jpg",
		   'description' => "From a tumultuous 20th century, Croatia has emerged with strong, unique wines that define the diversity of their nation and showcase their centuries of viticulture.");
$gallery[] = array('country' => "Hungary", 
                   'img' => "hungary".$random_img2."9x4.jpg",
		   'description' => "For centuries, Hungary has been home to some of the most prized wines on earth. Again today, this rich winegrowing culture is the source of increasingly exciting wines.");
$gallery[] = array('country' => "Slovenia", 
                   'img' => "slovenia".$random_img3."9x4.jpg",
		   'description' => "A country at the crossroads, Slovenia has been quietly making high-class wines for over two millenia with many of the current wineries founded as far back as the 1500's.");
$gallery[] = array('country' => "Austria", 
                   'img' => "austria".$random_img4."9x4.jpg",
		   'description' => "A vigorous wine culture with a distinguished history and plenty of energetic young winemaking talent: Austria has it all.");
$gallery[] = array('country' => "Georgia", 
                   'img' => "georgia".$random_img5."9x4.jpg",
		   'description' => "At the crossroads of Western Asia and Eastern Europe, Georgia is considered the homeland of viticulture and winemaking.");
$random_gallery = randomArray($gallery, 5);
$smarty->assign('gallery',$random_gallery);


//$newscounter = 0;
//$spotlightcounter = 0;
//$feedcounter = 0;
$travelcounter = 0;
$croatiacounter = 0;
$austriacounter = 0;
$bosniacounter = 0;
$croatiacounter = 0;
$hungarycounter = 0;
$georgiacounter = 0;
$montenegrocounter = 0;
$serbiacounter = 0;
$sloveniacounter = 0;
$turkeycounter = 0;
$debug_categories = '';
$debug_chosen_categories = '';
$debug_items = '';
$rss_items = '';
unset($_SESSION['feeditems']);
unset($_SESSION['blogfeed']);
$counter = 0;
$rss = fetch_rss('https://www.bluedanubewine.com/blog/feed/');
$rssitems = array_slice($rss->items, 0, 50);
foreach ($rssitems as $item) {
  $counter++;
  //$content = $item['content'];
  //$rss_items .= " ".$content['encoded']." ";
  $rss_items .= $counter." ".$item['title']." ".$item['category']." ";
}
$blogitems = getBlogItems(50);
foreach ($blogitems as $item) {
  $debug_items .= "[".$item['title']."]";
  if ($item['is_news'])
    $debug_items .= " News ";
  else 
    $debug_items .= " No News ";
  $debug_items .= " ".$item['category']." - ";
}
foreach ($blogitems as $item) {
    $debug_categories .= $item['country_category']." ";

  if ($item['is_spotlight']) {
    $spotlightitems[] = $item;
  }
  else if ($item['is_news']) {
    $newsitems[] = $item;
  }
  else {
    if ($item['is_travel']) {
      if ($travelcounter++ < 2) {
	$feeditems[] = $item;
      }
    }
    else {
      if ((($item['country_category'] == 'Croatia') && ($croatiacounter++ < 2)) ||
	  (($item['country_category'] == 'Hungary') && ($hungarycounter++ < 2)) ||
	  (($item['country_category'] == 'Georgia') && ($georgiacounter++ < 2)) ||
	  (($item['country_category'] == 'Slovenia') && ($sloveniacounter++ < 2)) ||
	  (($item['country_category'] == 'Austria') && ($austriacounter++ < 2)) ||
	  (($item['country_category'] == 'Bosnia Herzegovina') && ($bosniacounter++ < 2)) ||
	  (($item['country_category'] == 'Montenegro') && ($montenegrocounter++ < 2)) ||
	  (($item['country_category'] == 'Serbia') && ($serbiacounter++ < 2)) ||
	  (($item['country_category'] == 'Turkey') && ($turkeycounter++ < 2))) {
	$debug_chosen_categories .= $item['country_category']." ";
	$feeditems[] = $item;
      }
    }
  }
}
shuffle($feeditems);

$smarty->assign('newsitems',$newsitems);
$smarty->assign('spotlightitems',$spotlightitems);
$smarty->assign('feeditems',$feeditems);
$smarty->assign('debug_items',$debug_items);
$smarty->assign('rss_items',$rss_items);
$smarty->assign('debug_categories',$debug_categories);
$smarty->assign('debug_chosen_categories',$debug_chosen_categories);


$today = time() - $time_adjust;
$yesterday = time() - (24 * 60 * 60);
$all_futures = TRUE;
$sql = "SELECT SQL_CACHE * FROM news WHERE deleted = '0'  AND happens  > ".$yesterday."  ORDER BY happens LIMIT 0,4";
$result = $mydb->runSql($sql);
if ((!$result) || ($mydb->getCount($result) != 4)) {
  $sql = "SELECT SQL_CACHE * FROM news WHERE deleted = '0' ORDER BY happens DESC LIMIT 0,4";
  $result = $mydb->runSql($sql);
  $all_futures = FALSE;
}
while($row = $mydb->getAssoc($result)) {
  $img_file_name = '/img/news/'.$row["n_id"].'square.jpg';
  $img_file = $base_file_dir.$img_file_name;
  if (!file_exists($img_file)) {
    $img_file_name = '/img/news/'.$row["n_id"].'.jpg';
  }
  $events[] = array('title' => str_replace('&','&amp;',$row["title"]),
			    'website' => $row["website"],
			    'city' => $row["city"],
			    'location' => str_replace('&','&amp;',$row["location"]),
			    'details' => str_replace('&','&amp;',$row["details"]),
			    'n_id' => $row["n_id"],
			    'happens' => date("Y-m-d",$row["happens"]),
			    'year' => date("Y",$row["happens"]),
			    'month' => date("M",$row["happens"]),
			    'day' => date("d",$row["happens"]),
			    'img_file_name' => $img_file_name,
			    );
}
if ($all_futures) {
  $events = array_reverse($events);
}

$smarty->assign('events',$events);

$php_version = 'Current PHP version: ' . phpversion();
$smarty->assign('php_version',$php_version);

?>