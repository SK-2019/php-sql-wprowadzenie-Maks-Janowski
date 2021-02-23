<!DOCTYPE html>
<html>
<head>
<title> Maksymilian Janowski 2Ti gr2 nr11 </title>
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/ico" sizes="16x16" href="assets/favicon.ico">
 </head>
 <body>
    <div class="container">
      <div class="item colorRed">
        <h1> Maksymilian Janowski 2Ti gr2 nr11 </h1>
        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlue">
       <h1> Menu Boczne: </h1>
       <ul>
        <li class="item_link"><a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-Maks-Janowski">Github</a></li>
        <li class="item_link"><a class="link" href="/">Strona Glowna</a></li>
        <li class="item_link"><a class="link" href="pracownicy/pracownicy.php">Pracownicy</a></li>
        <li class="item_link"><a class="link" href="pracownicy/pracownicy_organizacja.php">Pracownicy Organizacja</a></li>        
        <li class="item_link"><a class="link" href="pracownicy/funkcjeagregujace.php">Funkcje Agregujace</a></li>
        <li class="item_link"><a class="link" href="pracownicy/data.php">Data</a></li>
        <li class="item_link"><a class="link" href="pracownicy/danedobazy.php">Dane Do Bazy</a></li>
        <li class="item_link"><a class="link" href="cwiczenia/function.php">Funkcja</a></li>
        <li class="item_link"><a class="link" href="biblioteka/ksiazki.php">Biblioteka</a></li>
       </ul>   
     </div>
      <div class="item colorGreen"> 
       <h1> Tresc Strony </h1>
       <?php
               echo("<li> hostname : ".$_SERVER['HTTP_HOST']);
               echo("<li> SERVER: ".$_SERVER['sqlservername']);
               echo("<li> SERVER username: ".$_SERVER['sqlusername']);
               echo("<li> SERVER passsword: ".$_SERVER['sqlpassword']);
               echo("<li> SERVER database name: ".$_SERVER['sqldbname']);
       require_once('assets/conn.php');

    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela Pracowników</h3>");
        echo("<li>$sql");
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
    echo("<hr />");
$sql=('SELECT * from pracownicy,organizacja where dzial=id_org and imie like "%a"');
    $result=$conn->query($sql);
        echo("<h3>Tabela Kobiet</h3>");//nazwa nad tabelą
        echo("<li>$sql");
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
echo("<hr />");
$sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by imie asc');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Alfabetycznie</h3>");//nazwa nad tabelą
        echo("<li>$sql");
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
echo("<hr />");
$sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by zarobki asc');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Zarobkami Rosnąco</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>$sql");
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
$sql=('SELECT * from pracownicy,organizacja where dzial=id_org  order by imie asc');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Alfabetycznie</h3>");//nazwa nad tabelą
        echo("<li>$sql");
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
echo("<hr />");

   
?>
       </div>
     </body>
   </html>
