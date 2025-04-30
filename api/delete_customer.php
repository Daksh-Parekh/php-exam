<?php

    header("Access-Control-Allow-Method: DELETE");
    header("content-Type: application/json");

    include("../config/config.php");
    $config=new config();

    if($_SERVER['REQUEST_METHOD']=="DELETE"){
        $input=file_get_contents("php://input");
        parse_str($input,$_DELETE);
        $id=$_DELETE['id'];
        $res=$config->deleteCustomer($id);
        if($res){
            $arr['data']="Record deleted Successfuly";
        }else{
            $arr['error']="Record deletion failed";
        }
    }else{
        $arr['error']="Only DELETE HTTP request allowed";
    }
    echo json_encode($arr);

?>