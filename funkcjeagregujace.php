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
  echo("<hr>");

    function tabelka1($zapytanie, $nazwa, $kolumna, $row1){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
	    echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("<table class='table2'>");
            echo("<th>$kolumna</th>");
            echo("<th>Dział</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row[$row1]."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
     }
    
    function tabelka2($zapytanie, $nazwa, $kolumna, $row1){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
	    echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("<table class='table2'>");
            echo("<th>$kolumna</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row[$row1]."</td>");
                    echo("</tr>");
		}
        echo("</table>");
        echo("<hr>");
     }

    function tabelka3($zapytanie, $nazwa, $kolumna, $row1){
        require("connect.php");
        $result=$conn->query($zapytanie);
        echo("<div>$nazwa</div>");
	    echo("<div class='zapytanie'>($zapytanie)</div>");
        echo("<table class='table2'>");
            echo("<th>$kolumna</th>");
	    echo("<th>Płeć</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row[$row1]."</td><td>".$row['plec1']."</td>");
                    echo("</tr>");
                }
        echo("</table>");
        echo("<hr>");
     }


    tabelka2("select sum(zarobki) as mysum from pracownicy", "Suma zarobków wszystkich pracowników:", "Suma", "mysum");

    tabelka2("select sum(zarobki) as mysum from pracownicy where imie like '%a'", "Suma zarobków wszystkich kobiet:", "Suma", "mysum");

    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (imie not like '%a') and (dzial=2 or dzial=3) group by dzial", "Suma zarobków mężczyzn pracujących w dziale 2 i 3:", "Suma", "mysum");

    tabelka2("select avg(zarobki) as myavg from pracownicy where imie not like '%a'", "Średnia zarobków wszystkich mężczyzn:", "Średnia", "myavg");

    tabelka1("select avg(zarobki) as myavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org and dzial=4 group by dzial", "Średnia zarobków pracowników z działu 4:", "Średnia", "myavg");

    tabelka1("select avg(zarobki) as myavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (imie not like '%a') and (dzial=1 or dzial=2) group by dzial", "Średnia zarobków mężczyzn z działu 1 i 2:", "Średnia", "myavg");

    tabelka2("select count(imie) as mycount from pracownicy", "Ilu jest wszystkich pracowników:", "Liczba", "mycount");

    tabelka2("select count(imie) as mycount from pracownicy where imie like '%a' and (dzial=1 or dzial=3)", "Ile kobiet pracuje łącznie w działach 1 i 3:", "Liczba", "mycount");


    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Suma zarobków w poszczególnych działach:", "Suma", "mysum");

    tabelka1("select count(zarobki) as mycount, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Ilość pracowników w poszczególnych działach:", "Liczba", "mycount");

    tabelka1("select avg(zarobki) as myavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Średnie zarobków w poszczególnych działach:", "Średnia", "myavg");

    tabelka3("select avg(zarobki) as myavg, if(imie like '%a', 'Kobiety', 'Mężczyźni') as plec1 from pracownicy group by plec1", "Średnia zarobków kobiet i mężczyzn:", "Średnia", "myavg");
    
    tabelka3("select sum(zarobki) as mysum, if(imie like '%a', 'Kobiety', 'Mężczyźni') as plec1 from pracownicy group by plec1", "Suma zarobków kobiet i mężczyzn:", "Suma", "mysum");

    //tabelka1("select sum(zarobki) as mysum, if((imie like '%a', 'Kobiety'), 'Mężczyźni') as plec from pracownicy group by dzial having mysum<28", "Suma zarobków w poszczególnych działach mniejsza od 28:", "Suma", "mysum");
    
   // tabelka1("select avg(zarobki) as myavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (imie not like '%a') group by dzial having myavg>30", "Średnie zarobków mężczyzn w poszczególnych działach większe od 30:", "Średnia", "myavg");


    echo("<hr>");
    echo("<hr>");

    tabelka1("select avg(zarobki) as yavg, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Średnie zarobki pracowników:", "Średnia", "yavg");

    tabelka1("select count(imie) as mycount, nazwa_dzial from pracownicy, organizacja where dzial=id_org and imie not like '%a' group by dzial order by dzial", "Liczba mężczyzn:", "Liczba", "mycount");

    tabelka1("select max(zarobki) as mymax, nazwa_dzial from pracownicy, organizacja where dzial=id_org and dzial=2 group by dzial", "Maksymalne zarobki z działu 2:", "Maks", "mymax");

    tabelka1("select min(zarobki) as mymin, nazwa_dzial from pracownicy, organizacja where dzial=id_org and imie not like '%a' group by dzial", "Minimalne zarobki mężczyzn:", "Min", "mymin");
    
    tabelka1("select sum(zarobki) as mysum, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial", "Suma zarobków:", "Suma", "mysum");

//              echo("<hr />");
//              require_once('conn.php');
//             $sql=('SELECT sum(zarobki) as suma from pracownicy');
//             $result=$conn->query($sql); //mysql
//                 echo("<h3>Suma zarobków wszystkich pracowników</h3>");//nazwa nad tabelą
//                 echo("<table border=1>");
//                 echo("<li>SQL: $sql");
//                 echo("<th>suma</th>");
//                     while($row=$result->fetch_assoc()){
//                         echo("<tr>");
//                             echo("<td>".$row['suma']."</td>");
//                         echo("</tr>");
//                     }
//                 echo("</table>");
//         echo("<hr />");
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
            
    
//             $sql=('SELECT nazwa_dzial,dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org');
//             $result=$conn->query($sql); //mysql
//                 echo("<h3>Średnia zarobków wszystkich mężczyzn</h3>");//nazwa nad tabelą
//                 echo("<table border=1>");
//                 echo("<li>SQL: $sql");
//                 echo("<th>srednia</th>");
//                 echo("<th>nazwa działu</th>");
//                     while($row=$result->fetch_assoc()){
//                         echo("<tr>");
//                             echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
//                         echo("</tr>");
//                     }
//                 echo("</table>");
//         echo("<hr />");

// $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=4 and dzial=id_org group by nazwa_dzial');
//         $result=$conn->query($sql); //mysql
//             echo("<h3>Średnia zarobków pracowników z działu 4</h3>");//nazwa nad tabelą
//             echo("<table border=1>");
//             echo("<li>SQL: $sql");
//             echo("<th>srednia</th>");
//             echo("<th>nazwa działu</th>");
//                 while($row=$result->fetch_assoc()){
//                     echo("<tr>");
//                         echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
//                     echo("</tr>");
//                 }
//             echo("</table>");
//     echo("<hr />");
//     $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where imie not like "%a" and dzial=1 or dzial=2 and dzial=id_org group by nazwa_dzial');
//     $result=$conn->query($sql); //mysql
//         echo("<h3>Średnia zarobków mężczyzn z działu 1 i 2</h3>");//nazwa nad tabelą
//         echo("<table border=1>");
//         echo("<li>SQL: $sql");
//         echo("<th>srednia</th>");
//         echo("<th>nazwa działu</th>");
//             while($row=$result->fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");
// echo("<hr />");
            
//             $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where dzial=id_org');
//     $result=$conn->query($sql); //mysql
//         echo("<h3>Ilu jest wszystkich pracowników</h3>");//nazwa nad tabelą
//         echo("<table border=1>");
//         echo("<li>SQL: $sql");
//         echo("<th>ilosc</th>");
//         echo("<th>nazwa działu</th>");
//             while($row=$result->fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");
// echo("<hr />");
//             $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where imie like "%a" and dzial=id_org and dzial=1 or dzial=3 group by dzial');
//     $result=$conn->query($sql); //mysql
//         echo("<h3>Ile kobiet pracuje łącznie w działach 1 i 3</h3>");//nazwa nad tabelą
//         echo("<table border=1>");
//         echo("<li>SQL: $sql");
//         echo("<th>ilosc</th>");
//         echo("<th>nazwa działu</th>");
//             while($row=$result->fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");
// echo("<hr />");
//             echo("<h2>Group by</h2>");
//             echo("<hr />");
            
//             $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where dzial=id_org group by dzial');
//     $result=$conn->query($sql); //mysql
//         echo("<h3>Suma zarobków w poszczególnych działach </h3>");//nazwa nad tabelą
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
//             $sql=('SELECT nazwa_dzial,count(zarobki) as ilosc from pracownicy,organizacja where dzial=id_org group by dzial');
//     $result=$conn->query($sql); //mysql
//         echo("<h3>Ilość pracowników w poszczególnych działach </h3>");//nazwa nad tabelą
//         echo("<table border=1>");
//         echo("<li>SQL: $sql");
//         echo("<th>ilosc</th>");
//         echo("<th>nazwa działu</th>");
//             while($row=$result->fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");
// echo("<hr />");
//             $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org group by dzial');
//     $result=$conn->query($sql); //mysql
//         echo("<h3>Średnie zarobków w poszczególnych działach</h3>");//nazwa nad tabelą
//         echo("<table border=1>");
//         echo("<li>SQL: $sql");
//         echo("<th>srednia</th>");
//         echo("<th>nazwa działu</th>");
//             while($row=$result->fetch_assoc()){
//                 echo("<tr>");
//                     echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
//                 echo("</tr>");
//             }
//         echo("</table>");
// echo("<hr />");
//             echo("<h2>Having</h2>");
//             echo("<hr />");

            
//             $sql=('SELECT nazwa_dzial,sum(zarobki)as suma from pracownicy, organizacja where dzial=id_org GROUP BY nazwa_dzial HAVING sum(zarobki) < 28 ');
//     $result=$conn->query($sql); //mysql
//         echo("<h3>Suma zarobków w poszczególnych działach mniejsza od 28</h3>");//nazwa nad tabelą
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
//         echo("<hr>");

//         $sql=('SELECT nazwa_dzial,avg(zarobki)as suma from pracownicy, organizacja WHERE imie not like "%a" GROUP BY nazwa_dzial HAVING avg(zarobki) > 30');
//     $result=$conn->query($sql); //mysql
//             echo("<h3>Średnie zarobków mężczyzn w poszczególnych działach większe od 30</h3>");//nazwa nad tabelą
//             echo("<table border=1>");
//             echo("<li>SQL: $sql");
//             echo("<th>średnia</th>");
//             echo("<th>nazwa działu</th>");
//                 while($row=$result->fetch_assoc()){
//                     echo("<tr>");
//                         echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
//                     echo("</tr>");
//                 }
//             echo("</table>");
//             echo("<hr>");

//             $sql=('SELECT nazwa_dzial,count(id_pracownicy)as suma from pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING count(id_pracownicy) > 3');
//     $result=$conn->query($sql); //mysql
//             echo("<h3>Ilość pracowników w poszczególnych działach większa od 3</h3>");//nazwa nad tabelą
//             echo("<table border=1>");
//             echo("<li>SQL: $sql");
//             echo("<th>ilość</th>");
//             echo("<th>nazwa działu</th>");
//                 while($row=$result->fetch_assoc()){
//                     echo("<tr>");
//                         echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
//                     echo("</tr>");
//                 }
//             echo("</table>");
//             echo("<hr>");
 ?>
            </body>
</html>
