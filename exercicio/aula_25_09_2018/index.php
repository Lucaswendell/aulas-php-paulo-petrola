<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<?php
if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == "logado") {
    require_once('home.php');
} else {
    require_once("login.php");
}
?>    
</body>
</html>
