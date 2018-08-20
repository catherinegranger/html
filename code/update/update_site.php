<?PHP

$params = array('commenting' => $commenting);

if ($mydb->update('controller',$params,"WHERE site = '1'")) {

	kickBack('','amn/controls','updated');
	exit;
	
} else {

	kickBack('','amn/controls','error');
	exit;
	
}
			

?>