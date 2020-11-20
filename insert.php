     <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
</head>
<body>
 
  <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Maks-Janowski"> link do mojego githuba </a>
  <a class="nav_link" href="pracownicy.php"><b>Pracownicy<b></a>
  <a class="nav_link" href="funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
  <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy Organizacja<b></a>
  <a class="nav_link" href="/">Strona Glowna</a>  
  <a class="nav_link" href="data.php"><b>Data<b></a>
  <a class="nav_link" href="formularz.html"><b>Formularz<b></a>
       
     
     <form action="strona.php" method="POST">
     <input type="text" name="imie" placeholder="imie"></br>
     <input type="text" name="dzial" placeholder="dzial"></br>
     <input type="text" name="zarobki" placeholder="zarobki"></br>
     <input type="text" name="data_urodzenia" placeholder="data_urodzenia"></br>
     <input type="submit" value="wyślij do strona.php">
     </form>
	  
 
    
	  

       </body>
</html>
	  

	  
	  
 <?php
require_once("conn.php");
$result=$conn->query("Select * from pracownicy");
echo("<table border=1>");
    echo("<th>Id</th>");
    echo("<th>Imie</th>");
    echo("<th>Dzial</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Data_urodzenia</th>");
    echo("<th class=usun>Usun</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
            echo("<td><form action=usuwanie.php method=POST>");
            echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
            echo("<input type=submit value=Usun>");
            echo("</form></td>");
            echo("</tr>");}
echo("</table>");
?>
	  
	  
	  
