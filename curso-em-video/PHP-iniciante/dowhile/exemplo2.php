<?php
    $v = isset($_GET ["v"]) ? $_GET ["v"] : 1;

    $c = $v;
    $fat = 1;

    do {
        $fat = $fat * $c;
        $c--;
    } while ($c>=1);
    echo "$v! = $fat";
?>

    <br><a href="exemplo2.html">Voltar</a>