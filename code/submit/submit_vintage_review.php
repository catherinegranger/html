<?PHP

$values = array("title" => $review_title,
				"url" => $review_url,
				"vint_id" => $vint_id);
						
$mydb->insert("vint_review",$values);

kickBack('','amn/edit_vintage/'.$vint_id,'');
exit;


?>