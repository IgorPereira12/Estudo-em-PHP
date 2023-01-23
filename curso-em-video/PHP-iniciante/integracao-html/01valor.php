<?php
    $valor = $_GET ["v"];
    $rq = sqrt($valor);

    echo "A raiz de $valor é igual a " . number_format($rq, 2);

?>
    <a href="01exercicio.html">Voltar</a>