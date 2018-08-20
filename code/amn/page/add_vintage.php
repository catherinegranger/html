<?PHP

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$sql = "SELECT v_id, name FROM varietal WHERE deleted = '0' ORDER BY name";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $varietals[$counter++] = array('v_name' => $row["name"],
				 'v_id' => $row["v_id"]);
}
$smarty->assign('varietals',$varietals);

$sql = "SELECT wy_id, name FROM winery ORDER BY sort_name";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $wineries[$counter++] = array('wy_name' => $row["name"],
				'wy_id' => $row["wy_id"]);
}
$smarty->assign('wineries',$wineries);

$sql = "SELECT type_id, name FROM type WHERE deleted = '0' ORDER BY name";
$result = $mydb->runSql($sql);
$counter = 0;
while($row = $mydb->getAssoc($result)) {
  $types[$counter++] = array('type_name' => $row["name"],
			     'type_id' => $row["type_id"]);
}
$smarty->assign('types',$types);
$_SESSION["item_type"] = 0; // default value
$_SESSION["bottles"] = 1; // default value
$_SESSION["shipping"] = 1; // default value
$_SESSION["bottles_per_case"] = 12; // default value

if ($two) {
  if ($two != "error") {
    unset($_SESSION["wy_id"]);
    unset($_SESSION["product_id"]);
    unset($_SESSION["ttb"]);
    unset($_SESSION["vintage_name"]);
    unset($_SESSION["appellation"]);
    unset($_SESSION["country_id"]);
    unset($_SESSION["bottles_per_case"]);
    unset($_SESSION["year"]);
    unset($_SESSION["size"]);
    unset($_SESSION["organic"]);
    unset($_SESSION["notes"]);
    unset($_SESSION["type_id"]);
    unset($_SESSION["grup"]);
    unset($_SESSION["bottles"]);
    unset($_SESSION["aging"]); 
    unset($_SESSION["composition"]); 
    unset($_SESSION["climate"]);
    unset($_SESSION["soils"]); 
    unset($_SESSION["exposure"]); 
    unset($_SESSION["notespairings"]);
    unset($_SESSION["inactive"]);
    unset($_SESSION["online_store"]);
    unset($_SESSION["stock"]);
    unset($_SESSION["low_inventory"]);
    unset($_SESSION["top_pick"]);
    unset($_SESSION["spotlight"]);
    unset($_SESSION["v_id_1"]);
    unset($_SESSION["v_id_2"]);
    unset($_SESSION["v_id_3"]);
    unset($_SESSION["v_id_4"]);
    unset($_SESSION["v_id_5"]);
    unset($_SESSION["vv_id_1"]);
    unset($_SESSION["vv_id_2"]);
    unset($_SESSION["vv_id_3"]);
    unset($_SESSION["vv_id_4"]);
    unset($_SESSION["vv_id_5"]);
  }
  $sql = "SELECT * FROM vintage WHERE vint_id ='".$two."'";
  $result = $mydb->runSql($sql);
  $row = $mydb->getAssoc($result);
  $_SESSION["item_type"] = $row["item_type"];
  $_SESSION["wy_id"] = $row["wy_id"];
  $_SESSION["ttb"] = $row["ttb"];
  $_SESSION["vintage_name"] = $row["name"];
  $_SESSION["appellation"] = $row["appellation"];
  $_SESSION["country_id"] = $row["country_id"];
  $_SESSION["year"] = $row["year"] + 1;
  $_SESSION["size"] = $row["size"];
  $_SESSION["type_id"] = $row["type_id"];
  $_SESSION["bottles_per_case"] = $row["bottles_per_case"];
  $_SESSION["organic"] = $row["organic"];
  $_SESSION["notes"] = $row["notes"];
  $_SESSION["grup"] = $row["grup"];
  $_SESSION["bottles"] = $row["bottles"];
  $_SESSION["aging"] = $row["aging"];
  $_SESSION["composition"] = $row["composition"];
  $_SESSION["climate"] = $row["climate"];
  $_SESSION["soils"] = $row["soils"];
  $_SESSION["exposure"] = $row["exposure"];
  $_SESSION["notespairings"] = $row["notespairings"];
  $_SESSION["inactive"] = 0;
  $_SESSION["online_store"] = 1;
  $_SESSION["stock"] = 0;
  $_SESSION["low_inventory"] = 0;
  $_SESSION["top_pick"] = 0;
  $_SESSION["spotlight"] = 0;
  //foreach($row as $key => $value) {    $smarty->assign(${key},$value);  }

  $sql = "SELECT * FROM var_vint WHERE vint_id ='".$two."'";
  $result = $mydb->runSql($sql);
  $counter = 1;
  while($row = $mydb->getAssoc($result)) {
    $_SESSION['v_id_'.$counter] = $row["v_id"];
    $_SESSION['vv_id_'.$counter] = $row["vv_id"];
    //$smarty->assign('v_id_'.$counter,$row["v_id"]);
    //$smarty->assign('vv_id_'.$counter,$row["vv_id"]);
    $counter++;
  }
}


?>