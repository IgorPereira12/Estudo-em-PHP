<?php

    /*

    *tag "namespace" -> utilizada para evitar conflito de arquivos e classes com mesmo nome

    */

    require 'classes/produto.php';
    require 'modelos/produto.php';

    use classes\Produto as productClass;
    use modelos\Produto as productModel;

    $produto = new productClass();
    $produto->mostrarDetalhes();

    echo "<br>";

    $produto2 = new productModel();
    $produto2->mostrarDetalhes();

