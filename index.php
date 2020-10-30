<?php


	function robocik( $nr_zad, $F_sql){
		require('/conn.php');
		echo("<h1>zad.$nr_zad</h1>");
		$result = $conn->query($F_sql);
		$wiersz = $result->fetch_assoc();
			while($wiersz = $result->fetch_assoc()){
				echo("<li>".$wiersz['imie']);
			}
	}
robocik(1,"Select * from pracownicy");
robocik(2,"Select * from pracownicy where imie like '%a'");
robocik(3,"Select * from pracownicy where imie not like '%a' and dzial = 2");
robocik(4,"Select * from pracownicy where imie not like '%a' and (dzial = 2 or dzial = 3) and zarobki<35");


?>

<h1> Maksymilian Janowski 11 </h1>
<?php
$conn = new mysqli("remotemysql.com","WtbCi7xfxi","BDDTxIAkhC","WtbCi7xfx");

//zad1

$result = $conn->query('SELECT avg(zarobki) as srednia from pracownicy where dzial = 1 or dzial = 2');
echo("<li> zadanie 1   SELECT avg(zarobki) as srednia from pracownicy where dzial = 1 or dzial = 2</li>");
echo("<table border = 1>");
echo("<th>srednia</th>");		
while($row = $result->fetch_assoc())
{
	echo("<tr>");
	echo("<td>".$row["srednia"]."</td>");
	echo("</tr>");
}
echo("</table");


//zad2

$result = $conn->query('SELECT min(zarobki) as minimalna from pracownicy where dzial = 2');
echo("<li> zadanie 2  SELECT min(zarobki) as minimalna from pracownicy where dzial = 2</li>");
echo("<table border = 1>");
echo("<th>minimalna</th>");		
while($row = $result->fetch_assoc())
{
	echo("<tr>");
	echo("<td>".$row["minimalna"]."</td>");
	echo("</tr>");
}
echo("</table");


//zad3


$result = $conn->query('SELECT * from pracownicy where imie not like "%a" and (zarobki between 25 and 30)');
echo("<li> zadanie 3  SELECT * from pracownicy where imie not like %a and (zarobki between 25 and 30</li>");
echo("<table border = 1>");
echo("<th>id</th>");
echo("<th>imie</th>");		
echo("<th>dzial</th>");		
echo("<th>zarobki</th>");				
while($row = $result->fetch_assoc())
{
	echo("<tr>");
	echo("<td>".$row["id"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
	echo("</tr>");
}
echo("</table");


//zad 4

$result = $conn->query('SELECT avg(zarobki) as srednia from pracownicy where imie not like "%a" and dzial = 1 or dzial = 2');
echo("<li> zadanie 4  'SELECT avg(zarobki) as srednia from pracownicy where imie not like %a and dzial = 1 or dzial = 2</li>");
echo("<table border = 1>");
echo("<th>srednia</th>");		
while($row = $result->fetch_assoc())
{
	echo("<tr>");
	echo("<td>".$row["srednia"]."</td>");
	echo("</tr>");
}
echo("</table");


//zad5


$result = $conn->query('SELECT avg(zarobki) as srednia from pracownicy group by dzial');
echo("<li> zadanie 5   SELECT avg(zarobki) as srednia from pracownicy group by dzial</li>");
echo("<table border = 1>");
echo("<th>srednia</th>");		
while($row = $result->fetch_assoc())
{
	echo("<tr>");
	echo("<td>".$row["srednia"]."</td>");
	echo("</tr>");
}
echo("</table");






?>
