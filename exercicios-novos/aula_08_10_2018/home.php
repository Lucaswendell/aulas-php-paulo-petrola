<?php
if (isset($_SESSION["admin"]) && $_SESSION["admin"] == "logado") {
    echo "<link rel=\"stylesheet\" href=\"css/slicknav.css\" />
        <link rel=\"stylesheet\" href=\"css/styles.css\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    echo "
        <nav>
                <ul id=\"q\">
                <li><a href=\"?user=\">Usuario</a></li>
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">teste</a></li>
                <li><a href=\"logout.php?logar=sair\">logout</a></li>
                </ul>
        </nav>
    ";
    echo "<h1 style=\"text-align:center;\">Você está na home</h1>";
    echo "<script src=\"js/jquery.js\"></script>
        <script src=\"js/jquery.slicknav.min.js\"></script>
        <script>
    $(document).ready(function(){
            $(\"#q\").slicknav({
                label: \"\",
                duplicate: false    
            });
        });
        </script>";
} else {
    header("Location: index.php");
}

?>

