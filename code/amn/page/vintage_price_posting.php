<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}


$next_month = date('m',strtotime('+1 month'));
$next_month_year = date('Y',strtotime('+1 month'));
$counter = 1;
$sql = "SELECT *, country_code.web_name AS country_web_name,country_code.full_name AS country_name, winery.name AS winery_name, vintage.name AS vintage_name, type.type_id as type_id, type.name as type_name ";
$sql .= " FROM vintage, winery, country_code, type";
$sql .= " WHERE country_code.c_id = winery.c_id and type.type_id = vintage.type_id and vintage.wy_id = winery.wy_id and vintage.ny_wholesale_price > 0 and vintage.inactive = 0 AND vintage.deleted = 0 ";
$sql .= " ORDER BY  product_id ";
$result = $mydb->runSql($sql);

$vintages[] = array('post_type' => 'post_type',
		    'post_month' => 'post_month',
		    'post_year' => 'post_year',
		    'wholesaler' => 'wholesaler',
		    'bev_type' => 'bev_type',
		    'prod_item' => 'prod_item',
		    'combo_lim' => 'combo_lim',
		    'brand_reg' => 'brand_reg',
		    'ttb_id' => 'ttb_id',
		    'brand_name' => 'brand_name',
		    'prod_name' => 'prod_name',
		    'label_type' => 'label_type',
		    'prim_info' => 'prim_info',
		    'distrib_id' => 'distrib_id',
		    'item_size' => 'item_size',
		    'um' => 'um',
		    'botpercase' => 'botpercase',
		    'subpack' => 'subpack',
		    'vintage' => 'vintage',
		    'alcohol' => 'alcohol',
		    'proof' => 'proof',
		    'bot_price' => 'bot_price',
		    'case_price' => 'case_price',
		    'bot_nyc' => 'bot_nyc',
		    'case_nyc' => 'case_nyc',
		    'fullcase' => 'fullcase',
		    'split_char' => 'split_char',
		    'fob' => 'fob',
		    'nys_whole' => 'nys_whole',
		    'prod_item' => 'prod_item',
		    'combo_disa' => 'combo_disa',
		    'combo_asse' => 'combo_asse',
		    'lim_avail' => 'lim_avail',
		    'alloc_det' => 'alloc_det',
		    'alloc_reas' => 'alloc_reas',
		    'nys_prod' => 'nys_prod',
		    'disc_code' => 'disc_code',
		    'qty_1' => 'qty_1',
		    'unit_1' => 'unit_1',
		    'amount_1' => 'amount_1',
		    'type_1' => 'type_1',
		    'qty_2' => 'qty_2',
		    'unit_2' => 'unit_2',
		    'amount_2' => 'amount_2',
		    'type_2' => 'type_2',
		    'qty_3' => 'qty_3',
		    'unit_3' => 'unit_3',
		    'amount_3' => 'amount_3',
		    'type_3' => 'type_3',
		    'qty_4' => 'qty_4',
		    'unit_4' => 'unit_4',
		    'amount_4' => 'amount_4',
		    'type_4' => 'type_4',
		    'qty_5' => 'qty_5',
		    'unit_5' => 'unit_5',
		    'amount_5' => 'amount_5',
		    'type_5' => 'type_5',
		    'qty_6' => 'qty_6',
		    'unit_6' => 'unit_6',
		    'amount_6' => 'amount_6',
		    'type_6' => 'type_6',
		    'qty_7' => 'qty_7',
		    'unit_7' => 'unit_7',
		    'amount_7' => 'amount_7',
		    'type_7' => 'type_7',
		    'qty_8' => 'qty_8',
		    'unit_8' => 'unit_8',
		    'amount_8' => 'amount_8',
		    'type_8' => 'type_8',
		    'qty_9' => 'qty_9',
		    'unit_9' => 'unit_9',
		    'amount_9' => 'amount_9',
		    'type_9' => 'type_9',
		    'qty_10' => 'qty_10',
		    'unit_10' => 'unit_10',
		    'amount_10' => 'amount_10',
		    'type_10' => 'type_10',
		    'cmbitem_1' => 'cmbitem_1',
		    'cmbqty_1' => 'cmbqty_1',
		    'cmbitem_2' => 'cmbitem_2',
		    'cmbqty_2' => 'cmbqty_2',
		    'cmbitem_3' => 'cmbitem_3',
		    'cmbqty_3' => 'cmbqty_3',
		    'cmbitem_4' => 'cmbitem_4',
		    'cmbqty_4' => 'cmbqty_4',
		    'cmbitem_5' => 'cmbitem_5',
		    'cmbqty_5' => 'cmbqty_5',
		    'cmbitem_6' => 'cmbitem_6',
		    'cmbqty_6' => 'cmbqty_6',
		    'cmbitem_7' => 'cmbitem_7',
		    'cmbqty_7' => 'cmbqty_7',
		    'cmbitem_8' => 'cmbitem_8',
		    'cmbqty_8' => 'cmbqty_8',
		    'cmbitem_9' => 'cmbitem_9',
		    'cmbqty_9' => 'cmbqty_9',
		    'cmbitem_10' => 'cmbitem_10',
		    'cmbqty_10' => 'cmbqty_10'
		    );
