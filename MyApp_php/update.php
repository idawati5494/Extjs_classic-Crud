<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="personnel";
    
    $conn = new mysqli($servername, $username,$password,$dbname);

    if ($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }

    $callback = $_REQUEST['callback'];
    $records = json_decode($_REQUEST['records']);
    $id = $records->{"id"};
    $name = $records->{"name"};
    $belt = $records->{"belt"};
    $special_power = $records->{"special_power"};
    $created_at = $records->{"created_at"};
    $updated_at = $records->{"updated_at"};
    $success = 'false';
    $error = 'no error';

    $output = array();
    $query="update ninjas set name='$name', belt='$belt', special_power= '$special_power' ,created_at= '$created_at',updated_at= '$updated_at' where id=$id ";
   if($conn->query($query)===TRUE){
       $success='true';
   }
  else {
        $error =$conn->error;
  }
   
    if($callback){
        header('Content-Type: text/javascript');
        echo $callback.'({"success":'.$success.',"message":"'.$error.'"});';
    } else {
        header('Content-Type:application/x-json');echo
        json_encode($output);
    }
    $conn->close();
?>