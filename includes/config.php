<?php

$server = "localhost";
$user = "admin";
$password = "sio";
$dbname = "ACF2L";
// Create connection
$conn = new mysqli($server, $user, $password, $dbname);
// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

global $conn;

?>