<?php

    /*

    objeto

    -tag classe = "class"
     nome da classe -> primeira letra maiúscula

    -características da classe = atributos

    -funções = métodos

    -instanciar classe = tag "new" + nome da classe

    -utilizar atributos e métodos dentro do escopo da classe -> tag "$this->"

    */

    class Pessoa {

        public $nome;
        public $idade;

        public function Falar () {
            echo $this->nome.", de ".$this->idade." anos, acabou de falar.";
        }
    }

    $igor = new Pessoa();
    $igor->nome = "Igor Pereira";
    $igor->idade = 31;
    $igor->Falar();
