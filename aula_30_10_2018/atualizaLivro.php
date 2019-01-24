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
        require_once("lib/controle/LivroControle.class.php");
        $comando = new ControleLivro();
    ?>
    <div id="form">
        <form action="atualiza.php?" method="post">
        <?php $resu = $comando->selecionarId($_GET['id'])?>
            <p>Editar livro</p>
            <label for="id">ID</label>
            <input type="text" id="id" name="id" value="<?php echo "{$resu->getId()}"?>" id="titulo" /><br /> <br />
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" value="<?php echo "{$resu->getTitulo()}"?>" id="titulo" /><br /> <br />
            <label for="paginas">Paginas</label>
            <input type="text" name="paginas" value="<?php echo "{$resu->getPaginas()}" ?>" id="paginas" /><br /> <br />
            <label for="tema">Tema</label>
            <input type="text" name="tema" value="<?php echo "{$resu->getTema()}"?>" id="tema"/><br /> <br />
            <input type="submit" name="enviar" value="EDITAR"/>
            <a type="submit"  class="enviar" href="pesquisaLivro.php">Pesquisar Livro</a>
            <a type="submit"  class="enviar" href="index.php">Adicionar Livro</a>
        </form>
    </div>
</body>
</html>