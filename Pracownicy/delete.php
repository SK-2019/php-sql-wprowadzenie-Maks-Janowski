<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> Maksymilian Janowski 2Ti gr2 nr11 </title>
   </head>
<body>
<h1>Maksymilian Janowski 2Ti</h1>
   
   <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Maks-Janowski"> link do mojego githuba </a>
   <a class="nav_link" href="pracownicy.php"><b>Pracownicy<b></a>
   <a class="nav_link" href="funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
   <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy Organizacja<b></a>
   <a class="nav_link" href="/">Strona Glowna</a>  
   <a class="nav_link" href="data.php"><b>Data<b></a>
   <a class="nav_link" href="danedobazy.php"><b>Danedobazy<b></a>
         <a class="nav_link" href="function.php"><b>Funkcja<b></a>


<?php
  
            
  echo("<li>ID: ".$_POST['id']."</li>");

  require_once("conn.php");

  $sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
  
  
  if ($conn->query($sql) === TRUE) {
    echo("Record deleted successfully!");
    header('Location:https://mj-app-app.herokuapp.com/danedobazy.php');
  } else {
    echo("Error: " . $sql . "<br>" . $conn->error);
  }
  $conn->close();


?>

</body>
   </html>
