<?php

$a = isset($_GET ["ano"]) ? $_GET ["ano"] : 0;
$i = date("Y") - $a;
echo "Você nasceu em $a e tem $i anos, ";

if ($i<16) {
    $tipoVoto = "não pode votar";
}

elseif (($i>=16 && $i<18) || ($i>70)) {
        $tipoVoto = "o voto é opcional";
    }
    else {
        $tipoVoto = "o voto é obrigatório";
    }

echo "para essa idade, $tipoVoto.";
