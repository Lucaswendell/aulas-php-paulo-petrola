<?php
if(isset($_GET['logar']) && $_GET['logar'] == "log"){
        if($_POST['user'] == "lucas" && $_POST['pass'] == 123){
            setcookie($_POST['user'],"logado");
            header("Location: index.php");
        }else{
            echo "senha ou usuario incorreto";
        }     
}
echo 
'
<form action="?logar=log" method="post">
<label for="">User:</label><input  type="text" name="user" /><br /><br />
<label for="">Password:</label><input type="password" name="pass" /><br />
<input type="submit" value="Logar">
</form>'
;

?>
