<?php
    function soma ($a,$b) {
        $s = $a + $b;
        echo "<p>$s<p>";
    }

    soma(3,4);
    soma(5,6);
    soma(7,8);

    echo "<br>";

    function somy ($c,$d) {
        return $c - $d;
    }

    $x = 4;
    $y = 2;
    $r = somy($x,$y);
    echo "$r";

    echo "<br>";
    echo "<br>";

    function sony () {
        $p = func_get_args();
        $t = func_num_args();
        $z = 0;
        for ($i=0; $i<$t; $i++) {
            $z += $p[$i];
        }
        return $z;
    }

    $q = sony (3,5,6,7,4);
    echo "$q";


