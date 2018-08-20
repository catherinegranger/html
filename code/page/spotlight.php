<?PHP


$blogitems = getBlogItems(30);
foreach ($blogitems as $item) {
  if ($item['is_spotlight']) {
    $spotlightitems[] = $item;
  }
}
$smarty->assign('spotlightitems',$spotlightitems);

?>