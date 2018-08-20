<?PHP

$params = " WHERE v_id = '".$v_id."'";
$values = array('name' => $varietal_name,
		'friendly' => $friendly,
		'type_id' => $type_id,
		'resource_id' => $resource_id,
		'notes' => $notes);
if ($mydb->update("varietal",$values,$params)) {
  kickBack('','amn/varietals/'.$page,'success');
  exit;
} 
else {
  kickBack('','amn/varietals/'.$page,'error');
  exit;
}

?>