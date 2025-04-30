<?php
    header("Access-Control-Allow-Methods: PUT, PATCH");
    header('content-Type: application/json');

    include('../config/config.php');
    $config=new config();

    if($_SERVER['REQUEST_METHOD']=="PUT" || $_SERVER['REQUEST_METHOD']=="PATCH"){
        $input=file_get_contents("php://input");
        parse_str($input,$_UPDATE);
        $name=$_UPDATE['name'];
        $id=$_UPDATE['id'];

        $res=$config->updateTrain($id,$name);

        if($res){
            $arr['msg']="Train updation successfully";

        }else{

            $arr['msg']="Train updation failed";
        }     
        
    }else{
        $arr['error']="PLEASE SELECT PUT OR PATCH ";
    }
    echo json_encode($arr);
?>