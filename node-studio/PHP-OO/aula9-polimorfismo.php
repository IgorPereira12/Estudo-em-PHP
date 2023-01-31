<?php

    /*

    *polimorfismo -> substituir ou reescrever um método herdado da classe mãe

    */

    class Animal {

        public function Andar() {
            echo "O animal andou.";
        }
    }

    class Cachorro extends Animal {

        public function Andar() {
            echo "O cachorro andou.";
        }
    }

    $animal = new Cachorro();
    $animal->Andar();
