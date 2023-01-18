<?php
    $a = 3;
    $b = $a;
    $b += 5;

    echo $a;
    echo "<br/> $b";

    $c = 4;
    $d = &$c;
    $d += 6;

    echo "<br/>$c";
    echo "<br/> $d";

