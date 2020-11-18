<?php

echo("Witam na strona.php");

echo($_POST["id"]);
echo($_POST["imie"]);

  require_once('conn.php');
  $sql = "INSERT INTO pracownicy (id_pracownicy, imie)
  VALUES ('".$_POST['id'].",'".$_POST['imie']."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();



?>
