<?php
    class Livro{
        private $titulo;
        private $id;
        private $paginas;
        private $tema;
        //encapsulamento
        public function setTitulo($t){
            $this->titulo = (isset($t)) ? addslashes($t) : NULL;
        }
        public function setId($id){
            $this->id = (isset($id)) ? addslashes($id) : NULL;
        }
        public function setPaginas($p){
            $this->paginas = (isset($p)) ? addslashes($p) : NULL;
        }
        public function setTema($tema){
            $this->tema = (isset($tema)) ? addslashes($tema) : NULL;
        }
    } 

?>