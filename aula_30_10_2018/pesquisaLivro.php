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
    <div id="formP">
        <form action="" method="post">
            <p>Pesquisar livro pelo id</p>
            <input type="text" name="id" id="idP" />
            <p>Pesquisar livro pelo titulo</p>
            <input type="text" name="nome" id="nome" />
            <p>Pesquisar livro pelo tema</p>
            <input type="text" name="tema" id="tema" />
            <p>Pesquisar livro pelo numero de paginas</p>
            <input type="text" name="paginas" id="paginas" />
            <input type="submit" name="enviar" value="Pesquisar" />
            <a type="submit"  class="enviar" href="index.php">adicionar livro</a>
        </form>
    </div>
    <hr style="width:50%;">
    <table style="margin:0 auto;">
    <tr>
        <th><a href="?ordem=<?php if(isset($_GET['ordem']) && $_GET['ordem']=="desc"){ echo "asc";}else{echo "desc";}?>&campo=id">id</a></th>
        <th><a href="?ordem=<?php if(isset($_GET['ordem']) && $_GET['ordem']=="desc"){ echo "asc";}else{echo "desc";}?>&campo=titulo">titulo</a></th>
        <th><a href="?ordem=<?php if(isset($_GET['ordem']) && $_GET['ordem']=="desc"){ echo "asc";}else{echo "desc";}?>&campo=paginas">paginas</a> </th>
        <th><a href="?ordem=<?php if(isset($_GET['ordem']) && $_GET['ordem']=="desc"){ echo "asc";}else{echo "desc";}?>&campo=tema">tema</a></th>
        <th>deletar</th>
        <th>atualizar<th>
    </tr>
        <?php
        if(!empty($_POST['id'])){
            $item = $comando->selecionarId($_POST['id']);
            echo "
            <tr>
                <td>{$item->getId()}</td>
                <td>{$item->getTitulo()}</td>
                <td>{$item->getPaginas()}</td>
                <td>{$item->getTema()}</td>
                <td><a href=\"apagaLivro.php?id={$item->getId()}\">Apagar</a></td>
                <td><a href=\"atualizaLivro.php?id={$item->getId()}\">editar</a></td>
            </tr>";
            unset($_POST['id']);
        }else if(!empty($_POST['nome'])){
            foreach($comando->selecionarNome($_POST['nome']) as $item){
                echo "
                <tr>
                    <td>{$item->getId()}</td>
                    <td>{$item->getTitulo()}</td>
                    <td>{$item->getPaginas()}</td>
                    <td>{$item->getTema()}</td>
                    <td><a href=\"apagaLivro.php?id={$item->getId()}\">Apagar</a></td>
                    <td><a href=\"atualizaLivro.php?id={$item->getId()}\">editar</a></td>
                </tr>";
        }
            unset($_POST['nome']);
        }else if(!empty($_POST['tema'])){
            foreach($comando->selecionarTema($_POST['tema']) as $item){
                echo "
                <tr>
                    <td>{$item->getId()}</td>
                    <td>{$item->getTitulo()}</td>
                    <td>{$item->getPaginas()}</td>
                    <td>{$item->getTema()}</td>
                    <td><a href=\"apagaLivro.php?id={$item->getId()}\">Apagar</a></td>
                    <td><a href=\"atualizaLivro.php?id={$item->getId()}\">editar</a></td>
                </tr>";
                unset($_POST['tema']);
            }
        }else if(!empty($_POST['paginas'])){
            foreach ($comando->selecionarPaginas($_POST['paginas']) as $item) {
                echo "
                <tr>
                    <td>{$item->getId()}</td>
                    <td>{$item->getTitulo()}</td>
                    <td>{$item->getPaginas()}</td>
                    <td>{$item->getTema()}</td>
                    <td><a href=\"apagaLivro.php?id={$item->getId()}\">Apagar</a></td>
                    <td><a href=\"atualizaLivro.php?id={$item->getId()}\">editar</a></td>
                </tr>";
            }
            unset($_POST['paginas']);
        }else{
            $ordem = (!empty($_GET['ordem'])) ? $_GET['ordem'] : "asc";
            $campo = (!empty($_GET['campo'])) ? $_GET['campo'] : "id";
            foreach($comando->consultaTodos($ordem,$campo) as $item){
                echo "
                <tr>
                    <td>{$item->getId()}</td>
                    <td>{$item->getTitulo()}</td>
                    <td>{$item->getPaginas()}</td>
                    <td>{$item->getTema()}</td>
                    <td><a href=\"apagaLivro.php?id={$item->getId()}\">Apagar</a></td>
                    <td><a href=\"atualizaLivro.php?id={$item->getId()}\">editar</a></td>
                </tr>";
            }
        }  
        ?>
</table>
</body>
</html>

