<?php
  require_once("lib/controle/LivroControle.class.php");
  $comando = new ControleLivro();
  if($comando->deletaLivro($_GET['id'])){
    session_start();
    $_SESSION['erro'] = "deletado com susseso";
  }else{
    session_start();
    $_SESSION['erro'] = "deu erro";
  }
  header("Location: pesquisaLivro.php");
?>