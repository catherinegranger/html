<?php

if ($words && $data_id) {

	$stuff = array('words' => preg_replace('/ /','_',$words),
					'data_id' => $data_id);
					
	$mydb->insert('tag',$stuff);

	$smarty->assign('data_id',$data_id);

} else {

	$smarty->assign('data_id',$data_id);
	
}
	
?>