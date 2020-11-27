       <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <link rel="stylesheet" href="style.css">	
</head>
<body>
 
  <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Maks-Janowski"> link do mojego githuba </a>
  <a class="nav_link" href="pracownicy.php"><b>Pracownicy<b></a>
  <a class="nav_link" href="funkcjeagregujace.php"><b>Funkcje Agregujace<b></a>
  <a class="nav_link" href="pracownicy_organizacja.php"><b>Pracownicy Organizacja<b></a>
  <a class="nav_link" href="/">Strona Glowna</a>  
  <a class="nav_link" href="data.php"><b>Data<b></a>
  <a class="nav_link" href="formularz.html"><b>Formularz<b></a>
  
  
  
      <h3>Dodaj pracownika do tabelki:</h3>
  <form action="insert.php" method="POST">
   imie: <input type="text" name="imie"></br>
   dzial: <input type="text" name="dzial"></br>
    zarobki: <input type="text" name="zarobki"></br>
    data_urodzenia: <input type="text" name="data_urodzenia"></br>
    <input type="submit" value="wyślij do insert.php">
  </form>

	 <h3>Usun pracownika z tabelki:</h3>	  
	  <form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="Id pracownika"></br>
   	<input type="submit" value="usun">
	</form>

	  
	  <?php	  
 require_once('conn.php');

    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql);     
        echo("<table>");      
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>nazwa_dzialu</th>");
        echo("<th>usun</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("<td><form action='delete.php' method=POST>");
                     echo("<name='id' value='".$row['id_pracownicy']."'>");
                     echo("<input type=submit value='usun'>");
                    echo("</form></td>");
                echo("</tr>");
            }
        echo("</table>");

?>
       </body>
</html>
	  
