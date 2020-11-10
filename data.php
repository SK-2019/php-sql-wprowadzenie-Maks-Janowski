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
<?php
    require_once('conn.php');
    $result=$conn->query('select id_pracownicy, imie, nazwa_dzial, zarobki, year(curdate())-year(data_urodzenia) as wiek from pracownicy, organizacja where id_org=dzial", "Pracownicy + wiek:');
        echo("<hr />");
        echo("<h3>Tabela pracowników</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
	    echo("<th>Imie</th>");
	    echo("<th>Dział</th>");
	    echo("<th>Zarobki</th>");
	    echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
  echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td><td>".$row['wiek']."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
 
   
?>
    </body>
</html>
