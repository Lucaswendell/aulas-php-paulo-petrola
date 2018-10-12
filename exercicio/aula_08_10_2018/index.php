<?php 
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin'] == "logado") {
    require_once('home.php');
} else {
    require_once("login.php");
}
?>    
