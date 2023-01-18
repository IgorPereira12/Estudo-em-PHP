<?php
    $nome = "    John Doe    ";
    echo strlen($nome), "<br>";

    $novo = trim($nome);
    echo $novo, "<br>";

    echo strlen($novo), "<br>";

    $novo1 = ltrim($nome);
    $novo2 = rtrim($nome);

    echo strlen($novo1), "<br>";
    echo strlen($novo2);
