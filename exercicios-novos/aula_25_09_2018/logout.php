<?php
    if($_GET['logar'] == "sair"){
        if(isset($_COOKIE['lucas'])){
            setcookie("lucas");
            unset($_COOKIE);
            header("Location: index.php");
        }
    }
?>