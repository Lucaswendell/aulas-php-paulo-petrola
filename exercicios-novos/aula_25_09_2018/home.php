<?php
    if(isset($_COOKIE["lucas"]) && $_COOKIE["lucas"] == "logado"){
        echo '<link rel="stylesheet" href="css/slicknav.css" />
        <link rel="stylesheet" href="css/styles.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '
        <nav >
                <ul id="q">
                <li><a href="#">Usuario</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">teste</a></li>
                <li><a href="logout.php?logar=sair">logout</a></li>
                </ul>
        </nav>
    ';
        echo "estou aqui";
        echo "<script src='js/jquery.js'></script>
        <script src='js/jquery.slicknav.min.js'></script>
        <script>
            $('#q').slicknav({
                label: '',
                duplicate: false    
            });
        </script>";
    }else{
        require_once("index.php");
    }
    
?>

