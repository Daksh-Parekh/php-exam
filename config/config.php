<?php

class config{
    private $HOST="localhost";
    private $USERNAME="root";
    private $PASSWORD="";
    private $DATABASE_NAME="railway_system";
    private $conn;

    private $RAILWAY_TABLE="railway";
    private $CUSTOMER_TABLE="customer";
   
    public function initDB(){
        $this->conn=mysqli_connect($this->HOST,$this->USERNAME,$this->PASSWORD,$this->DATABASE_NAME);
        return $this->conn;
    }

    public function insertTrain($trainName){
        $this->initDB();
        $query="INSERT INTO $this->RAILWAY_TABLE(train_name) VALUES('$trainName')";
        return mysqli_query($this->conn,$query);
    }

    public function fetchTrain(){
        $this->initDB();
        $query="SELECT * FROM $this->RAILWAY_TABLE";
        return mysqli_query($this->conn,$query);
    }
    public function deleteTrain($id){
        $this->initDB();
        $query="DELETE FROM $this->RAILWAY_TABLE WHERE id=$id";
        return mysqli_query($this->conn,$query);
    }

    public function updateTrain($id,$name){
        $this->initDB();
        $query="UPDATE $this->RAILWAY_TABLE set train_name='$name' WHERE id=$id";
        return mysqli_query($this->conn,$query);
    }

    public function singleFetchTrain($id){ 
        $this->initDB();
        $query="SELECT * FROM $this->RAILWAY_TABLE WHERE id=$id";
        return mysqli_query($this->conn,$query);
    } 

    public function insertCustomer($trainId,$name){
        $this->initDB();
        $query="SELECT * FROM $this->RAILWAY_TABLE WHERE id=$trainId";
        $res=mysqli_query($this->conn,$query);
        $record=mysqli_fetch_assoc($res);

        if($record){
            $query="INSERT INTO $this->CUSTOMER_TABLE(name,train_id) VALUES('$name',$trainId)";
            return mysqli_query($this->conn,$query);
        }else{
            return false;
        }
    }

    public function fetchCustomer(){
        $this->initDB();
        $query="SELECT * FROM $this->CUSTOMER_TABLE";
        return mysqli_query($this->conn,$query);
    }

    public function fetchSingleCustomer($id){
        $this->initDB();
        $query="SELECT * FROM $this->CUSTOMER_TABLE WHERE id=$id";
        return mysqli_query($this->conn,$query);
    }

    public function deleteCustomer($id){
        $this->initDB();
        $query="DELETE FROM $this->CUSTOMER_TABLE WHERE id=$id";
        return mysqli_query($this->conn,$query);
    }

    public function updateCustomer($trainId,$id,$name){
        $this->initDB();
        $query="UPDATE $this->CUSTOMER_TABLE set name='$name',train_id=$trainId WHERE id=$id";
        return mysqli_query($this->conn,$query);
    }

}
?>



