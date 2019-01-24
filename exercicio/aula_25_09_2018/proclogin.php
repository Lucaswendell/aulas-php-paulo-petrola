<?php
if (isset($_GET['logar']) && $_GET['logar'] == "log") {
    if ($_POST['user'] == "admin" && $_POST['pass'] == "123") {
        setcookie($_POST['user'], "logado");
    }
}
header("Location: index.php");
?>
