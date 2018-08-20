<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$do_ca = FALSE;

$file_dir = dirname(__FILE__)."/";
$vintages = array();
$vintage = array();
$error = NULL;

if ($do_ca) {
  $filename = $file_dir."../../../reports/vintage_ca_priced_report.csv";
  $params = " WHERE ca_wholesale_price > 0 ";
  $values = array('ca_wholesale_price' => 0);
}
else {
  $filename = $file_dir."../../../reports/vintage_ny_priced_report.csv";
  $params = " WHERE ny_wholesale_price > 0 ";
  $values = array('ny_wholesale_price' => 0,
		  'ny_discount3' => 0,
		  'ny_discount5' => 0,
		  );
}
if (!$mydb->update("vintage",$values,$params)) {
  $error .= " wholesale_price update fails " ;
}

if (($handle = fopen($filename, "r")) !== FALSE) {
  $data = fgetcsv($handle, 1024, ",");
  while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      $vintage[$c] = $data[$c];
    }
    $product_id = $vintage[0];
    $sql = "SELECT vint_id, name AS vintage_name FROM vintage WHERE product_id ='".$product_id."'";
    $result = $mydb->runSql($sql);
    $row = $mydb->getAssoc($result);
    if ($row) {
      $vintage[$num] = $row["vintage_name"];
      $params = " WHERE vint_id = '".$row["vint_id"]."'";
      if ($do_ca) {
	$price = $vintage[$num-1];
	$values = array("ca_wholesale_price" => $vintage[$num-1]);
      }
      else {
	$price = $vintage[$num-4];
	$values = array('ny_wholesale_price' => $vintage[$num-4],
			'ny_discount3' => $vintage[$num-3],
			'ny_discount5' => $vintage[$num-2], // num-1 is discount10
			);
      }
      //$error .= " ".$params." ".$price;
      if (!$mydb->update("vintage",$values,$params)) {
	$error .= " ".$product_id." not updated with ".$row["vint_id"]." and ".$price ;
      }
    }
    else $error .= " ".$product_id." not found";
    $vintages[] = $vintage;
  }
  fclose($handle);
}
else {
  $error = "cannot read file ".$filename;
}


$smarty->assign('vintages',$vintages);

$smarty->assign('filename',$filename);
$smarty->assign('error',$error);


?>