<?php

include 'koneksi.php';

//create database
$db = "poltek_idn";
$sql = "CREATE DATABASE $db ";


if($conn->query($sql)=== TRUE){
    echo "database $db created successfully";
} else{
    echo "error creating database: " . $coon->error;
}

$conn->close();


?>