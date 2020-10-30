<?php
$host = 'remotemysql.com'
$db = 'WtbCi7xfxi'
$user = 'WtbCi7xfxi'
$pass = 'BDDTxIAkhC'

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
