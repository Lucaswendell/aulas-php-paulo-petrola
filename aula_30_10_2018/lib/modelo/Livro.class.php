<?php
    class Livro{
        private $titulo;
        private $id;
        private $paginas;
        private $tema;
        //encapsulamento
        public function setTitulo($t){
            $this->titulo = ($t != NULL) ? addslashes($t) : NULL;
        }
        public function setId($id){
            $this->id = ($id != NULL) ? addslashes($id) : NULL;
        }
        public function setPaginas($p){
            $this->paginas = ($p != NULL) ? addslashes($p) : NULL;
        }
        public function setTema($tema){
            $this->tema = ($tema != NULL) ? addslashes($tema) : NULL;
        }
        public function getTema(){
            return $this->tema;
        }
        public function getId(){
            return $this->id;
        }
        public function getPaginas(){
            return $this->paginas;
        }
        public function getTitulo(){
            return $this->titulo;
        }
    } 
?>