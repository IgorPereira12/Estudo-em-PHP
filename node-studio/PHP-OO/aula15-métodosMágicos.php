<?php

    /*

    * tag "__toString()" -> permite que uma classe decida como se comportar quando convertida para uma string

    * tag "__invoke()" -> quando um script tenta chamar um objeto como uma função

    */

    class Pessoa {

        private $dados = array();

        public function __set($nome, $valor) {
            $this->dados[$nome] = $valor;
        }

        public function __get($nome) {
            return $this->dados[$nome];
        }

        public function __toString() {
            return "Tentei imprimir o objeto";
        }

        public function __invoke() {
            return "Objeto como função";
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = "Jane Doe";
    $pessoa->idade = "28 anos";
    $pessoa->sexo = "Feminino";

    echo $pessoa->nome."<br>";
    echo $pessoa->idade."<br>";
    echo $pessoa->sexo;