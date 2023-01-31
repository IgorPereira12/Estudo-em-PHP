<?php

    /*

    *criar modificadores de acesso estáticos -> tag "static" depois do modificador

    *modificadores estáticos -> dispensa instanciar a classe -> declarar o nome da classe + ::

    */

    class Login {

        public static $user;

        public static function verificarLogin() {
            echo "O usuário ".self::$user." está logado!";
        }

        public function sairSistema() {
            echo "O usuário deslogou";
        }
    }

    Login::$user = "John Doe";
    Login::verificarLogin();
    echo "<br>";

    $login = new Login();
    $login->sairSistema();
