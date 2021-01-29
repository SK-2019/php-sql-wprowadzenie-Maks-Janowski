<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<title> Maksymilian Janowski 2Ti gr2 nr11 </title>
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
        <li class="item_link"><a class="link" href="Pracownicy/pracownicy.php">Pracownicy</a></li>
        <li class="item_link"><a class="link" href="Pracownicy/pracownicy_organizacja.php">Pracownicy Organizacja</a></li>        
        <li class="item_link"><a class="link" href="Pracownicy/funkcjeagregujace.php">Funkcje Agregujace</a></li>
        <li class="item_link"><a class="link" href="Pracownicy/data.php">Data</a></li>
        <li class="item_link"><a class="link" href="Pracownicy/danedobazy.php">Dane Do Bazy</a></li>
        <li class="item_link"><a class="link" href="Cwiczenia/function.php">Funkcja</a></li>
        <li class="item_link"><a class="link" href="Biblioteka/ksiazki.php">Biblioteka</a></li>
       </ul>   
     </div>
      <div class="item colorGreen"> 
       <h1> Tresc Strony </h1>
<?php
 
 
      
                  echo("<hr />");
             require_once('../assets/conn.php');
            $sql=('SELECT sum(zarobki) as suma from pracownicy');
            $result=$conn->query($sql); //mysql
                echo("<h3>Suma zarobków wszystkich pracowników</h3>");//nazwa nad tabelą
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>suma</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['suma']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");
        $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql); //mysql
            echo("<h3>Suma zarobków wszystkich kobiet</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>suma</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");


$sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=4 and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql); //mysql
            echo("<h3>Średnia zarobków pracowników z działu 4</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>srednia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where imie not like "%a" and dzial=1 or dzial=2 and dzial=id_org group by nazwa_dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>Średnia zarobków mężczyzn z działu 1 i 2</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>srednia</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            
      
      echo("<h3>GROUP BY</h3>");
      
      
      function robot_pracownicy($nr_zad, $f_sql){
                $conn = new mysqli("remotemysql.com", "WtbCi7xfxi", "BDDTxIAkhC", "WtbCi7xfxi");
                $sql=$f_sql;
                $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>id</th>");
                    echo("<th>imię</th>");
                    echo("<th>dział</th>");
                    echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");
                    }
    robot_pracownicy(1,'SELECT * FROM pracownicy');

            function robot_avg($nr_zad, $f_sql){
            $conn = new mysqli("remotemysql.com", "WtbCi7xfxi", "BDDTxIAkhC", "WtbCi7xfxi");
               $sql=$f_sql;
                $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>dział</th>");
                    echo("<th>średnia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td>");
                            echo("</tr>");
                            }
                    echo("</table>");
                }
    robot_avg(2,'SELECT dzial,avg(zarobki) as srednia from pracownicy group by dzial');

            function robot_count($nr_zad, $f_sql){
                $conn = new mysqli("remotemysql.com", "WtbCi7xfxi", "BDDTxIAkhC", "WtbCi7xfxi");
                $sql=$f_sql;
                $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>dział</th>");
                    echo("<th>ilość</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["dzial"]."</td><td>".$row["ilosc"]."</td>");
                            echo("</tr>");
                        }
                    echo("</table>");
                    }
    robot_count(3,'SELECT dzial,count(imie) as ilosc from pracownicy group by dzial');

            function robot_sum($nr_zad, $f_sql){
                 $conn = new mysqli("remotemysql.com", "WtbCi7xfxi", "BDDTxIAkhC", "WtbCi7xfxi");
                $sql=$f_sql;
                $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>dział</th>");
                    echo("<th>suma</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td>");
                            echo("</tr>");
                            }
                    echo("</table>");
                    }
    robot_sum(4,'SELECT dzial,sum(zarobki) as suma from pracownicy group by dzial');

            function robot_min($nr_zad, $f_sql){
                      $conn = new mysqli("remotemysql.com", "WtbCi7xfxi", "BDDTxIAkhC", "WtbCi7xfxi");
                    $sql=$f_sql;
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<h3>ZAD $nr_zad</h3>");
                        echo("<li>SQL: $sql");
                        echo("<th>dział</th>");
                        echo("<th>minimalne</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row["dzial"]."</td><td>".$row["minimalne"]."</td>");
                                echo("</tr>");
                                }
                        echo("</table>");
                        }
    robot_min(5,'SELECT dzial,min(zarobki) as minimalne from pracownicy group by dzial');
      
            echo("<hr />");
            echo("<h2>Having</h2>");
            echo("<hr />");

            
            $sql=('SELECT nazwa_dzial,sum(zarobki)as suma from pracownicy, organizacja where dzial=id_org GROUP BY nazwa_dzial HAVING sum(zarobki) < 28 ');
    $result=$conn->query($sql); //mysql
        echo("<h3>Suma zarobków w poszczególnych działach mniejsza od 28</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr>");

        $sql=('SELECT nazwa_dzial,avg(zarobki)as suma from pracownicy, organizacja WHERE imie not like "%a" GROUP BY nazwa_dzial HAVING avg(zarobki) > 30');
    $result=$conn->query($sql); //mysql
            echo("<h3>Średnie zarobków mężczyzn w poszczególnych działach większe od 30</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>średnia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr>");

            $sql=('SELECT nazwa_dzial,count(id_pracownicy)as suma from pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING count(id_pracownicy) > 3');
    $result=$conn->query($sql); //mysql
            echo("<h3>Ilość pracowników w poszczególnych działach większa od 3</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>ilość</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr>");
      
      
 ?>
            </body>
</html>
