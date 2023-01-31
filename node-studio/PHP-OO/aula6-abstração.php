<?php

    /*

    *classe abstrata serve como modelo para as classes extendidas e não pode ser instanciada

    *métodos abstratos são obrigatórios nas classes extendidas

    *tag abstração = "abstract"

    */

    abstract class Banco {

        protected $saldo;
        protected $limiteSaldo;
        protected $juros;

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        abstract protected function Sacar ($saque);
        abstract protected function Depositar ($deposito);
    }

    class Itau extends Banco {

        public function Sacar($saque) {
            $this->saldo -= $saque;
            echo "<hr> Sacou: R$ ".$saque.",00";
        }

        public function Depositar($deposito) {
            $this->saldo += $deposito;
            echo "<hr> Depositou: R$ ".$deposito.",00";
        }
    }

    $Itau = new Itau();

    $Itau->setSaldo (1000);
    echo "<hr> Saldo: R$ ".$Itau->getSaldo().",00";

    $Itau->Sacar(250);
    echo "<hr> Saldo: R$ ".$Itau->getSaldo().",00";

    $Itau->Depositar(450);
    echo "<hr> Saldo: R$ ".$Itau->getSaldo().",00";