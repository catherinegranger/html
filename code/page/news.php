<?PHP


$newscounter = 0;
$blogitems = getBlogItems(30);
foreach ($blogitems as $item) {
  if ($item['is_news']) {
    $newsitems[$newscounter++] = $item;
  }
}
$smarty->assign('newsitems',$newsitems);


?>