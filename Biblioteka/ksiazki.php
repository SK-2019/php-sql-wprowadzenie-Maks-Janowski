<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
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


require_once('assets/conn.php');

$sql=('SELECT * FROM biblTytul');
$result=$conn->query($sql);
    echo("<hr />");
    echo("<h3>Biblioteka Tytul</h3>");
    echo("<li>$sql");
    echo("<select name='title' id='title'>");
  
        while($row=$result->fetch_assoc()){
           
            echo("<option value=".$row['id'].">".$row['tytul']."</option>");
           /*echo("<option value=2>tytul jakis</option>");*/
        }
    echo("</select>");

      
      
      require_once('conn.php');

$sql=('SELECT * FROM biblAutor');
$result=$conn->query($sql);
    echo("<hr />");
    echo("<h3>Biblioteka Autor</h3>");
    echo("<li>$sql");
    echo("<select name='title' id='title'>");
  
        while($row=$result->fetch_assoc()){
           
            echo("<option value=".$row['id'].">".$row['autor']."</option>");
        }
    echo("</select>");
echo("<hr />");
      

      
      
      
   $sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';
$result=$conn->query($sql);
    echo("<h3>Biblioteka Autor i Tytul</h3>");
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>autor</th>");
    echo("<th>tytul</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
                   echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>"); 
            echo("</tr>");
        }
    echo("</table>");
echo("<hr />");



?>
</body>
   </html>
