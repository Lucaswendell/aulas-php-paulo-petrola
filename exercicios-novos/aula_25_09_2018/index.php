<?php
            if(isset($_COOKIE['lucas']) && $_COOKIE['lucas'] == "logado"){
                require_once('home.php');
            }else{
                require_once("login.php");
            }
?>
