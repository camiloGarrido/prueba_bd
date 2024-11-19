<?php

$servername = "127.0.0.1";  // Host
$username = "admin";  //User
$password = 'admin'; // Password  
$dbname = "bbdd4"; // dbname
$port = 33568; // dbname

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if ($conn->connect_error) {
die("Conexion Fallida: " . $conn->connect_error);
}

?>
