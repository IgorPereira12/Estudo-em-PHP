<?php

    /*

    *na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra
     como parte de si própria

    */

    class Produtos {

        public $nome;
        public $valor;

        function __construct($nome, $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }

    class Carrinho {

        public $produtos;

        public function adicionar(Produtos $produto) {
            $this->produtos[] = $produto;
        }

        public function exibir() {
            foreach ($this->produtos as $produto) {
                echo $produto->nome."<br>";
                echo $produto->valor."<hr>";
            }
        }
    }

    $produto1 = new Produtos("PC", "R$ 5000,00");
    $produto2 = new Produtos("Fone", "R$ 250,00");

    $carrinho = new Carrinho();
    $carrinho->adicionar($produto1);
    $carrinho->adicionar($produto2);

    $carrinho->exibir();
