<?php
    /*
        $_FILES['nome_do_campo_input]['indice_secundario'] -> matriz tridimencional;
        indice_secundario -> 
            name -> nome do arquivo do computador do usuario
            tmp_name -> nome temporario dentro do servidor
            size -> tamanho em bytes do arquivo
            error -> verifica se tem algum erro (0-> ok, 1->error) -> valor booleano
            type -> define o tipo de arquivo
    
    */
    move_uploaded_file($_FILES['arquivo']['tmp_name'],"imagem/{$_FILES['arquivo']['name']}");
?>