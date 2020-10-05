<?php
$servername = "localhost";
$dbUserName = "magento";
$dbPassword = "magento";
$dbname = "api";

// Create connection
$conn = new mysqli($servername, $dbUserName, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>