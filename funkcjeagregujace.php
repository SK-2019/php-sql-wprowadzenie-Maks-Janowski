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
            $result=$conn->query($sql); 
                echo("<h3>Suma zarobków wszystkich pracowników</h3>");
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
        $result=$conn->query($sql);
            echo("<h3>Suma zarobków wszystkich kobiet</h3>");
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
    
 
      $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie not like "%a" and dzial=id_org and dzial=2 or dzial=3 group by dzial');
    $result=$conn->query($sql); 
        echo("<h3>Suma zarobków mężczyzn pracujących w dziale 2 i 3</h3>");
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
            
    
        	  	 $sql = 'SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a"';
echo("<h2>Zadanie 4 - Średnia zarobków wszystkich mężczyzn.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 echo("<hr />");

require_once('connect.php');
	 	 $sql = 'SELECT avg(zarobki) as srednia from pracownicy where dzial=4';
echo("<h2>Zadanie 5 - Średnia zarobków pracowników z działu 4.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 echo("<hr />");

require_once('connect.php');
	 	 $sql = 'SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a" and (dzial=1 or dzial=2)';
echo("<h2>Zadanie 6 - Średnia zarobków mężczyzn z działu 1 i 2.</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Średnia</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["srednia"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 echo("<hr />");

require_once('connect.php');
	  $sql = 'SELECT count(imie) as ilosc FROM pracownicy';
echo("<h2>Zadanie 7 - Ilu jest wszystkich pracowników?</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Ilość</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["ilosc"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
	 echo("<hr />");

require_once('connect.php');
	 	 	 $sql = 'SELECT count(imie) as ilosc from pracownicy where imie like "%a" and (dzial=1 or dzial=3)';
echo("<h2>Zadanie 8 - Ile kobiet pracuje łącznie w działach 1 i 3?</h2>");
echo("<li>".$sql);


 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Ilość</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["ilosc"]."</td>"); 
                echo("</tr>");
            }

        echo("</table>");
        echo("<hr />");
      

 ?>
            </body>
</html>
