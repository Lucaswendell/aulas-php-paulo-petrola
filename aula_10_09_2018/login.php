<?php
    //arquivo Login
    if(file_exists("User.class.php")){
        //processo de login
        require_once("User.class.php");
        $user = (isset($_POST['usr'])) ? $_POST['usr']:NULL; //verifica se nao é nulo
        $pass = (isset($_POST['password'])) ? $_POST['password']:NULL; //verifica se nao é nulo
        $usuario = new User(); //instancia
        /* 
        $usuario->setLogin($user); //seta o valor de login 
        $usuario->setSenha($pass); //seta o valor da senha */
        if($usuario->veri($user, $pass)){
           header("Location: home.php");
        }else{
            header("Location: index.php");
        }
    }else{
        echo "<h4>Arquivo não exite</h4>";
    }
    
    
?>