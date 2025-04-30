<?php

    header("Access-Control-Allow-Methods: GET");
    header("content-Type: application/json");

    include("../config/config.php");
    $config=new config();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id=$_POST['id'];
        $data=$config->fetchSingleCustomer($id);
        
        $record=mysqli_fetch_assoc($data);
        if($record){
            $arr['data']=$record;
        }
    } else{
        $arr['error'] ="Only POST HTTP Request type will allowed";
    }
    echo json_encode($arr);

?>