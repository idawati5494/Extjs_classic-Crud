<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="personnel";
    
    $conn = new mysqli($servername, $username,$password,$dbname);
    if($conn->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }
    $callback = $_REQUEST['callback'];
    $records = json_decode($_REQUEST['records']);
    $name = $records->{"name"};
    $belt = $records->{"belt"};
    $special_power =  $records->{"special_power"};
   

    $uotput = array();
    $success ='false';
    $query ="insert into ninjas (name,belt,special_power) values ('$name', '$belt', '$special_power')";
    if ($conn->query($query) === TRUE) {
        $success = 'true';
    }
    else {
        $success = 'false';
        $error = $conn->error;
    }
    if ($callback){
        header('Content-Type: text/javascript');
        echo $callback .'({"success": '.$success.', "items": '. json_encode($output). '});';
    }else {
        header('Content-Type:application/x-json');
        echo json_encode($output);
    }
$conn->close();
?>