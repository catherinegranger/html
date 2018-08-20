<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}


$file_dir = dirname(__FILE__)."/";
$filename1 = $file_dir."../../../reports/vinosmith_account_export.csv";
$vinosmith_account_ids = array();
$vinosmith_account = array();
$error = NULL;

if (($handle = fopen($filename1, "r")) !== FALSE) {
  $data = fgetcsv($handle, 1024, ",");
  while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      $vinosmith_account[$c] = $data[$c];
    }
    $account_id = $vinosmith_account[0];
    $account_name = $vinosmith_account[1];
    $vinosmith_account_ids[$account_name] = $account_id;
  }
  fclose($handle);
}
else {
  $error = "cannot read file ".$filename1;
}

$filename2 = $file_dir."../../../reports/vinosmith_contact_export.csv";
$vinosmith_contact = array();
$error = NULL;

if (($handle = fopen($filename2, "r")) !== FALSE) {
  $data = fgetcsv($handle, 1024, ",");
  while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      $vinosmith_contact[$c] = $data[$c];
    }
    $vinosmith_contact[0] = $vinosmith_account_ids[$vinosmith_contact[2]];
    $contacts[] = $vinosmith_contact;
  }
  fclose($handle);
}
else {
  $error = "cannot read file ".$filename2;
}


$smarty->assign('contacts',$contacts);

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/contact_report_vinosmith.csv";
if (is_writable($filename)) {
   if (!$file_handler = fopen($filename, 'w')) {
         $error = "Cannot open file ($filename)";
   }
   //if (fwrite($file, $out) === FALSE) { $error = "Cannot write to file ($filename)";  }
   foreach ($contacts as $contact) {
     fputcsv($file_handler, $contact);
   }
   fclose($file_handler);
} 
else {
   $error = "The file $filename is not writable";
}

$report_url = "http://bluedanubewine.com/reports/contact_report_vinomith.csv";



$smarty->assign('filename',$report_url);
$smarty->assign('error',$error);


	


?>