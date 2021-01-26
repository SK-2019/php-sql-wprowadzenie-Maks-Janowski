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
        <li class="item_link"><a class="link" href="pracownicy.php">Pracownicy</a></li>
        <li class="item_link"><a class="link" href="pracownicy_organizacja.php">Pracownicy Organizacja</a></li>        
        <li class="item_link"><a class="link" href="funkcjeagregujace.php">Funkcje Agregujace</a></li>
        <li class="item_link"><a class="link" href="data.php">Data</a></li>
        <li class="item_link"><a class="link" href="danedobazy.php">Dane Do Bazy</a></li>
        <li class="item_link"><a class="link" href="function.php">Funkcja</a></li>
        <li class="item_link"><a class="link" href="ksiazki.php">Biblioteka</a></li>
       </ul>   
     </div>
      <div class="item colorGreen"> 
       <h1> Tresc Strony </h1>   
      
<?php
    require_once('../conn.php');
    $result=$conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org');//mysql
        echo("<hr />");
        echo("<h3>Tabela pracowników</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
   
 
   $result = $conn->query('SELECT  * FROM pracownicy WHERE dzial=2');
        echo("<hr />");
        echo("<h3>Tabela pracowników z działu 2</h3>"); 
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
        echo("</tr>");
    }
        echo("</table>");
         

   $result = $conn->query('SELECT * FROM pracownicy where (dzial=2 or dzial=3)');
        echo("<hr />");
        echo("<h3>Tabela pracowników z działu 2 oraz z 3</h3>");
        echo("<table>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>data_urodzenia</th>");
                while($row = $result->fetch_assoc()) {
        echo("<tr>");
        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>"); 

        echo("</tr>");
    }
        echo("</table>");
   
   
            $result = $conn->query('SELECT imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and zarobki<30 and (dzial=1 or dzial=2)');
                echo("<hr />");
                echo("<h3>Tabela pracowników z zarobkiami mniejszymi niz 30</h3>");
                echo("<table>");
                echo("<th>imie</th>");
                echo("<th>dzial</th>");
                echo("<th>zarobki</th>");
                
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 
        
                        echo("</tr>");
                    }
                       echo("</table>");
   
   
?>
    </body>
</html>
