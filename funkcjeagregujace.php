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
 
 
      
                  echo("<hr />");
             require_once('conn.php');
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
//         $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial');
//         $result=$conn->query($sql); //mysql
//             echo("<h3>Suma zarobków wszystkich kobiet</h3>");//nazwa nad tabelą
//             echo("<table border=1>");
//             echo("<li>SQL: $sql");
//             echo("<th>suma</th>");
//             echo("<th>nazwa działu</th>");
//                 while($row=$result->fetch_assoc()){
//                     echo("<tr>");
//                         echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
//                     echo("</tr>");
//                 }
//             echo("</table>");
//     echo("<hr />");
//     $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie not like "%a" and dzial=id_org and dzial=2 or dzial=3 group by dzial');
//     $result=$conn->query($sql); //mysql
//         echo("<h3>Suma zarobków mężczyzn pracujących w dziale 2 i 3</h3>");//nazwa nad tabelą
//         echo("<table border=1>");
//         echo("<li>SQL: $sql");
//         echo("<th>suma</th>");
//         echo("<th>nazwa działu</th>");
//             while($row=$result->fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");
// echo("<hr />");
            
    
            $sql=('SELECT nazwa_dzial,dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org');
            $result=$conn->query($sql); //mysql
                echo("<h3>Średnia zarobków wszystkich mężczyzn</h3>");//nazwa nad tabelą
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
            
            $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql); //mysql
        echo("<h3>Ilu jest wszystkich pracowników</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where imie like "%a" and dzial=id_org and dzial=1 or dzial=3 group by dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>Ile kobiet pracuje łącznie w działach 1 i 3</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
      
      
      
      
      
      
      echo("<h3>GROUP BY</h3>");
      
      
      function robot_pracownicy($nr_zad, $f_sql){
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
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
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
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
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
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
                $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
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
                    $conn = new mysqli("mysql-marcin-gaik.alwaysdata.net", "217182", "Marcin123", "marcin-gaik_php");
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
 ?>
            </body>
</html>
