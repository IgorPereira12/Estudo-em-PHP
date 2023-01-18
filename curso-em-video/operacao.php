<?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];

    $tipo = $_GET ["op"];


    $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
    echo "O resultado será $r";