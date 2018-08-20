<?php

$sql = "SELECT *, c.posted AS posted FROM article AS a, comment AS c, commentor AS cm";
$sql .= " WHERE a.data_id = '".$two."' AND a.data_id = c.data_id AND c.cm_id = cm.cm_id";
$sql .= " ORDER BY c.posted DESC LIMIT 0,1";
$result = $mydb->runSql($sql);

$row = $mydb->getAssoc($result);

$smarty->assign('name',$row["name"]);
$smarty->assign('email',$row["email"]);
$smarty->assign('website',$row["website"]);
$smarty->assign('posted',date("m d Y",$row["posted"]));
$smarty->assign('blurb',preg_replace('/\n/','<br />',$row["blurb"]));

?>