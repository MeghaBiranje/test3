<?php
    include('../util/DatabaseHelper.php');

    $country_id = $_REQUEST['country_id'];
    $databaseObj = new DatabaseHelper();

    $states = $databaseObj->getState($country_id);
  
    $response="";
    $response = $response."<option value=''> Select State </option>";
     foreach($states as $state =>$val) {
        $response = $response."<option value='" .$val['id'] . "'>" . $val['state_name']. "</option>";
     }
     echo $response;
  

?>