<?php  
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"cs/app.css\" />";
//nao mistura html com php
//variavel super global: $_GET['nome'] -> array associativo, cada indice tem um nome
//varivave super global: $_POST['nome'] -> array associativo, cada indice tem um nome
//$_REQUEST['nome'] -> o get e post junto
    echo 
    "<form action='?nome=qualquer' method='post'>
        <input type='text' name='nome' />
        <button>enviar</button>
    </form>"; 
    $nome = (isset($_POST['nome'])) ? $_POST['nome'] : NULL; //if inline


    //daqui para cima é da aula
    $arrayMis = array( //array associativo ou dicionario
        'Normal' => $nome,
        'Caixa alta' => strtoupper($nome),
        'Caixa baixa' => strtolower($nome),
	    'Primera maiuscula' => ucfirst($nome),
        'Tamanho' => strlen($nome),
        'Inverso' => strrev($nome),
        'Criptografado em md5 ' => md5($nome),
	    'Criptografado em crypt' => crypt($nome, null),
	    'Criptografoado em sha1' => sha1($nome),
    );
	$texto = "seja bem vindo! USUARIO";
    $subs = str_replace("USUARIO",$nome,$texto); 	
    echo $subs;
    echo "<br />Ela me disse: \"gosto mais do bob's que do mac\"\nentao fomos para o Bob's";  
    /* if(!file_exists("css")){
        if(!file_exists("js")){
            if(!file_exists("img")){
                mkdir("js",777,true);
                mkdir("css",777,true);
                mkdir("img",777,true);
            }
        }
    } */
?>
<table>
    <?php 
    foreach($arrayMis as $key => $value){?>
        <tr>
            <th class="cor1"><?php echo $key.":"?></th>
            <td class="cor2"><?php echo $value?></td>
        </tr>
    <?php }?>
</table>