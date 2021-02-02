<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>
 <body>
    <div class="container">
      <div class="item colorRed">
        <h1> Maksymilian Janowski 2Ti </h1>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlue">
       <h1> Menu Boczne: </h1>
       <ul>
        <li class="item_link"><a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-Maks-Janowski">Github</a></li>
        <li class="item_link"><a class="link" href="/">Strona Glowna</a></li>
        <li class="item_link"><a class="link" href="../pracownicy/pracownicy.php">Pracownicy</a></li>
        <li class="item_link"><a class="link" href="../pracownicy/pracownicy_organizacja.php">Pracownicy Organizacja</a></li>        
        <li class="item_link"><a class="link" href="../pracownicy/funkcjeagregujace.php">Funkcje Agregujace</a></li>
        <li class="item_link"><a class="link" href="../pracownicy/data.php">Data</a></li>
        <li class="item_link"><a class="link" href="../pracownicy/danedobazy.php">Dane Do Bazy</a></li>
        <li class="item_link"><a class="link" href="../cwiczenia/function.php">Funkcja</a></li>
        <li class="item_link"><a class="link" href="../biblioteka/ksiazki.php">Biblioteka</a></li>
       </ul>   
     </div>
      <div class="item colorGreen"> 
       <h1> Tresc Strony </h1>

<?php

echo("123");

function jakasfunkcja()
{
    echo("<li>teraz dziala");
    echo("<li>test");
    for($i =1; $i <10; $i++)
    {
        echo("<li>to jest petla:" .$i);
    }
}

jakasfunkcja();
jakasfunkcja();



?>
        </div>
          </body>
        </html>
