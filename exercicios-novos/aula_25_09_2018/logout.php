<?php
if ($_GET['logar'] == "sair") {
    if (isset($_COOKIE['admin'])) {
        setcookie("admin");
        unset($_COOKIE);
        header("Location: index.php");
    }
}
?>