<?php 
    /* 
    revisão:
    SUPERGLOBAIS
        $_POST -> RECEBE E MANIPULA INFORMAÇÕES ENVIADAS DO FORMULARIO VIA METODO POST
        $_GET -> RECEBE E MANIPULA INFORMAÇÕES ENVIADAS DO FORMULARIO VIA METODO GET
        $_REQUEST -> RECEBE E MANIPULA INFORMAÇÕES ENVIADAS DO FORMULARIO
        $_FILES -> RECEBE E MANIPULA INFORMAÇÕES BINÁRIAS DE FORMULARIO
        $_COOKIE -> MANIPULA COOKIE NO BROWSER
        $_SESSION -> MANIPULA SESSÃO NO SERVIDOR 
    
 */
 // $variavel = (condição) ? if : else 
 if (isset($_FILES['profile']) && $_FILES['profile']['name'] != "") {
    $ext = substr($_FILES['profile']['type'], 6);
    $nome = md5($_FILES['profile']['name']) . ".$ext";
    move_uploaded_file($_FILES['profile']['tmp_name'], $nome);
}
 echo "
<!DOCTYPE html>
    <html>
        <head>
            <title>PAgina</title>   
            <link rel=\"stylesheet\" href=\"css/uikit.min.css\" />
            <style>
                img{
                    width: 100%;
                    height: 100%;
                    border-radius: 6  jn px; 
                    background-positon:cover;
                }
                .ola{
                    margin: 0 auto;
                    margin-top: 50px;
                    border-radius: 6px; 
                    width: 600px;
                    transition: all .5s;
                }
                #img{
                    display: none;
                }
                label{
                    background-color: #258;
                    padding: 5px;
                    color: #fff;
                    cursor: pointer;
                    border-radius: 2px;
                    transition: all .2s;
                }
                label:hover{
                    box-shadow: 2px 2px 10px rgba(0,0,0,.5);
                }
                .ola:hover{
                    box-shadow: 5px 5px 10px rgba(0,0,0,.5);
                }
            </style> 
        </head>
        <body> 
                <form action=\"index.php\" method=\"post\" enctype=\"multipart/form-data\">
                    <label for=\"img\">ENVIE SUA IMAGEM</label>
                    <input type=\"file\" name=\"profile\" id=\"img\">
                    <input type=\"submit\" class=\"uk-button uk-button-primary\" value=\"enviar\">
                </form>
                <div class=\"ola\" uk-slideshow=\"autoplay:true; animation: push;\">
                    <ul class=\"uk-slideshow-items uk-animation-left\">
";
$pasta = opendir(".");
/* $a = 3 - 5 % 3;
echo $a++; */
while (false !== $ler = readdir($pasta)) {
    if ($ler == "." || $ler == ".." || $ler == "index.php" || $ler == "js" || $ler == "css") {
        continue;
    } else {
        echo "<li><img src=\"$ler\"/></li>";
    }
}
echo "
                    </ul>
                </div>
    </body>
    <script src=\"js/uikit.min.js\"></script>
</html>" 
?>