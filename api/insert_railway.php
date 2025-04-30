<?php
    header("Access-Control-Allow-Methods: POST");
    header('content-Type: application/json');

    include('../config/config.php');
    $config=new config();

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        $res=$config->insertTrain($name);

        if($res){
            
            http_response_code(201);
            $arr['msg']="Train successfully inserted";

        }else{

            $arr['msg']="Train insertion failed";
        }     
        
    }else{
        $arr['error']="PLEASE SELECT POST ";
    }
    echo json_encode($arr);
?>