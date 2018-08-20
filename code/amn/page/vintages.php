<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$vintages = array();

$two ? ($two) : $two = 'all';
$tri ? ($tri) : $tri = 'all';
$for ? ($for) : $for = 0;
$viewage = 50;



if ($fiv > 0) {
  $vint_id = $fiv;
  $action = $for;
  $params = " WHERE vint_id = '".$vint_id."'";
  $values = NULL;
  if ($action == 'unremove') {
    $values = array("online_store" => '1');
    $action = 'unremoved';
  }
  elseif ($action == 'remove') {
    $values = array("online_store" => '0');
    $action = 'removed';
  }
  elseif ($action == 'stockunremove') {
    $values = array("stock" => '1');
    $action = 'stockunremoved';
  }
  elseif ($action == 'stockremove') {
    $values = array("stock" => '0');
    $action = 'stockremoved';
  }
  if ($values) {
    $mydb->update('vintage',$values,$params);
    kickBack('','amn/vintages/'.$two.'/'.$tri.'/'.$action.'/0','');
    exit;
  }
  kickBack('','amn/vintages/'.$two.'/'.$tri.'/error'.'/0','');
  exit;
}

$limit = $for;
if (($for == 'removed') || ($for == 'unremoved')  || ($for == 'stockremoved')  || ($for == 'stockunremoved')) {
  $limit = 0;
}

$sql = "SELECT name, wy_id FROM winery WHERE deleted = 0 ORDER BY sort_name";
$result = $mydb->runSql($sql);
while($row = $mydb->getRow($result)) {
  $wys[] = array('name' => $row[0], 'wy_id' => $row[1]);
}
$smarty->assign('wys',$wys);

if ($two == 'active') {
  $wherebit = " AND vintage.inactive = '0' AND vintage.deleted = '0' ";
  $_SESSION["vintage_sort"] = "active";
} 
elseif ($two == 'undeleted') {
  $wherebit = " AND vintage.deleted = '0'";
  $_SESSION["vintage_sort"] = "undeleted";
}
else {
  $wherebit = "";
  $_SESSION["vintage_sort"] = "all";
}

if ($tri == 'samplers') {
  $sql = "SELECT *, name AS vintage_name, deleted AS vintage_delete FROM vintage WHERE grup = '1' ".$wherebit." ORDER BY name, year DESC";
} 
elseif ($tri == 'others') {
  $sql = "SELECT *, name AS vintage_name, deleted AS vintage_delete FROM vintage WHERE item_type > '0' ".$wherebit." ORDER BY name";
} 
elseif ($tri > 0) {
  $sql = "SELECT *, winery.name AS winery_name, vintage.name AS vintage_name, vintage.deleted AS vintage_delete";
  $sql .= " FROM vintage, winery";
  $sql .= " WHERE vintage.wy_id = winery.wy_id AND winery.wy_id = ".$tri." ".$wherebit;
  $sql .= " ORDER BY winery.sort_name, product_id DESC";
} 
else {
  $sql = "SELECT *, winery.name AS winery_name, vintage.name AS vintage_name, vintage.deleted AS vintage_delete";
  $sql .= " FROM vintage, winery";
  $sql .= " WHERE vintage.wy_id = winery.wy_id ".$wherebit;
  $sql .= " ORDER BY winery.sort_name, vintage.name, vintage.year DESC";
}

$result = $mydb->runSql($sql);
$total = $mydb->getCount($result);
$sql .= " LIMIT ".$limit.",".$viewage;
$result = $mydb->runSql($sql);
while($row = $mydb->getAssoc($result)) {
  if (($tri != 'prices') ||
      (($row["price"] > 0) ||
       ($row["ca_wholesale_price"] > 0) ||
       ($row["ny_wholesale_price"] > 0))) {
    $vintages[] = array('vintage' => $row["vintage_name"],
				  'winery' => $row["winery_name"],
				  'size' => $row["size"],
				  'year' => $row["year"],
				  'product_id' => $row["product_id"],
				  'stock' => $row["stock"],
				  'vint_id' => $row["vint_id"],
				  'price' => fixCurrency($row["price"]),
				  'ca_price' => fixCurrency($row["ca_wholesale_price"]),
				  'ny_price' => fixCurrency($row["ny_wholesale_price"]),
				  'ny_discount3' => $row["ny_discount3"],
				  'online_store' => $row["online_store"],
				  'inactive' => $row["inactive"],
				  'deleted' => $row["vintage_delete"]);
  }
}



if ($total > $viewage) {
  $smarty->assign('paginator', "<b>Pages:</b> ".paginator($total,$viewage,'/amn/vintages/'.$two.'/'.$tri.'/',$for));
}
else {
  $smarty->assign('paginator', '');
}
$smarty->assign('two',$two);
$smarty->assign('tri',$tri);
$smarty->assign('vint_id',$fiv);
$smarty->assign('delete',$for);
$smarty->assign('vintages',$vintages);
$path = "amn/vintages/".$two."/".$tri."/".$limit;
$smarty->assign('path',$path);
$smarty->assign('sql',$sql);
?>