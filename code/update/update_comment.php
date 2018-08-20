<?PHP

$entered = mktime($hours,$minutes,0,$month,$day,$year);

$params = array('blurb' => stripslashes($blurb),
				'posted' => $entered);

if ($mydb->update('comment',$params,"WHERE c_id = '".$c_id."'")) {

	kickBack('','amn/comments/'.$two,'updated');
	exit;
	
} else {

	kickBack('','amn/comments/'.$two,'error');
	exit;
	
}
			

?>