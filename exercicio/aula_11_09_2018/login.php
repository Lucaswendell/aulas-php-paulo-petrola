<?php
require("User.class.php");
/* if(isset($_POST)){
    if(file_exists("User.class.php")){
        require_once("User.class.php");
        $user = new Usuario();
        $usr = (isset($_POST['usr'])) ? $_POST['usr']:NULL;
        $pass = (isset($_POST['pass'])) ? $_POST['pass']:NULL;
        if($user->verificarLogin($_GET['nome'], $_GET['pass'])){
            echo "<span style='color: #00f'>
            autenticado: Voce esta na pagina home, parabens pela primeira vez voce nao errou seu usuario e senha</span>";
        }else{
            echo "<span style='color:f00'>Usuario ou senha incorreto</span>";
        }
    }else{
        echo "Arquivo não encontrado";
    }
} */
$login = new Usuario();
if($login->verificarLogin($_GET['nome'],$_GET['pass'])){
    echo "sim";
}else{
    echo "nao";
}
?>