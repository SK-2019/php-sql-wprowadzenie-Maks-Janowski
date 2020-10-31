<h1>Maksymilian Janowski 2Ti</h1>
<?php
   require_once('conn.php');
  
    $sql=('SELECT * FROM pracownicy');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela Pracowników</h3>");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
                echo("</tr>");
            }
        echo("</table>");
    echo("<hr />");
    $sql=('SELECT * from pracownicy where and imie like "%a"');
    $result=$conn->query($sql);
        echo("<h3>Tabela Kobiet</h3>");//nazwa nad tabelą
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
    $sql=('SELECT * from pracownicy order by imie asc');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Alfabetycznie</h3>");//nazwa nad tabelą
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
    $sql=('SELECT * from pracownicy order by zarobki asc');
    $result=$conn->query($sql); //mysql
        echo("<h3>Tabela Pracowników Posortowana Zarobkami Rosnąco</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");


?>

