<?PHP


if ($two) {
  $resource_name = $two;
}
else {
  $resource_name = 'travel';
  $blogitems = getBlogItems(200);
  foreach ($blogitems as $item) {
    if ($item['is_travel']) {
      $travelitems[] = $item;
      if ($item['country_category'] == 'Austria') {
	$austriaitems[] = $item;
      }
      else if ($item['country_category'] == 'Bosnia Herzegovina') {
	$bosniaitems[] = $item;
      }
      else if ($item['country_category'] == 'Croatia') {
	$croatiaitems[] = $item;
      }
      else if ($item['country_category'] == 'Georgia') {
	$georgiaitems[] = $item;
      }
      else if ($item['country_category'] == 'Hungary') {
	$hungaryitems[] = $item;
      }
      else if ($item['country_category'] == 'Montenegro') {
	$montenegroitems[] = $item;
      }
      else if ($item['country_category'] == 'Slovenia') {
	$sloveniaitems[] = $item;
      }
    }
  }
  $smarty->assign('travelitems',$travelitems);
  $smarty->assign('austriaitems',$austriaitems);
  $smarty->assign('bosniaitems',$bosniaitems);
  $smarty->assign('croatiaitems',$croatiaitems);
  $smarty->assign('georgiaitems',$georgiaitems);
  $smarty->assign('hungaryitems',$hungaryitems);
  $smarty->assign('montenegroitems',$montenegroitems);
  $smarty->assign('sloveniaitems',$sloveniaitems);
}
$sql = "SELECT r.r_id, r.title, r.web_name, rc.title AS rc_title, r.details,  r.resource_url,r.keyword, r.img_art  FROM resource AS r, resource_cat AS rc";
$sql .= " WHERE r.rc_id = rc.rc_id AND rc.web_name = '".$resource_name."' ORDER BY web_name";
$result = $mydb->runSql($sql);
while ($row = $mydb->getAssoc($result)) {
  $resources[] = array('r_id' => $row["r_id"],
		       'title' => $row["title"],
		       'rc_title' => $row["rc_title"],
		       'web_name' => $row["web_name"],
		       'resource_url' => $row["resource_url"],
		       'keyword' => $row["keyword"],
		       'details' => $row["details"],
		       'img_art' => $row["img_art"],
		       );
}
$smarty->assign('resources',$resources);
$smarty->assign('resource_category',$resource_name);	

?>