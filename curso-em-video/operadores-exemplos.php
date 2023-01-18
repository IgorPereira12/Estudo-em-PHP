<?php
    $preco = $_GET ["p"];
    echo "O preço do produto é R$ " . number_format($preco, 2);
    $preco += $preco*10/100;
    echo "<br/>E o novo preço com aumento de 10% será R$ " . number_format($preco, 2);
