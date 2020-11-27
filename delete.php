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


<?php
   require_once('conn.php');

   $sql=('SELECT * FROM pracownicy');
   $result=$conn->query($sql);
       echo("<hr />");
       echo("<h3>Tabela Pracowników</h3>");
       echo("<li>$sql");
       echo("<table border=1>");
       echo("<th>id</th>");
       echo("<th>imie</th>");
       echo("<th>dzial</th>");
       echo("<th>zarobki</th>");
       echo("<th>delete</th>");
           while($row=$result->fetch_assoc()){
               echo("<tr>");
               echo("<td>".$row['id_pracownicy']."</td>
               <td>".$row['imie']."</td>
               <td>".$row['dzial']."</td>
               <td>".$row['zarobki']."</td>
               <td>
              <form action = 'delete.php' method ='post'>
                <input type='text' name='id' placeholder='usun' value'" .$row["id"]. ">
                <input type='submit' value='usun'>               
                </form>
               
               
               </td>");   
               echo("</tr>");
           }
       echo("</table>");
        
 
            echo ("<h1>id: ".$_POST['id']."</h1>");
require_once("connect.php");

 $sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";

if ($conn->query($sql) === TRUE) {
        echo("<h1 class='precord'> Pracownik Usuniety </h1>");
      } else {
        echo("<h1 class='precord'>'Error: ' . $sql . '<br>' . $conn->error</h1>");
      }
      


?>



</body>
   </html>
