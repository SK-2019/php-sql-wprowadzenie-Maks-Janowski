<?php

echo("123");

function jakasfunkcja()
{
    echo("<li>teraz dziala");
    echo("<li>test");
    for($i =1; $i <10; $i++)
    {
        echo("to jest petla:" .$i);
    }
}

jakasfunkcja();
jakasfunkcja(3);



?>