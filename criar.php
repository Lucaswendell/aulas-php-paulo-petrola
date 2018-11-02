<?php
    if($_GET['adicionar'] == "sim"){
        $dia = date("d");
        $mes = date("m");
        $ano = date("Y");
        if(file_exists("aula_".$dia."_".$mes."_".$ano)){
           setcookie("ola");
        }else{
            mkdir("aula_".$dia."_".$mes."_".$ano, 0777, true);
            mkdir("aula_".$dia."_".$mes."_".$ano."/css", 0777, true);
            mkdir("aula_".$dia."_".$mes."_".$ano."/js", 0777, true);
            $arquivo = fopen("aula_".$dia."_".$mes."_".$ano."/index.php","a");
            fwrite($arquivo, "<?php \n echo \"criado com sucesso<br>não esqueça de alterar o README.md para ter detalhes da aula \"\n?>");
            fclose($arquivo);
            exec("code aula_".$dia."_".$mes."_".$ano."/index.php");
            header("Location: aula_".$dia."_".$mes."_".$ano);
        }
    }
?>