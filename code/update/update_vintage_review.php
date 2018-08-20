<?PHP

$params = " WHERE rev_id = '".$rev_id."'";

if (($_POST['Delete'] == 'Delete') || (strlen($review_url) == 0)) {
  $sql = "DELETE FROM vint_review WHERE rev_id = '".$rev_id."'";
  $result = $mydb->runSql($sql);
  if ($result) {
    kickBack('','amn/edit_vintage/'.$vint_id,'success');
  }
  else {
    kickBack('','amn/edit_vintage/'.$vint_id,'update_error');
  }
  exit;
}
else {
  $values = array("url" => $review_url,
		  "title" => $review_title);
  if ($mydb->update("vint_review",$values,$params)) {
    kickBack('','amn/edit_vintage/'.$vint_id,'success');
  }
  else {
    kickBack('','amn/edit_vintage/'.$vint_id,'update_error');
    }
  exit;
}

?>