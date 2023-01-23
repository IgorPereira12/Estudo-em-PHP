<?php
     $n = isset($_GET ["n"]) ? $_GET ["n"] : 1;
        for ($c=1; $c<=10; $c++) {
            $r = $n * $c;
            echo "$n * $c = $r <br>";
        }
?>

    <a href="for1.php">Voltar</a>
