<?php

    /*

    *clonar objetos -> tag "clone"

    */

    class Aluno {

        public $idade;

        public function __clone() {
            echo "Clonagem de objetos.";
        }
    }

    $aluno = new Aluno();
    $aluno->idade = 18;

    $aluno2 = clone $aluno;
    $aluno2->idade = 17;

    echo "<hr>$aluno2->idade";
    echo "<hr>$aluno->idade";