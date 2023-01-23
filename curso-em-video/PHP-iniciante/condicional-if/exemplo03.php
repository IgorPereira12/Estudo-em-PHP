<?php
    $nota1 = isset($_GET ["nota1"]) ? $_GET ["nota1"] : 0;
    $nota2 = isset($_GET ["nota2"]) ? $_GET ["nota2"] : 0;
    $media = ($nota1 + $nota2)/2;
    echo "A média é igual a $media, ";

    if ($media<5) {
        $notaFinal = "reprovado";
    }

    elseif ($media>=5 && $media<=7) {
        $notaFinal = "em recuperação";
    }
        else {
            $notaFinal = "aprovado";
        }
    echo "o aluno está $notaFinal.";
?>

<br><a href="exemplo03.html">Voltar</a>


