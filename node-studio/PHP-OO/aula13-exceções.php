<?php

    /*

    *ocorrência anormal que afeta o funcionamento da aplicação

    *Exception é a classe base para todas Exceptions

    *message, code, file, line

    */

    class Newsletter {

        public function cadastrarEmail($email) {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                throw new Exception("Este email é inválido", 1);
            else:
                echo "Email cadastrado com sucesso!";
            endif;
        }
    }

    $newsletter = new Newsletter();

    try {
        $newsletter->cadastrarEmail("contato@");
    } catch (Exception $excecao) {
        echo "Mensagem: ".$excecao->getMessage()."<br>";
        echo "Código: ".$excecao->getCode()."<br>";
        echo "Linha: ".$excecao->getLine()."<br>";
        echo "Arquivo: ".$excecao->getFile();
    }