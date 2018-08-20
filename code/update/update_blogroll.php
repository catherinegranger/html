<?PHP

$params = array('blogroll' => $blogroll);

if ($mydb->update('controller',$params,"WHERE site = '1'")) {

	kickBack('','amn/add_blog','updated');
	exit;
	
} else {

	kickBack('','amn/add_blog','error');
	exit;
	
}
			

?>