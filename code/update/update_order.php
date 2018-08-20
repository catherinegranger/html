<?PHP

if ($o_id) {
  if (isset($_POST["submit_verify"])) {
    $ship_address1 = trim($_POST["ship_address1"]);
    $ship_address2 = trim($_POST["ship_address2"]);
    $ship_city = trim($_POST["ship_city"]);
    $ship_state = trim($_POST["ship_state"]);
    $ship_zipcode = trim($_POST["ship_zipcode"]);
    //$ship_city = "palo alto";
    //$ship_zipcode = "940";

    // create curl resource 
    $ch = curl_init(); 

    // set url 
    $urltest = "http://production.shippingapis.com/ShippingAPITest.dll";
    $url = "http://Production.ShippingAPIs.com/ShippingAPI.dll";
    $post_data = "API=Verify&XML=<AddressValidateRequest USERID=\"975BLUED6282\"><Address ID=\"1\"><Address1>".$ship_address1."</Address1><Address2>".$ship_address2."</Address2><City>".$ship_city."</City><State>".$ship_state."</State><Zip5>".$ship_zipcode."</Zip5><Zip4></Zip4></Address></AddressValidateRequest>";
    $post_data2 = "API=Verify&XML=<AddressValidateRequest USERID=\"975BLUED6282\"><Address ID=\"0\"><Address1></Address1><Address2>6406 Ivy Lane</Address2><City>Greenbelt</City><State>MD</State><Zip5></Zip5><Zip4></Zip4></Address></AddressValidateRequest>";

    curl_setopt($ch, CURLOPT_URL, $url); 

    //return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // send the POST values to USPS
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);

    // $output contains the output string 
    $output = curl_exec($ch); 

    // close curl resource to free up system resources 
    curl_close($ch);   

    $data = strstr($output, '<?');
    $xml_parser = xml_parser_create();
    xml_parse_into_struct($xml_parser, $data, $vals, $index);
    xml_parser_free($xml_parser);
    $address = "";
    $element1 = $vals[2];
    $address = $address." ".$element1["value"];
    $element2 = $vals[3];
    $address = $address." ".$element2["value"];
    $element3 = $vals[4];
    $address = $address." ".$element3["value"];
    $element4 = $vals[5];
    $address = $address." ".$element4["value"];
    $element5 = $vals[6];
    $address = $address."-".$element5["value"];

    if (strpos($address, "Invalid") == false) {
      $_SESSION["validated_address"] = $address;
      kickBack('','amn/edit_order/'.$o_id,'success');
      exit;
    }
    else { // try without the zip code
      $post_data = "API=Verify&XML=<AddressValidateRequest USERID=\"975BLUED6282\"><Address ID=\"0\"><Address1>".$ship_address1."</Address1><Address2>".$ship_address2."</Address2><City>".$ship_city."</City><State>".$ship_state."</State><Zip5></Zip5><Zip4></Zip4></Address></AddressValidateRequest>";

      $ch = curl_init(); 
      curl_setopt($ch, CURLOPT_URL, $url); 
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
      $output = curl_exec($ch); 
      curl_close($ch);   

      $data = strstr($output, '<?');
      $xml_parser = xml_parser_create();
      xml_parse_into_struct($xml_parser, $data, $vals, $index);
      xml_parser_free($xml_parser);
      $address = "";
      $element1 = $vals[2];
      $address = $address." ".$element1["value"];
      $element2 = $vals[3];
      $address = $address." ".$element2["value"];
      $element3 = $vals[4];
      $address = $address." ".$element3["value"];
      $element4 = $vals[5];
      $address = $address." ".$element4["value"];
      $element5 = $vals[6];
      $address = $address."-".$element5["value"];
      $_SESSION["validated_address"] = $address;
      kickBack('','amn/edit_order/'.$o_id,'success');
      exit;
    }
  }
  else {
    $time_adjust = 60 * 60 * 3;
    $today = time() - $time_adjust;
    $values = array("status" => $status, 'status_timestamp' => $today, 'status_notes' => $status_notes);
    if ($mydb->update("store_order", $values, $params = " WHERE o_id = '".$o_id."'")) {
      kickBack('','amn/edit_order/'.$o_id,'success');
      exit;
    } 
    else {
      kickBack('','amn/edit_order/'.$o_id,'error');
      exit;
    }
  } 
}
else {
  kickBack('','amn/edit_order/'.$o_id,'error');
  exit;
}

?>