<?php
    require_once("lib/modelo/Livro.class.php");
    require_once("lib/controle/LivroControle.class.php");
    try{
        //popula as informações
        $livro = new Livro();
        $livro->setId($_POST['id']);
        $livro->setTitulo($_POST['titulo']);
        $livro->setPaginas($_POST['paginas']);
        $livro->setTema($_POST['tema']);
        $livroNovo = new ControleLivro();
        //executa o metodo que atualiza 
        if($livroNovo->atualizaLivro($livro)){
            session_start();
            $_SESSION['erro'] = "Editado com sucesso";
            header("Location: pesquisaLivro.php");
        }else{
            throw new Exception("Não foi possivel atualizar.");
        }
    }catch(Exception $e){
        session_start();
        $_SESSION['erro'] = $e->getMessage();
    }
?>