while($row = $mydb->getAssoc($result)) {
  $post_type = "WR";
  $post_month = $next_month;
  $post_year = $next_month_year;
  $wholesaler = "2140175";
  switch ($row["type_id"]) {
  case 0: // red
  case 1: // red
  case 3: // rose
  case 7: // red
    $bev_type = "TR";
    break;
  case 2: // white
    $bev_type = "TW";
    break;
  case 4: //sparkling
    $bev_type = "S";
    break;
  case 5: // iced
  case 6: // dessert
    $bev_type = "DP";
    break;
  }
  $prod_item = $row["product_id"];
  $combo_lim = "R";
  $brand_reg = "0000000";
  $ttb_id = $row["ttb"];
  $brand_name = $row["winery_name"];
  $prod_name = $row["vintage_name"];
  $label_type = "A";
  $prim_info = "";
  $distrib_id = "";
  $item_size = $row["size"];
  $um = "ML";
  $botpercase = $row["bottles_per_case"];
  $subpack = $row["bottles_per_case"];
  if ($row["year"] == '0')
    $vintage = 'NV';
  else
    $vintage = $row["year"];
  if ($row["alcohol"] <= 14)
    $alcohol = 'B';
  else if ($row["alcohol"] <= 21)
    $alcohol = 'C';
  else $alcohol = 'D';
  $proof = "";
  $bot_price = fixCurrency($row["ny_wholesale_price"]);
  $case_price = fixCurrency($bot_price * $botpercase);
  $bot_nyc = fixCurrency($row["ny_wholesale_price"]);
  $case_nyc = fixCurrency($bot_price * $botpercase);
  $fullcase = "N";
  $split_char = "";
  $fob = "";
  $nys_whole =  "2140175";
  $combo_disa = "";
  $combo_asse = "";
  $lim_avail = "";
  $alloc_det = "";
  $alloc_reas = "";
  $nys_prod = "N";
  $disc_code = "";
  if ($row["ny_discount3"]) {
    $qty_1 = 3;
    $unit_1 = "C";
    $amount_1 = fixCurrency($row["ny_discount3"]);
    $type_1 = "$";
  }
  else {
    $qty_1 = "";
    $unit_1 = "";
    $amount_1 = "";
    $type_1 = "";
  }
  if ($row["ny_discount5"]) {
    $qty_2 = 5;
    $unit_2 = "C";
    $amount_2 = fixCurrency($row["ny_discount5"]);
    $type_2 = "$";
  }
  else {
    $qty_2 = "";
    $unit_2 = "";
    $amount_2 = "";
    $type_2 = "";
  }
  if ($row["ny_discount01"]) {
    $qty_3 = $row["ny_discount_case01"];
    $unit_3 = "C";
    $amount_3 = fixCurrency($row["ny_discount01"]);
    $type_3 = "$";
  }
  else { 
    $qty_3 = "";
    $unit_3 = "";
    $amount_3 = "";
    $type_3 = "";
  }
  if ($row["ny_discount02"]) {
    $qty_4 = $row["ny_discount_case02"];
    $unit_4 = "C";
    $amount_4 = fixCurrency($row["ny_discount02"]);
    $type_4 = "$";
  }
  else { 
    $qty_4 = "";
    $unit_4 = "";
    $amount_4 = "";
    $type_4 = "";
  }
  $qty_5 = "";
  $unit_5 = "";
  $amount_5 = "";
  $type_5 = "";
  $cmbitem_1 = "";
  $cmbqty_1 = "";
  $vintages[] = array('post_type' => $post_type,
		    'post_month' => $post_month,
		    'post_year' => $post_year,
		    'wholesaler' => $wholesaler,
		    'bev_type' => $bev_type,
		    'prod_item' => $prod_item,
		    'combo_lim' => $combo_lim,
		    'brand_reg' => $brand_reg,
		    'ttb_id' => $ttb_id,
		    'brand_name' => $brand_name,
		    'prod_name' => $prod_name,
		    'label_type' => $label_type,
		    'prim_info' => $prim_info,
		    'distrib_id' => $distrib_id,
		    'item_size' => $item_size,
		    'um' => $um,
		    'botpercase' => $botpercase,
		    'subpack' => $subpack,
		    'vintage' => $vintage,
		    'alcohol' => $alcohol,
		    'proof' => $proof,
		    'bot_price' => $bot_price,
		    'case_price' => $case_price,
		    'bot_nyc' => $bot_nyc,
		    'case_nyc' => $case_nyc,
		    'fullcase' => $fullcase,
		    'split_char' => $split_char,
		    'fob' => $fob,
		    'nys_whole' => $nys_whole,
		    'prod_item' => $prod_item,
		    'combo_disa' => $combo_disa,
		    'combo_asse' => $combo_asse,
		    'lim_avail' => $lim_avail,
		    'alloc_det' => $alloc_det,
		    'alloc_reas' => $alloc_reas,
		    'nys_prod' => $nys_prod,
		    'disc_code' => $disc_code,
		    'qty_1' => $qty_1,
		    'unit_1' => $unit_1,
		    'amount_1' => $amount_1,
		    'type_1' => $type_1,
		    'qty_2' => $qty_2,
		    'unit_2' => $unit_2,
		    'amount_2' => $amount_2,
		    'type_2' => $type_2,
		    'qty_3' => $qty_3,
		    'unit_3' => $unit_3,
		    'amount_3' => $amount_3,
		    'type_3' => $type_3,
		    'qty_4' => $qty_4,
		    'unit_4' => $unit_4,
		    'amount_4' => $amount_4,
		    'type_4' => $type_4,
		    'qty_5' => $qty_5,
		    'unit_5' => $unit_5,
		    'amount_5' => $amount_5,
		    'type_5' => $type_5,
		    'qty_6' => $qty_5,
		    'unit_6' => $unit_5,
		    'amount_6' => $amount_5,
		    'type_6' => $type_5,
		    'qty_7' => $qty_5,
		    'unit_7' => $unit_5,
		    'amount_7' => $amount_5,
		    'type_7' => $type_5,
		    'qty_8' => $qty_5,
		    'unit_8' => $unit_5,
		    'amount_8' => $amount_5,
		    'type_8' => $type_5,
		    'qty_9' => $qty_5,
		    'unit_9' => $unit_5,
		    'amount_9' => $amount_5,
		    'type_9' => $type_5,
		    'qty_10' => $qty_5,
		    'unit_10' => $unit_5,
		    'amount_10' => $amount_5,
		    'type_10' => $type_5,
		    'cmbitem_1' => $cmbitem_1,
		    'cmbqty_1' => $cmbqty_1,
		    'cmbitem_2' => $cmbitem_1,
		    'cmbqty_2' => $cmbqty_1,
		    'cmbitem_3' => $cmbitem_1,
		    'cmbqty_3' => $cmbqty_1,
		    'cmbitem_4' => $cmbitem_1,
		    'cmbqty_4' => $cmbqty_1,
		    'cmbitem_5' => $cmbitem_1,
		    'cmbqty_5' => $cmbqty_1,
		    'cmbitem_6' => $cmbitem_1,
		    'cmbqty_6' => $cmbqty_1,
		    'cmbitem_7' => $cmbitem_1,
		    'cmbqty_7' => $cmbqty_1,
		    'cmbitem_8' => $cmbitem_1,
		    'cmbqty_8' => $cmbqty_1,
		    'cmbitem_9' => $cmbitem_1,
		    'cmbqty_9' => $cmbqty_1,
		    'cmbitem_10' => $cmbitem_1,
		    'cmbqty_10' => $cmbqty_1
		    );
}
$smarty->assign('vintages',$vintages);

$file_dir = dirname(__FILE__)."/";
$filename = $file_dir."../../../reports/bdw_price_posting.csv";
$report_url = "http://bluedanubewine.com/reports/bdw_price_posting.csv.csv";

if (is_writable($filename)) {
   if (!$file_handler = fopen($filename, 'w')) {
         $error = "Cannot open file ($filename)";
   }
   //if (fwrite($file, $out) === FALSE) { $error = "Cannot write to file ($filename)";  }
   foreach ($vintages as $vintage) {
     fputcsv($file_handler, $vintage);
   }
   fclose($file_handler);
} 
else {
   $error = "The file $filename is not writable";
}

$smarty->assign('filename',$report_url);
$smarty->assign('error',$error);

	


?>