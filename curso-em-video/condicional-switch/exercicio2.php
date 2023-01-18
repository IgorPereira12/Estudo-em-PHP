<?php
    $d = isset($_GET ["ds"]) ? $_GET ["ds"] : 0;

    switch ($d) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Dia letivo!";
            break;
        case 7:
        case 1:
            echo "Final de semana!";
            break;
        default:
            echo "Dia inválido";
    }
?>

    <br><a href="exercicio2.html">Voltar</a>
