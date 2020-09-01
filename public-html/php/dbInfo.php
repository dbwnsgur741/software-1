<?php

// connect with databases
$conn = new mysqli('db','user','test',"myDb");

// connection error
if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}

?>