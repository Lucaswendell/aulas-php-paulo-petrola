<?php
    if(isset($_POST)){
        if(file_exists("Cadastrar.class.php")){
            require_once("Cadastrar.class.php");
            echo "
            <body>
            <link rel='stylesheet' href='../css/sweetalert2.min.css'>
            <script src='../js/sweetalert2.min.js'></script>
            </body>";
        }else{
            echo "<h4 style='text-align: center; color:#ff0000; font-size: 40px;'>Arquivo não encontrado</h4>";
        }
        //variaveis
        $user = (isset($_POST['usr'])) ? $_POST['usr']:NULL;
        $pass = (isset($_POST['pass'])) ? $_POST['pass']:NULL;
        $pass2 = (isset($_POST['pass2'])) ? $_POST['pass2']:NULL;
        $imagem = (isset($_FILES['profile'])) ? $_FILES['profile']:NULL;
        $date = (isset($_POST['date'])) ? $_POST['date']:NULL;
        $sexo = (isset($_POST['sexo'])) ? $_POST['sexo']:NULL;
        $email = (isset($_POST['email'])) ? $_POST['email']:NULL;
        $veri = new Cadastrar();
        //preenchendo os atributos da classe
        $veri->setUsr($user);
        $veri->setPass($pass);  
        $veri->setPass2($pass2);
        $veri->setDate($date);
        $veri->setSexo($sexo);
        $veri->setImage($imagem);
        $veri->setEmail($email);
        if($veri->senha()){
            echo 
            '<script>
            alert("Senha incorreta");
            </script>';
        }else{
            if($veri->criarUser()){
                echo 
                "<script>swal({
                    text: 'usuário cadastrado com sucesso.',
                    type: 'success'
                }).then((result) => {
                   if(result.value){
                    history.back(); 
                   }   
                });
                </script>";
            }else{
                echo "<script>swal({
                    text: 'Usuário já cadastrado.',
                    type:'error'
                }).then((result)=>{
                    if(result.value){
                        history.back();
                    }
                });
            </script>";
            }
            $veri->criarImg();  
        }
    }
?>