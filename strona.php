<?php

echo("Witam na strona.php");

echo($_POST["id"]);
echo($_POST["imie"]);

  require_once('conn.php');
$sql = "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (null,john,2,70,1985-04-15)";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();



?>
