<?php

    /*

    *interface definir um modelo a ser usado por outras classes

    *definir interface -> tag "interface"

    *implementar interface -> tag "implements"

    *responsabilidade de criar o código do método é da classe que implementar a interface

    *a interface é como um contrato, no qual as classes que implementarem a interface em questão são obrigados
     a criarem os mesmos métodos

    *métodos da interface devem ser públicos

    */

    interface Crud {

        public function create($parametro);
        public function read();
        public function update();
        public function delete();
    }

    class Noticias implements Crud {

        public function create($parametro) {
            // lógica para criar uma noticia
        }

        public function read() {
            // lógica para ler uma notícia
        }

        public function update() {
            // lógica para atualizar uma notícia
        }

        public function delete() {
            // lógica para deletar uma notícia
        }
    }