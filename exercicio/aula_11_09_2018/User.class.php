<?php 
    //classe usuario
    class Usuario{
        public function verificarLogin($usr, $senha){
            if($usr == "admin" && $senha == "123"){
                return true;
            }else{
                return false;
            }
        }
    }


?>