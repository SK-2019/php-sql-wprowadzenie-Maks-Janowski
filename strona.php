<?php

echo("Witam na strona.php");

echo($_POST["imie"]);
echo($_POST["dzial"]);
echo($_POST["zarobki"]);
echo($_POST["data_urodzenia"]);

  require_once('conn.php');
	$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_urodzenia']."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();



?>
