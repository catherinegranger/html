<?PHP
			
if ($varietal_name && $friendly && $type_id) {
  
  $sql = "SELECT v_id FROM varietal WHERE name = '".$varietal_name."'";
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  if ($row["v_id"] > 0) {
    kickBack($_POST,'amn/add_varietal','duplicate');
  }
  else {
    $values = array('name' => $varietal_name,
		    'friendly' => $friendly,
		    'type_id' => $type_id,
		    'resource_id' => $resource_id,
		    'notes' => $notes);
    $mydb->insert("varietal",$values);
	
    $_SESSION["varietal_name"] = "";
    $_SESSION["friendly"] = "";
    $_SESSION["type_id"] = "";
    $_SESSION["resource_id"] = "";
    $_SESSION["notes"] = "";
    
    kickBack('','amn/add_varietal','success');
  }
  exit;
} 
else {
  kickBack($_POST,'amn/add_varietal','error');
  exit;
}


?>