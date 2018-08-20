<?PHP

$map = '<?xml version="1.0" encoding="UTF-8"?>';
$map .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

$map .= makeXML('',date('Y-m-d'),'daily','1.0');

$map .= makeXML('media/feed.xml',date('Y-m-d'),'daily','1.0');

$map .= makeXML('news_events/',date('Y-m-d'),'weekly','0.9');
$map .= makeXML('shipping/',date('Y-m-d'),'weekly','0.5');

$map .= makeXML('regions/austria/',date('Y-m-d'),'weekly','0.8');
$map .= makeXML('regions/croatia/',date('Y-m-d'),'weekly','0.8');
$map .= makeXML('regions/hungary/',date('Y-m-d'),'weekly','0.8');
$map .= makeXML('regions/montenegro/',date('Y-m-d'),'weekly','0.8');
$map .= makeXML('regions/slovenia/',date('Y-m-d'),'weekly','0.8');

$map .= makeXML('about_us/',date('Y-m-d'),'weekly','0.4');
$map .= makeXML('contact/',date('Y-m-d'),'weekly','0.4');

$map .= makeXML('wines/',date('Y-m-d'),'daily','0.9');
$map .= makeXML('wines/red/',date('Y-m-d'),'daily','0.7');
$map .= makeXML('wines/white/',date('Y-m-d'),'daily','0.7');
$map .= makeXML('wines/rose/',date('Y-m-d'),'daily','0.7');
$map .= makeXML('wines/dessert/',date('Y-m-d'),'daily','0.7');
$map .= makeXML('wines/sparkling/',date('Y-m-d'),'daily','0.7');
$map .= makeXML('wines/austria/',date('Y-m-d'),'weekly','0.7');
$map .= makeXML('wines/croatia/',date('Y-m-d'),'weekly','0.7');
$map .= makeXML('wines/hungary/',date('Y-m-d'),'weekly','0.7');
$map .= makeXML('wines/montenegro/',date('Y-m-d'),'weekly','0.7');
$map .= makeXML('wines/slovenia/',date('Y-m-d'),'weekly','0.7');

$map .= makeXML('blog/',date('Y-m-d'),'daily','1.0');

$counter = 23;


//Get all the wineries in the system.
$sql = "SELECT web_name FROM winery WHERE deleted = '0' ORDER BY web_name";
$result = $mydb->runSql($sql);

while($row = $mydb->getRow($result)) {
	
	$map .= makeXML("winery/".$row[0]."/",'','weekly','0.8');
								
	$counter++;
								
}


//Get all the vintages in the system.
$sql = "SELECT vint_id FROM vintage ORDER BY vint_id";
$result = $mydb->runSql($sql);

while($row = $mydb->getRow($result)) {
	
	$map .= makeXML("wine/".$row[0]."/",'','weekly','0.8');
								
	$counter++;
								
}

//Get all the varietals in the system.
$sql = "SELECT friendly FROM varietal AS v, var_vint AS vv";
$sql .= " WHERE v.v_id = vv.v_id";
$sql .= " AND v.deleted = '0'";
$sql .= " GROUP BY v.name ORDER BY v.name";
$result = $mydb->runSql($sql);

while($row = $mydb->getRow($result)) {
	
	$map .= makeXML("wines/".$row[0]."/",'','monthly','0.6');
								
	$counter++;
								
}

//Get all the blog articles in the system and create archive array.
$sql = "SELECT posted, web_name FROM article WHERE deleted = '0' AND posted <= '".$today."' ORDER BY posted";
$result = $mydb->runSql($sql);

while($row = $mydb->getRow($result)) {
		
	$map .= makeXML("blog/view/".$row[1]."/",'','monthly','0.5');
	
	$date = getdate($row[0]);
	$events[$date['year']]['months'][$date['mon']]['mon_num'] = $date['mon'];
//	$events[$date['year']]['months'][$date['mon']][$date['mon']][$row[0]]['title'] = stripslashes($row[1]);
  
	$counter++;
	
}

//Spit out the archive.
foreach($events as $year => $details) {
			
	$map .= makeXML("blog/archive/".$year."/",'','weekly','0.4');
	
	$counter++;

}

//Get all the blog tags in the system.
$sql = "SELECT words FROM tag GROUP BY words ORDER BY words";
$result = $mydb->runSql($sql);

while($row = $mydb->getRow($result)) {
	
	$map .= makeXML("blog/tags/".$row[0]."/",'','weekly','0.5');
	
	$counter++;
	
}

$map .= makeXML('resources/',date('Y-m-d'),'weekly','0.8');
$counter++;

$sql = "SELECT r.web_name AS web_name, rc.web_name AS rc_web_name FROM resource AS r, resource_cat AS rc";
$sql .= " WHERE r.rc_id = rc.rc_id ORDER BY r.rc_id, r.title";
$result = $mydb->runSql($sql);

while($row = $mydb->getRow($result)) {
	
	$map .= makeXML("resources/".$row[1]."/".$row[0]."/",'','monthly','0.7');			
	$counter++;
					
}

$map .= '</urlset>';


$filename = "/home/bdwine/www/sitemap.xml";

if (is_writable($filename)) {

   if (!$handle = fopen($filename, 'w')) {
   
         echo "Cannot open file ($filename)";
         exit;
   
   }

   if (fwrite($handle, $map) === FALSE) {
   
       echo "Cannot write to file ($filename)";
       exit;
   
   }
  
   fclose($handle);

} else {

   echo "The file $filename is not writable";

}

if ($trg) {

	echo $counter.' items written';
	exit;

} else {

	header("Location: /amn/home/sitemap/".$counter."/");	
	exit;

}


?>
