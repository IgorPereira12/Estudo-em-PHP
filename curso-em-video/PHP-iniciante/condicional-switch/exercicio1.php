<?php
    $n = isset($_GET ["n"]) ? $_GET ["n"] : 0;
    $o = isset($_GET ["op"]) ? $_GET ["op"] : 1;

    switch ($o) {
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = $n * $n * $n;
            break;
        case 3:
            $r = sqrt($n);
    }
    echo "O resultado da operação é $r";
?>

    <br><a href="exercicio1.html">Voltar</a>
