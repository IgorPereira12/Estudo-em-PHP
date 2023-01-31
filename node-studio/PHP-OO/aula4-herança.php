<?php

    /*

    *herança é um recurso que permite que classes compartilhem atributos e métodos, a fim de reaproveitar
     códigos ou comportamentos generalizados

    *para herdar atributos e métodos -> tag "extends"

    */

    class Veiculo {

        public $modelo;
        public $cor;
        public $ano;

        public function Andar () {
            echo "Em movimento";
        }

        public function Parar () {
            echo "Parado";
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

        public function setPorta($porta) {
            $this->porta = $porta;
        }

        public function Porta() {
            if ($this->porta == "Fechada"):
                echo "Porta fechada";
            else:
                echo "Porta aberta";
            endif;
        }

        public function setVolante($volante) {
            $this->volante = $volante;
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

        public function setTripe($tripe) {
            $this->tripe = $tripe;
        }

        public function Tripe() {
            if ($this->tripe == "Abaixado"):
                echo "Tripe abaixado";
            else:
                echo "Tripe levantado";
            endif;
        }
    }

    $carro = new Carro("Mercedinha", "Prata", 2002, "Fechada",
                       "Destravado", "Tecido");

    print_r($carro);
    echo "<br>";

    $carro->Andar();
    echo "<br>";

    $carro->Porta();
    echo "<br>";

    $carro->Volante();

    echo "<br>";
    echo "<br>";

    $moto = new Moto();

    $moto->modelo = "Harley-Davidson";
    $moto->cor = "Preta";
    $moto->ano = 2022;
    print_r($moto);
    echo "<br>";

    $moto->Parar();
    echo "<br>";

    $moto->setTripe("Abaixado");
    $moto->Tripe();



