<?php
    $nota1 = $_GET ["n1"];
    $nota2 = $_GET ['n2'];
    $m = ($nota1+$nota2)/2;

    $sit = ($m<6) ? "REPROVADO" : "APROVADO";
    echo "A situação do aluno é $sit";

    $nota3 = $_GET ["n3"];
    $nota4 = $_GET ['n4'];
    $n = ($nota3+$nota4)/2;
    echo "<br/>A situação do aluno é " . (($n<7) ? "REPROVADO" : "APROVADO");

    $ano = $_GET ["an"];
    $idade = 2022 - $ano;
    echo "<br/> Quem nasceu em $ano tem $idade anos ";
    $tipo = ($idade >= 18 && $idade<65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
    echo  "e seu voto é $tipo.";
