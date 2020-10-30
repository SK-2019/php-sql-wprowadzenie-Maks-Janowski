  
<?php
$servername = "remotemysql.com";
$username = "WtbCi7xfxi";
$password = "BDDTxIAkhC";
$dbname = "WtbCi7xfxi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
