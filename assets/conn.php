  
<?php

$conn=new mysqli($sqlservername, $sqlusername, $sqlpassword, $sqldbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
