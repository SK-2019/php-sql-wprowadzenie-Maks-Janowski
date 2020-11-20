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
   <a class="nav_link" href="insert.php"><b>Formularz<b></a>
      
      
<?php
   require_once('conn.php');
                        echo("<hr>");
                        echo("<h3>Wiek poszczegolnych pracownikow (w latach)</h3>");
            $sql=('SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja where dzial=id_org');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>id</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa działu</th>");
                        echo("<th>wiek</th>");
                        echo("<th>data_urodzenia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td><td>".$row['data_urodzenia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
      
      
      
            echo("<h3>Wiek poszczegolnych pracownikow (w latach) z dzialu serwis</h3>");
                        $sql=('SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja where dzial=id_org and nazwa_dzial="serwis"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>id</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa działu</th>");
                        echo("<th>wiek</th>");
                        echo("<th>data_urodzenia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td><td>".$row['data_urodzenia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
 
                           echo("<h3>Suma lat wszystkich pracownikow</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
      
      
                              echo("<h3>Suma lat pracownikow z dzialu handel</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where nazwa_dzial="handel"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
      
      
      
      
      
                              echo("<h3>Suma lat kobiet</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy where imie like "%a"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Suma lat mezczyzn</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy where imie not like "%a"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Srednia lat pracownikow w poszczegolnych dzialach</h3>");
                        $sql=('SELECT nazwa_dzial,avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia from pracownicy,organizacja where dzial=id_org group by dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Średnia</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
                        
                        echo("<h3>Suma lat pracownikow w poszczegolnych dzialach  </h3>");
                        $sql=('SELECT nazwa_dzial,sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja where dzial=id_org group by dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Najstarsi pracownicy w kazdym dziale (nazwa_dział, wiek)</h3>");
                        $sql=('SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where id_org=dzial group by dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Najmlodsi pracownicy z dzialu handel i serwis (nazwa_dział, wiek)</h3>");
                        $sql=('SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where dzial=id_org and nazwa_dzial="handel" or nazwa_dzial="serwis" group by nazwa_dzial');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

      
                              echo("<h3>Najmlodsi pracownicy z dzialu handel i serwis (Imię, nazwa_dział, wiek)*</h3>");
                        $sql=('SELECT imie,min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy,organizacja where dzial=id_org and nazwa_dzial="handel" or nazwa_dzial="serwis" group by nazwa_dzial');
                    $result=$conn->query($sql);//mysql
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>imie</th>");
                        echo("<th>wiek</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['imie']."</td><td>".$row['wiek']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

      
                        echo("<h3>Dlugosc zycia pracownikow w dniach</h3>");
                        $sql=('SELECT imie,DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy');
                    $result=$conn->query($sql);//mysql
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>imię</th>");
                        echo("<th>dni życia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['imie']."</td><td>".$row['dni_zycia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

                        echo("<h3>Najstarszy mezczyzna</h3>");
                $sql=('SELECT * From pracownicy, organizacja where imie not like "%a" and dzial=id_org order by data_urodzenia asc limit 1');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
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
                        echo("<hr />");
                        
                        echo("<h2>Formatowanie Dat</h2>");
            echo("<hr />");
      
      
?>
    </body>
</html>
