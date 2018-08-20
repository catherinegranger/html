<?PHP

if ($title) {
  $happens = mktime(0,0,0,$month,$day,$year);
  $stuff = array('title' => unQuote($title),
		 'happens' => $happens,
		 'website' => $website,
		 'city' => $city,
		 'location' => $location,
		 'details' => $details);
  $mydb->update("news",$stuff,"WHERE n_id = '".$n_id."'");
  kickBack('','amn/news/'.$page,'success');
  exit;
} 
else {
  kickBack('','amn/news/'.$page,'no_title');
  exit;
}

?>
