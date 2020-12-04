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
   <a class="nav_link" href="danedobazy.php"><b>Danedobazy<b></a>
   <a class="nav_link" href="function.php"><b>Funkcja<b></a>
   <a class="nav_link" href="ksiazki.php"><b>Biblioteka<b></a>
            
        
        
<?php


require_once('conn.php');

$sql=('SELECT * FROM biblTytul');
$result=$conn->query($sql);
    echo("<hr />");
    echo("<h3>Biblioteka Tytul</h3>");
    echo("<li>$sql");
   /* echo("<select name="title" id="title>");*/
  
        while($row=$result->fetch_assoc()){
           
            /*echo("<option value=".$row['id'].">".$row['tytul']."</option>");*/
           /*echo("<option value=2>tytul jakis</option>");*/
        }
  /*  echo("</select>");*/
echo("<hr />");

      
 $sql=('SELECT * FROM biblAutor');
$result=$conn->query($sql);
    echo("<h3>Biblioteka Autor</h3>");
    echo("<li>$sql");
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>autor</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row['id']."</td><td>".$row['autor']."</td>");
            echo("</tr>");
        }
    echo("</table>");
echo("<hr />");
      
      
      
//      $sql=('SELECT * FROM biblAutor_biblTytul, biblAutor, biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id');
// $result=$conn->query($sql);
//     echo("<h3>Biblioteka Autor i Tytul</h3>");
//     echo("<li>$sql");
//     echo("<table border=1>");
//     echo("<th>id</th>");
//     echo("<th>biblAutor_id</th>");
//     echo("<th>biblTytul_id</th>");
//         while($row=$result->fetch_assoc()){
//             echo("<tr>");
//             echo("<td>".$row['id']."</td><td>".$row['biblAutor_id']."</td><td>".$row['biblTytul_id']."</td>");
//             echo("</tr>");
//         }
//     echo("</table>");
// echo("<hr />");



?>
</body>
   </html>
