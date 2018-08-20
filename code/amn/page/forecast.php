<?PHP


/**
 * linear regression function
 * @param $x array x-coords
 * @param $y array y-coords
 * @returns array() m=>slope, b=>intercept
 */
function linear_regression($x, $y) {

  // calculate number points
  $n = count($x);
  
  // ensure both arrays of points are the same size
  if ($n != count($y)) {

    trigger_error("linear_regression(): Number of elements in coordinate arrays do not match.", E_USER_ERROR);
  
  }

  // calculate sums
  $x_sum = array_sum($x);
  $y_sum = array_sum($y);

  $xx_sum = 0;
  $xy_sum = 0;
  
  for($i = 0; $i < $n; $i++) {
  
    $xy_sum+=($x[$i]*$y[$i]);
    $xx_sum+=($x[$i]*$x[$i]);
    
  }
  
  // calculate slope
  $m = (($n * $xy_sum) - ($x_sum * $y_sum)) / (($n * $xx_sum) - ($x_sum * $x_sum));
  
  // calculate intercept
  $b = ($y_sum - ($m * $x_sum)) / $n;
    
  // return result
  return array("m"=>$m, "b"=>$b);

}

if (!$_SESSION["userCakeUser"] || !$_SESSION["userCakeUser"]["isAdmin"]) {
  $_SESSION["redirectPage"] = "amn/".$one;
  kickBack("", "admin_login", "");
  exit;
}

$winery_id = ($two) ?: 0;
$vintage_id = ($tri) ?: 0;
$today = time();
$two_years_ago = $today - (24 * 4 * 7 * 24 * 60 * 60);
$quarter_increment = 3 * 4 * 7 * 24 * 60 * 60;


if ($winery_id > 0) {
  $sql = "SELECT SUM(store_order_item.quantity) AS total_ordered, store_order_item.ident AS vintage_id, store_order_item.type, vintage.year, vintage.size, vintage.name AS vint_name,  winery.wy_id AS wy_id, winery.name AS wy_name  FROM store_order_item, store_order, recipient, vintage LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8' AND store_order_item.type =  '".BDW_LINE_ITEM_WINE."' AND winery.wy_id = '".$winery_id."'  AND store_order.placed >= '".$two_years_ago."' GROUP BY store_order_item.ident ORDER BY vintage.name, vintage.year ";
  $result = $mydb->runSql($sql);
  $vintage_name = NULL;
  $previous_vintage_name = NULL;
  $index = 0;
  while ($row = $mydb->getAssoc($result)) {
    $same_wine = FALSE;
    $total_qty = $row["total_ordered"];
    if ($total_qty > 0) {
      $vintage_id = $row["vintage_id"];
      $vintage_name = $row["vint_name"];
      if ($previous_vintage_name == $vintage_name) {
	$same_wine = TRUE;
	$index--;
      }
      $min_quarter = $two_years_ago;
      $max_quarter = $min_quarter + $quarter_increment;
      $x_array = NULL;
      $qtys = NULL;
      $xx = 0;
      while ($min_quarter < $today) {
	$sql2 = "SELECT SUM(store_order_item.quantity) AS total_ordered FROM store_order_item, store_order, recipient, vintage LEFT JOIN winery ON winery.wy_id = vintage.wy_id WHERE vintage.vint_id = store_order_item.ident AND store_order_item.o_id = store_order.o_id AND store_order.rec_id = recipient.rec_id AND store_order.status != '0' AND store_order.status != '4' AND store_order.status != '1' AND store_order.status != '7' AND store_order.status != '8' AND store_order_item.type =  '".BDW_LINE_ITEM_WINE."' AND store_order_item.ident = '".$vintage_id."' AND store_order.placed >= '".$min_quarter."' AND store_order.placed < '".$max_quarter."' GROUP BY store_order_item.ident ";
	$result2 = $mydb->runSql($sql2);
	  $x_array[] = $xx++;
	if ($row2 = $mydb->getAssoc($result2)) {
	  $qtys[] = $row2["total_ordered"];
	}
	else {
	  $qtys[] = 0;
	}
	$min_quarter = $max_quarter;
	$max_quarter = $min_quarter + $quarter_increment;
      }
      if ($same_wine) {
	$total_qty += $vintages[$index]['total_qty'];
	$qtys[0] += $vintages[$index]['q01'];
	$qtys[1] += $vintages[$index]['q02'];
	$qtys[2] += $vintages[$index]['q03'];
	$qtys[3] += $vintages[$index]['q04'];
	$qtys[4] += $vintages[$index]['q11'];
	$qtys[5] += $vintages[$index]['q12'];
	$qtys[6] += $vintages[$index]['q13'];
	$qtys[7] += $vintages[$index]['q14'];
      }
      $linear_regression = linear_regression($x_array, $qtys);
      $a = $linear_regression["m"];
      $b = $linear_regression["b"];
      $x1 = $xx++;
      $y1 = $a*$x1 + $b;
      $x2 = $xx++;
      $y2 = $a*$x2 + $b;
      $x3 = $xx++;
      $y3 = $a*$x3 + $b;
      $x4 = $xx++;
      $y4 = $a*$x4 + $b;
      //$product_name = makeOrderItemDescription(0, $row["wy_name"], $row["vint_name"]);
      $product_name = fullMobileCartName($row["wy_name"], $row["vint_name"],0, 0);
      $vintages[$index++] = array('product_name' => $product_name,
			  'total_qty' => $total_qty,
			  'q01' => $qtys[0],
			  'q02' => $qtys[1],
			  'q03' => $qtys[2],
			  'q04' => $qtys[3],
			  'q11' => $qtys[4],
			  'q12' => $qtys[5],
			  'q13' => $qtys[6],
			  'q14' => $qtys[7],
			  'q21' => number_format($y1, 0, '.', ''),
			  'q22' => number_format($y2, 0, '.', ''),
			  'q23' => number_format($y3, 0, '.', ''),
			  'q24' => number_format($y4, 0, '.', ''),
			  );
      $previous_vintage_name = $vintage_name;
    }
  }
}
//echo var_dump(linear_regression($x_array, $qtys));
$smarty->assign('vintages',$vintages);
$smarty->assign('sql',$sql);
