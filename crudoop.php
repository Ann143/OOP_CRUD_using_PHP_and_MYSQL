<?php

class crudoop{

    public $conn;

 function __construct(){

     $this->conn = new mysqli("localhost","root","","sd208");

    //  if($this->conn){
    //     echo "Successfully connected to DB";
    //  }else{
    //     mysqli_connect_error();
    //  }
  }

  function insert($name, $course){
      $sql = "INSERT INTO person (`name`,`course`) VALUES('$name','$course')";
      $dbconn = $this->conn;
      mysqli_query($dbconn,$sql) or die(mysqli_error($dbconn)); 
      if ($dbconn==true) {
        header("Location:retrieve.php?msg1=insert");
    }else{
        echo "Registration failed try again!";
    }

    }
  

  function displayData(){
      $sql = "SELECT * FROM person";
      $dbconn = $this->conn->query($sql);
        if($dbconn->num_rows > 0) {
            $data = array();
            while ($row = $dbconn->fetch_assoc()) {
                $data[] = $row;
                }
            
                return $data;
      }else{
         echo "No found records";
        }
 
   }
}

?>