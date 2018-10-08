<?php
session_start();
if ($_GET['logar'] == "sair") {
    if(isset($_SESSION['admin'])) {
        session_destroy();
        header("Location: index.php");
    }
}
?>