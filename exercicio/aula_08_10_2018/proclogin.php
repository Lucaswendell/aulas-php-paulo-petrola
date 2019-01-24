<?php
session_start();
if (isset($_GET['logar']) && $_GET['logar'] == "log") {
    if ($_POST['user'] == "admin" && $_POST['pass'] == "123") {
        $_SESSION[$_POST['user']] = "logado";
    }
}
header("Location: index.php");
?>
