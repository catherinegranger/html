<?PHP

if ($vv_id && $vint_id && ($v_id == 'delete')) {

	if ($mydb->delete('var_vint',"vv_id = '".$vv_id."'")) {
                updateSearchText($vint_id);
		kickBack('','amn/edit_vintage/'.$vint_id,'success');
		exit;
	}
	
} 
else if ($vv_id && $vint_id) {

	$params = " WHERE vv_id = '".$vv_id."'";
	$values = array('v_id' => $v_id,
			'vint_id' => $vint_id);
	if ($mydb->update("var_vint",$values,$params)) {
                updateSearchText($vint_id);
		kickBack('','amn/edit_vintage/'.$vint_id,'success');
		exit;
	}
} 
else if ($vv_id == "" && $vint_id) {
	$values = array('v_id' => $v_id,
			'vint_id' => $vint_id);
	if ($mydb->insert("var_vint",$values)) {
                updateSearchText($vint_id);
		kickBack('','amn/edit_vintage/'.$vint_id,'success');
		exit;
	}
} 
else {
	kickBack('','amn/edit_vintage/'.$vint_id,'error');
	exit;
}



?>