<?php
    try{
        require_once("lib/controle/LivroControle.class.php");
        $executa = new ControleLivro();
        $livro = new Livro();
        $livro->setTema($_POST['tema']);
        $livro->setTitulo($_POST['titulo']);
        $livro->setPaginas($_POST['paginas']);
        if($executa->adicionarLivro($livro)){
            session_start();
            $_SESSION['erro'] = "deu certo: o livro **{$livro->getTitulo()}** foi adicionado";
            header("Location: index.php");
        }else{
            throw new Exception("Erro ao inserir.");
        }
    }catch(Exception $e){
        session_start();
        $_SESSION['erro'] = $e->getMessage();
        header("Location: index.php");        
    }
?>