<?php

// Local DB Data
$servername = "localhost";
$username = "root";
$password = "MyCatLikesToJumpHigh1234";
$database = "roshanportfolio";

// Hosting DB Data
// $servername = "sql212.infinityfree.com";
// $username = "if0_36952685";
// $password = "ZVoD6xQYtY8KD";
// $database = "if0_36952685_roshanportfolio";

$_conn = mysqli_connect($servername , $username , $password , $database);

if(!$_conn){
    die("database not connected : ". mysqli_connect_error());
}else{
    // echo "Connection was successful";
}