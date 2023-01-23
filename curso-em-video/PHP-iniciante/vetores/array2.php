<pre>
<?php
    $letras = array("A", "B", "C", "D");
    print_r($letras);

    $letras[] = "E";
    print_r($letras);

    $contagem = count($letras);
    echo "O vetor tem $contagem elementos";
