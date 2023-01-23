<?php
    $a = isset($_GET ["ano"]) ? $_GET ["ano"] : 0;
    $i = date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos, ";

    if ($i>=18) {
        $v = "pode votar";
        $d = "pode dirigir";
    }

    else {
        $v = "não pode votar";
        $d = "não pode dirigir";
    }

    echo "com essa idade você $v e também $d.";