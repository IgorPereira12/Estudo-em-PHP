<?php

    /*

    *acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro

    */

    class Pedido {

        public $numero;
        public $cliente;
    }

    class Cliente {

        public $nome;
        public $endereco;
    }

    $cliente = new Cliente();
    $cliente->nome = "Jane Doe";
    $cliente->endereco = "Rua Something, nº 666";

    $pedido = new Pedido();
    $pedido->numero = "12";
    $pedido->cliente = $cliente;

    $dados = array(

        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'endereco_cliente' => $pedido->cliente->endereco
    );

    print_r($dados);
