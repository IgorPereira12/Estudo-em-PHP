<?php
    $nome = isset ($_GET ["nome"]) ? $_GET ["nome"] : "[não informado]";
    $ano = isset ($_GET ["ano"]) ? $_GET ["ano"] : 0;
    $sexo = isset ($_GET ["sexo"]) ? $_GET ["sexo"] : "[sem sexo]";
    $idade = date("Y") - $ano;

    echo "$nome é $sexo e tem $idade anos.";
?>
    <a href="02exercio.html">Voltar</a>
