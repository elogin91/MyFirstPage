<?php require "dataconex.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $bd, $puerto);
// Check connection
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
} 
?>