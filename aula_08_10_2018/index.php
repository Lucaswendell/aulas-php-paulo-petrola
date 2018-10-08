<?php
/* 
    SESSÕES
        -> armazenadas no lado servidor
        -> dados permanentes no lado servidor
        iniciar sessão:
            session_start(); -> iniciar em toda página que for usar sessão
            -> cria-se um cookie especifico-> PHPSESSID (valor criado aleatoriamente)
            session_destroy(); -> deleta todos os registros da sessão
            *fazer o exercicio anterior com sessão*
*/
session_start();
echo $_SESSION['user']="Lely <3 Rian";
?>