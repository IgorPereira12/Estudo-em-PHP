<?php
    function teste (&$x) {
        $x += 2;
        echo "<p>$x<p/>";
    }

    $a = 3;
    teste($a);
    echo "<p>$a<p/>";