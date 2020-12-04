<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
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
   <a class="nav_link" href="ksiazki.php"><b>Biblioteka<b></a>
            
        
        
<?php


require_once('conn.php');

$sql=('SELECT * FROM biblTytul');
$result=$conn->query($sql);
    echo("<hr />");
    echo("<h3>Biblioteka</h3>");
    echo("<li>$sql");
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>tytul</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row['id']."</td><td>".$row['tytul']."</td>");
            echo("</tr>");
        }
    echo("</table>");
echo("<hr />");




?>
</body>
   </html>