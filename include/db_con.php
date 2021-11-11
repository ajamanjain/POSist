<?php
$servername = "localhost";
$username = "tailorsoft";
$password = "0011223344";
$database_name = "tailorsoft";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>