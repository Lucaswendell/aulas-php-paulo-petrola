<?php 
    class Cadastrar{
        //atributos
        private $usr;
        private $pass;
        private $pass2;
        private $email;
        private $image;
        private $date;
        private $sexo;
        //get e set
        public function getUsr(){
            return $this->usr;
        }
        public function setUsr($u){
            $this->usr=$u;
        }
        public function getPass(){
            return $this->pass;
        }
        public function setPass($p){
            $this->pass=$p;
        }
        public function getPass2(){
            return $this->pass2;
        }
        public function setPass2($p){
            $this->pass2=$p;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $this->email=$e;
        }
        public function getImage(){
            return $this->image;
        }
        public function setImage($i){
            $this->image=$i;
        }
        public function getDate(){
            return $this->date;
        }
        public function setDate($d){
            $this->date=$d;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($s){
            $this->sexo=$s;
        }
        //metodo para verificar senha
        public function senha(){
            if($this->pass != $this->pass2){
                return true;
            }else{
                return false;
            }
        }
        //metodo para criar o arquivo do ususario
        public function criarUser(){
            if(!file_exists($this->usr)){
                mkdir("../$this->usr",0777, true);
            }
            $arquivo = fopen("../$this->usr/$this->usr.txt","a");
            fwrite($arquivo,"user: $this->usr\n");
            fwrite($arquivo, "pass: $this->pass\n");
            fwrite($arquivo,"date: $this->date\n");
            fwrite($arquivo,"email: $this->email\n");
            fwrite($arquivo, "sexo: $this->sexo\n");
            fclose($arquivo);
        }
        //criar imagem
        public function criarImg(){
            $ext = $this->image['type'];
            switch($ext){
                case "image/jpg" || "image/jpeg":
                    $ext = ".jpg";
                    break;
                case "image/png":
                    $ext = ".png";
                    break;
                default:
                    echo "Acho que nao ta no padrao.";
            }
            move_uploaded_file($this->image['tmp_name'],"$this->usr/$this->usr$ext");
        }
    }
?>