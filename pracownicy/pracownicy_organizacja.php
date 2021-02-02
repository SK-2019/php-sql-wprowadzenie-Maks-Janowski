<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<link rel="icon" type="image/ico" sizes="16x16" href="../assets/favicon.ico">
 <title> Maksymilian Janowski 2Ti gr2 nr11 </title>
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

   
      require_once('../assets/conn.php');
   
   
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

          $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and (dzial=1 or dzial=4)');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela pracowników z dzialu 1 oraz 4</h3>");
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
      
      
      
                $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and imie like "%a"');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela kobiet</h3>");
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
      
      
      
                      $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and imie not like "%a"');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela mezczyzn</h3>");
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

         
      
      echo("<h3>SORTOWANIE</h3>");
      
      
      $sql=('select * from pracownicy,organizacja where dzial=id_org order by imie desc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela pracownikow posortowanych malejaco wg imienia</h3>");
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
      
      
      
            $sql=('select * from pracownicy,organizacja where dzial=id_org and dzial=3 order by imie asc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela pracownikow dzialu 3 posortowanych rosnaco wg imienia</h3>");
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

      
           $sql=('select * from pracownicy,organizacja where dzial=id_org and imie like "%a" order by imie asc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela pracownikow kobiet posortowanych rosnaco wg imienia</h3>");
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
      
      
      
      
                 $sql=('select * from pracownicy,organizacja where dzial=id_org and imie like "%a" order by zarobki asc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela pracownikow kobiet posortowanych rosnaco wg zarobkow</h3>");
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
      
    
      
                       $sql=('select * from pracownicy,organizacja where dzial=id_org and imie not like "%a" order by nazwa_dzial, zarobki asc');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela pracownikow kobiet posortowanych rosnaco wg zarobkow</h3>");
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
      
      
      
?>
</body>
   </html>
      

      
