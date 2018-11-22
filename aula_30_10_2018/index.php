<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['erro'])){
            echo "<script>alert(\"{$_SESSION['erro']}\")</script>";
            session_destroy();
        }
        require_once("lib/controle/LivroControle.class.php");
        $comando = new ControleLivro();
    ?>
    <div id="form">
        <form action="processa.php" method="post">
            <p>Adicionar livro</p>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" /><br /> <br />
            <label for="paginas">Paginas</label>
            <input type="text" name="paginas" id="paginas" /><br /> <br />
            <label for="tema">Tema</label>
            <input type="text" name="tema" id="tema" /><br /> <br />
            <input type="submit" name="enviar" value="enviar"  />
            <a type="submit"  class="enviar" href="pesquisaLivro.php">Pesquisar Livro</a>
        </form>
    </div>
</body>
</html>