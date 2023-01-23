<?php
    $a = 3;
    $b = "3";
    $r = ($a == $b) ? "SIM" : "NÃO";
    echo "As variáveis A e B são iguais? $r";

    $r = ($a === $b) ? "SIM" : "NÃO";
    echo "<br/>As variáveis A e B são idênticas? $r";
