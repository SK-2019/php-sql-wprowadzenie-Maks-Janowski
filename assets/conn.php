  
<?php

$conn=new mysqli($_SERVER['sqlservername'], $_SERVER['sqlusername'], $_SERVER['sqlpassword'], $_SERVER['sqldbname']);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
