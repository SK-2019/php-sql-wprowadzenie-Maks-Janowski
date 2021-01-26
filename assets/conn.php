  
<?php
$servername = "remotemysql.com";
$username = "WtbCi7xfxi";
$password = "BDDTxIAkhC";
$dbname = "WtbCi7xfxi";

$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
