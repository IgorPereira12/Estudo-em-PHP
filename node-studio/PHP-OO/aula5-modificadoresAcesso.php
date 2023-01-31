<?php

    /*

    *tag "public" -> fará com que não haja ocultação nenhuma, toda propriedade ou método declarado serão
    acessíveis por todos que quiserem acessá-los

    *tag "protected" -> faz com que todos os herdeiros vejam as propriedades ou métodos protegidos como se
    fossem públicos

    *tag "private" -> faz com que qualquer método ou propriedade seja visível só e somente só pela classe
    que a declarou

    */

    class Animal {

        public $nome;
        protected $cor;
        private $pelagem;

        public function Velocidade () {
            echo "Velocidade: 78 km/h";
        }

        protected function Peso () {
            echo "Peso: 432 kg";
        }

        private function Sexo () {
            echo "Sexo: Macho";
        }

        public function mostrarAcao () {
            $this->Sexo();
        }

        public function setPelagem($pelagem) {
            $this->pelagem = $pelagem;
        }

        public function getPelagem() {
            return $this->pelagem;
        }
    }

    class Cavalo extends Animal {

        public function setCor($cor) {
            $this->cor = $cor;
        }

        public function getCor() {
            return $this->cor;
        }

        public function mostrarAcao2 () {
            $this->Peso();
        }
    }

    $cavalo = new Cavalo();

    echo "Tipo Animal: Cavalo";
    echo "<br>";
    echo "<br>";

    $cavalo->nome = "Nome: Odin";
    echo $cavalo->nome;
    echo "<br>";

    $cavalo->setCor("Cor: Preto");
    echo $cavalo->getCor();
    echo "<br>";

    $cavalo->setPelagem("Pelagem: Longa");
    echo $cavalo->getPelagem();
    echo "<br>";

    $cavalo->mostrarAcao();
    echo "<br>";

    $cavalo->mostrarAcao2();
    echo "<br>";

    $cavalo->Velocidade();


