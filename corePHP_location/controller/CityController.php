<?php
    include('../util/DatabaseHelper.php');

    $state_id = $_REQUEST['state_id'];
    $databaseObj = new DatabaseHelper();

    $cities = $databaseObj->getCity($state_id);
  
    $response="";
    $response = $response."<option value=''> Select State </option>";
     foreach($cities as $city =>$val) {
        $response = $response."<option value='" .$val['id'] . "'>" . $val['city_name']. "</option>";
     }
     echo $response;
  

?>