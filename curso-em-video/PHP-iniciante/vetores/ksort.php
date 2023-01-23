<pre>
<?php
    $letras = array(4=>"A", 2=>"B", 1=>"C", 3=>"D");
    print_r($letras);

    ksort($letras);
    print_r($letras);

    krsort($letras);
    print_r($letras);