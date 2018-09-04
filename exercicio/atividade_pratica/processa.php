<?php
    //verica o campo nome 
    if(isset($_POST) && $_POST['nome'] != ""){
        $nome_usuario = $_POST['nome'];
    }else{
        echo 
        "<script>alert('preencha o campo nome');
            history.back();
        </script>";
    }
    //verica o campo mensagem 
    if(isset($_POST) && $_POST['mensagem'] != ""){
        $mensagem = $_POST['mensagem'];
    }else{
        echo 
        "<script>alert('preencha o campo mensagem');
            history.back();
        </script>";
    }
    //criar diretório e arquivo
    if(!file_exists($nome_usuario)){
        mkdir($nome_usuario,0777,true); //cria o diretorio
        $nome_arquivo = "$nome_usuario.txt"; //cria a extenção do arquivo
        $arquivo = fopen("$nome_usuario/$nome_arquivo","a"); //cria e abre o arquivo
        fwrite($arquivo,$mensagem); //escreve a mensgem 
        fclose($arquivo); //fecha o arquivo
        echo "Diretório e arquivo criado com sucesso!!";
    }else{ //se o arquivo já existir
        $nome_arquivo = "$nome_usuario.txt"; //cria a extenção do arquivo
        $arquivo = fopen("$nome_usuario/$nome_arquivo","a"); //abre o arquivo
        fwrite($arquivo,"\n$mensagem"); //escreve a mensgem nova mensagem
        fclose($arquivo); //fecha o arquivo//abre o diretorio
        echo "<br />Novo conteúdo colocado com sucesso!!";

    }
    //imagem
    if(isset($_FILES)){
        //coloca a extenção
        $extensao_tipo = $_FILES['perfil']['type'];
        switch($extensao_tipo){
            case "image/png":
                $extensao = ".png";
                break;
            case "image/jpg":
                $extensao = ".jpg";
                break;
            case "image/jpeg":
                $extensao = ".jpeg";
                break;
            default:
                echo "<br />sei nao parece nao ser uma imagem";
        }
        $nome_imagem = $nome_usuario."$extensao";//coloca o nome do usuario com a extensão
        //verifica se o arquivo existe
        if(!file_exists("$nome_usuario/$nome_imagem")){
            move_uploaded_file($_FILES['perfil']['tmp_name'], "$nome_usuario/$nome_imagem");
            echo "<br />Foto do perfil adicionada com sucesso!!";
        }else{ //se já existir a imagem cria a segunda imagem 
            $diretorio = opendir($nome_usuario); //abre o diretorio
            while($ler = readdir($diretorio)){  //ler o diretorio
                $nome_imagem3 = $nome_usuario."-3".$extensao;
                $nome_imagem2 = $nome_usuario."-2".$extensao;
                //cria a imagem 2
                if($ler == $nome_imagem){
                    move_uploaded_file($_FILES['perfil']['tmp_name'], "$nome_usuario/$nome_imagem2");
                    echo "<br />Nova foto do perfil adicionada com sucesso!!"; 
                }else if($ler == $nome_imagem2){//cria a imagem 3
                    move_uploaded_file($_FILES['perfil']['tmp_name'], "$nome_usuario/$nome_imagem3");
                }else if($ler == $nome_imagem3){//quando tiver todas as imagens
                        unlink("$nome_usuario/$nome_imagem"); //apaga a primeira imagem
                        rename("$nome_usuario/$nome_imagem2", "$nome_usuario/$nome_imagem"); //renomeia a segunda imagem para a primeira
                        rename("$nome_usuario/$nome_imagem3", "$nome_usuario/$nome_imagem2"); //renomeia a terceira imagem para a segunda
                        move_uploaded_file($_FILES['perfil']['tmp_name'], "$nome_usuario/$nome_imagem3"); //upload da ultima imagem enviada
                        echo "<br />Foto alterada com sucesso!!"; 
                }
            }
        }
    }
    
?>
