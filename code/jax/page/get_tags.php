<?php

if ($two == 'delete' && $tri > '0') {

	$mydb->delete("tag","tag_id = '".$tri."'");
	
}

$sql = "SELECT * FROM tag WHERE data_id = '".$two."'";
$result = $mydb->runSql($sql);

$counter = 0;

while($row = $mydb->getAssoc($result)) {

	$tags[$counter++] = array('tag_id' => $row["tag_id"],
							'words' => $row["words"],
							'data_id' => $row["data_id"]);
	
}

$smarty->assign('tags', $tags);

?>