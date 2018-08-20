<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$error = NULL;

$filename1 = $file_dir."../../../reports/solve_region_export.csv";
$solve_account = array();
$solve_regions = array();
$solve_regions2 = array();
$solve_accounts = array();


if (($handle = fopen($filename1, "r")) !== FALSE) {
  $data = fgetcsv($handle, 1024, ",");
  while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      $solve_account[$c] = $data[$c];
    }
    $account_name = $solve_account[0];
    $account_region = $solve_account[1];
    $solve_regions[$account_name] = $account_region;
    $solve_regions2[] = $account_name."-".$account_region;
    $solve_accounts[] = $account_name;
  }
  fclose($handle);
}
else {
  $error = "cannot read file ".$filename1;
}

$filename2 = $file_dir."../../../reports/solve_instructions_export_new.csv";
$filename3 = $file_dir."../../../reports/solve_instructions_export.csv"; // Eugenie's update
$solve_account = array();
$solve_resale = array();
$solve_abc = array();
$solve_resales = array();
$solve_abcs = array();
$solve_instructions = array();

if (($handle = fopen($filename2, "r")) !== FALSE) {
  $data = fgetcsv($handle, 1024, ",");
  while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      $solve_account[$c] = $data[$c];
    }
    $account_name = $solve_account[0];
    $account_resale = $solve_account[1];
    $account_abc = $solve_account[2];
    $account_instructions = $solve_account[3];
    $solve_resales[$account_name] = $account_resale;
    $solve_abcs[$account_name] = $account_abc;
    $solve_instructions[$account_name] = $account_instructions;
  }
  fclose($handle);
}
else {
  $error = "cannot read file ".$filename2;
}

if (($handle = fopen($filename3, "r")) !== FALSE) {
  $data = fgetcsv($handle, 1024, ",");
  while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      $solve_account[$c] = $data[$c];
    }
    $account_name = $solve_account[0];
    $account_resale = $solve_account[1];
    $account_abc = $solve_account[2];
    $account_instructions = $solve_account[3];
    $solve_resales[$account_name] = $account_resale;
    $solve_abcs[$account_name] = $account_abc;
    $solve_instructions[$account_name] = $account_instructions;
  }
  fclose($handle);
}
else {
  $error = "cannot read file ".$filename3;
}


$file_dir = dirname(__FILE__)."/";
$filename3 = $file_dir."../../../reports/vinosmith_account_export.csv";
$vinosmith_account_ids = array();
$vinosmith_account = array();
$error = NULL;

$accounts[] = array("Account ID","Name","Shipping Street 1","Shipping Street 2","Shipping City","Shipping State","Shipping Zip","Billing Street 1","Billing Street 2","Billing City","Billing State","Billing Zip","Phone Number","Code","Region","Tasting Hours","Delivery Restrictions","Primary Contact First Name","Primary Contact Last Name","Primary Contact Business Email","Primary Contact Personal Email","Sales Reps","Disabled","Type","ABC #","Resale #","Tax ID #","Warehouse Code");

if (($handle = fopen($filename3, "r")) !== FALSE) {
  $data = fgetcsv($handle, 1024, ",");
  while (($data = fgetcsv($handle, 1024, ",")) !== FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      $vinosmith_account[$c] = $data[$c];
    }
    $vinosmith_account[14] = $solve_regions[$vinosmith_account[1]];
    $vinosmith_account[16] = $solve_instructions[$vinosmith_account[1]];
    $vinosmith_account[24] = $solve_abcs[$vinosmith_account[1]];
    $vinosmith_account[25] = $solve_resales[$vinosmith_account[1]];
    $accounts[] = $vinosmith_account;
  }
  fclose($handle);
}
else {
  $error = "cannot read file ".$filename3;
}

$smarty->assign('accounts',$accounts);

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/account_report_vinosmith.csv";
if (is_writable($filename)) {
   if (!$file_handler = fopen($filename, 'w')) {
         $error = "Cannot open file ($filename)";
   }
   //if (fwrite($file, $out) === FALSE) { $error = "Cannot write to file ($filename)";  }
   foreach ($accounts as $account) {
     fputcsv($file_handler, $account);
   }
   fclose($file_handler);
} 
else {
   $error = "The file $filename is not writable";
}

$report_url = "http://bluedanubewine.com/reports/account_report_vinomith.csv";

$smarty->assign('solve_regions',$solve_regions2);
$smarty->assign('solve_accounts',$solve_accounts);

$smarty->assign('filename',$report_url);
$smarty->assign('error',$error);


	


?>