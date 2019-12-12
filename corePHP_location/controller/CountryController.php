<?php
    include('../util/DatabaseHelper.php');

    $databaseObj = new DatabaseHelper();

    $countries = $databaseObj->getCountry();
  
    $response="";
    $response = $response."<option value=''> Select Country </option>";
     foreach($countries as $country =>$val) {
        $response = $response."<option value='" .$val['id'] . "'>" . $val['country_name']. "</option>";
     }
     echo $response;
  
?>