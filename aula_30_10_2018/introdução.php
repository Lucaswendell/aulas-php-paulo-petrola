<?php
  /*
    Uso de SGBD:
      -> o banco comunica-se diretamente com a aplicação.
      -> Comunicação back-end, nunca o front se comunica.
      -> PDO -> PHP DATA OBJECTS, CRIADA PARA FAZER A MANIPULAÇÃO DE DADOS EM SGBD's
      -> O modo mais facil de configurar é criando um  arquivo de configuração(.ini)
      -> arquivo .ini:
        -> paramentro = valor
      -> por padrao os servidores web não mostram arquivos .ini
      -> para fechar uma conexao, é só colocar a conexao como nulo
        conexao com mysql
        $instancia = new PDO("mysql:host=nome do host;dbname=nome do banco","usuario", "senha", mapa de caracteres);
        mapa de caracteres -> array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') -> define o mapa de caracteres para UTF8
        passos basicos para conexao com o banco
          1-abre 
          2-executa
          3-fecha
        ->create schema banco; = create database banco;
        
  */
?>
