<?php
    //arquivo User.class.php
    class User{
        //construtor
        public function __construct(){
            
        }
        //atributos
        private $login;
        private $senha;
        //metodos 
        public function getLogin(){
            return $this->login;
        }
        public function setLogin($lg){
            $this->login = $lg;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($sh){
            $this->senha = $sh;
        }
        //destrutor libera memoria
        public function __destruct(){

        }
        public function veri($login,$senha){
            if($login == "admin" && $senha == "qwe123"){
                return true;
            }else{
                return false;
            }
        }
    }
?>