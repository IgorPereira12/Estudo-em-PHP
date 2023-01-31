<?php

    /*

    *criar constante -> tag "const" + nome

    *referenciar constante dentro do escopo da classe -> tag "self::" + nome

    *referenciar constante da classe mãe -> tag "parent::" + nome

    */

    class Banda {

        const baixista = "Steve Harris";
    }

    class IronMaiden extends Banda {

        const guitarrista = "Dave Murray";

        public function exibirBaixista() {
            echo parent::baixista;
        }

        public function exibirGuitarrista() {
            echo self::guitarrista;
        }
    }

    $ironMaiden = new IronMaiden();
    $ironMaiden->exibirBaixista();
    echo "<br>";
    $ironMaiden->exibirGuitarrista();
