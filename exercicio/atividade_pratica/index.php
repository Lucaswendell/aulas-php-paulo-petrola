<?php
/* 
    Atividade de PHP    
        1 - fazer um formulário que receba o nome do usuário, uma mensagem e sua imagem de perfil;
        2 - Criar uma pasta com o nome do usuário;
        3 - Dentro da pasta criada, criar um documento do tipo texto com o nome do usuário e iserir a mensagem como conteúdo do arquivo;
        4 - Armazenar a imagem passada juntamente com o arquivo de texto. Renomear a imagem para o nome do usuário sem alterar a extensão da imagem;
        5 - caso usuário queira, ele pode mandar novas mensagens para serem armazenadas no arquivo SEM apagar o conteúdo já existente;
        6 - Cada usuário pode armazena até 3 imagens de perfil obedecendo o padrão: {usuário}.jpg, {usuario}-2.jpg, {usuário}-3.jpg;
        7 - Caso o usuário envie mais fotos de perfil, a mais antiga deve ser apagada, as demais devem ser renomeadas para o nome seguinte;
        8 - Somente os campos nome mensagem devem ser obrigatórios para consguir fazer o envio.
*/
echo 
'<form  action="processa.php" enctype="multipart/form-data" method="post">
<label for="">Nome do usuario:</label><br /><br />
<input type="text" name="nome"/><br /><br />
<label for="">Mensagem:</label><br /><br />
<textarea name="mensagem" row="12" col="50"></textarea><br /><br />
<label for="">Imagem de perfil:</label><br /><br />
<input multiple type="file" name="perfil"/>
<input type="submit" value="enviar"/>
</form>';
?>
<html>
</html>

