<?php

    header("Access-Control-Allow-Methods: GET");
    header("content-Type: application/json");

    include("../config/config.php");
    $config=new config();

    if($_SERVER['REQUEST_METHOD']=="GET"){
        $data=$config->fetchTrain();
        
        $all_train=[];
        while($result=mysqli_fetch_assoc($data)){
            array_push($all_train,$result);
        }
        $arr['data']=$all_train;
    } else{
        $arr['error'] ="Only GET HTTP Request type will allowed";
    }
    echo json_encode($arr);

?>