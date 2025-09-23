<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "stats"; // <-- perbaiki sesuai nama database di phpMyAdmin

$conn = mysqli_connect($host, $user, $pass, $db);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
