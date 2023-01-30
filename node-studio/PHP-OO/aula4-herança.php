<?php

    /*

    -herança é um recurso que permite que classes compartilhem atributos e métodos, a fim de reaproveitar
     códigos ou comportamentos generalizados

    -para herdar atributos e métodos -> tag "extends"

    */

    class Veiculo {

        public $modelo;
        public $cor;
        public $ano;

        public function Andar () {
            echo "Andou";
        }

        public function Parar () {
            echo "Parou";
        }
    }

    class Carro extends Veiculo {

        public $porta;
        public $volante;
        public $banco;

        public function __construct($modelo, $cor, $ano, $porta, $volante, $banco) {
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->ano = $ano;
            $this->setPorta($porta);
            $this->setVolante($volante);
            $this->banco = $banco;
        }

        public function setPorta($p) {
            $this->porta = $p;
        }

        public function Porta() {
            if ($this->porta == "Fechada"):
                echo "Porta fechada";
            else:
                echo "Porta aberta";
            endif;
        }

        public function setVolante($v) {
            $this->volante = $v;
        }

        public function Volante() {
            if ($this->volante == "Destravado"):
                echo "Volante destravado";
            else:
                echo "Volante travado";
            endif;
        }
    }

    class Moto extends Veiculo {

        public $tripe;

        public function setTripe($t) {
            $this->tripe = $t;
        }

        public function Tripe() {
            if ($this->tripe == "Abaixado"):
                echo "Tripe abaixado";
            else:
                echo "Tripe levantado";
            endif;
        }
    }

    $carro = new Carro("Mercedinha", "Prata", 2002, "Fechada", "Destravado", "Tecido");
    $carro->Andar();
    echo "<br/>";
    $carro->Porta();
    echo "<br/>";
    $carro->Volante();
    echo "<br/>";
    print_r($carro);

    echo "<br/>";
    echo "<br/>";

    $moto = new Moto();
    $moto->modelo = "Harley-Davidson";
    $moto->cor = "Preta";
    $moto->ano = 2022;
    $moto->Parar();
    echo "<br/>";
    $moto->setTripe("Abaixado");
    $moto->Tripe();
    echo "<br/>";
    print_r($moto);

