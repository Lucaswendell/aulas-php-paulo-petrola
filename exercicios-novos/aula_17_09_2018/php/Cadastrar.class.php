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
            $u = strtolower($u);
            $u = addslashes($u);
            if(strlen($u) < 5){
                echo "<script>alert('Usuário com caractere menor que 5');
                history.back();
                </script>";
            }else{
                $this->usr=$u;
            }
        }
        public function getPass(){
            return $this->pass;
        }
        public function setPass($p){
            if(strlen($p) < 8){
                echo "<script>alert('Senha com no minimo 8 caracteres');
                history.back();
                </script>";
            }else{
                $this->pass=$p;
            } 
        }
        public function getPass2(){
            return $this->pass2;
        }
        public function setPass2($p){
            if(strlen($p) < 8){
                echo "<script>alert('Senha com no minimo 8 caracteres');
                history.back();
                </script>";
            }else{
                $this->pass2=$p;
            }
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            if($e == ""){
                echo "<script>alert('email vazio');
                history.back();
                </script>";
            }else{
                $this->email=strtolower($e);
            }
        }
        public function getImage(){
            return $this->image;
        }
        public function setImage($i){
            if($i['name'] == ""){
                echo "<script>alert('imagem vazia'); history.back();</script>";
            }else{
                $this->image=$i;
            }
                
        }
        public function getDate(){
            return $this->date;
        }
        public function setDate($d){
            $ano = (int)date("Y"); //pega ano
            $dataAno = (int)substr($d,0, 4);
            $idade = $ano - $dataAno;
            if($d == ""){
                echo "<script>alert('data vazia');
                    history.back();
                </script>";
            }else if($idade < 14){
                echo "<script>alert('Idade com no minimo 15');
                    history.back();
                </script>";
            }else{
                $this->date=$d;
            }
            
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($s){
            if($s == "M" || $s == "F"){
                $this->sexo=$s;
            }else{  
                echo "<script>alert('Selecione um sexo');
                </script>";

            }
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
            if(!file_exists("../user/$this->usr")){
                mkdir("../user/$this->usr",0777, true);
                $arquivo = fopen("../user/$this->usr/$this->usr.txt","a");
                fwrite($arquivo,"user: $this->usr\nsenha: $this->pass\nE-email: $this->email\ndata: $this->date\nsexo: $this->sexo");
                fclose($arquivo);
                return true;
            }else{
                return false;
            }
            
        }
        //criar imagem
        public function criarImg(){
            $ext = $this->image['type'];
            switch($ext){
                case "image/jpg":
                    $ext = ".jpg";
                    break; 
                case "image/jpeg":
                    $ext = ".jpeg";
                    break;
                case "image/png":
                    $ext = ".png";
                    break;
                default:
                    echo "Acho que nao tá no padrão.";
            }
            move_uploaded_file($this->image['tmp_name'],"../user/$this->usr/$this->usr$ext");
        }
    }
?>