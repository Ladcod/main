<?php

$servername = "localhost";
$port = "8888";
$username = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=wellness", $username, $password);
//   set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
}


?>