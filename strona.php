<?php

echo("Witam na strona.php");

echo($_POST["imie"]);
echo($_POST["Nazwisko"]);
echo($_POST["Klasa"]);

  require_once('conn.php');
  $sql = "INSERT INTO pracownicy (imie, nazwisko)
  VALUES ('John', 'Doe')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();



?>
