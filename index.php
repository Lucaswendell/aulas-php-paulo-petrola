<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <title>Aulas</title>
    <style>
        div{
            width: 400px;
            height: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div>
    <table class="uk-table uk-table-striped uk-text-center">
        <thead>
            <tr>
                <th>Aulas</th>
            </tr>
        </thead>
        <?php
            $pasta = opendir(".");
            while(false != ($ler = readdir($pasta))){
                if(is_file($ler) || $ler == "." || $ler == ".." || $ler == "css" || $ler == "js" || $ler == ".git"){
                    continue;
                }else{
                    echo "
                    <tr><td><a href=\"$ler\" class=\"uk-button uk-button-text\">$ler</a><td></tr>";
                }
            }   
        ?>
        <tfoot>
            <tr>
                <td><a href="criar.php?adicionar=sim" class="uk-button uk-button-secondary">adicionar aula</a></td>
            </tr>
        </tfoot>
    </table>
    </div>
</body>
<script src="js/uikit.min.js"></script>
<?php 
    if(isset($_COOKIE['erro'])){
        echo "
<script>
    UIkit.modal(\"aula já existe\");
</script>";
    }
?>
</html>