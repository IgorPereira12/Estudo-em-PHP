<?php

    /*

    *na composição, uma classe cria a instância de outra classe dentro de si própria, sendo assim, quando
     ela for destruída, a outra classe também será

    */

    class Pessoa {

        public function atribuirNome($nome) {
            return "O nome da pessoa é ".$nome.".";
        }
    }

    class Exibe {

        public $pessoa;
        public $nome;

        function __construct($nome) {
            $this->pessoa = new Pessoa();
            $this->nome = $nome;
        }

        public function exibirNome() {
            echo $this->pessoa->atribuirNome($this->nome);
        }
    }

    $exibe = new Exibe("John Doe");
    $exibe->exibirNome();
