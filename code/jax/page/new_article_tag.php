<?php

if ($words && $data_id) {

	$stuff = array('words' => preg_replace('/ /','_',$words),
					'data_id' => $data_id);
					
	$mydb->insert('tag',$stuff);
	
	$smarty->assign('status','tag added');
	exit;

} else {

	$smarty->assign('status','no data');
	exit;
	
}
	
?>