<?php
    if(isset($_POST)){
        foreach($_POST as $k=>$v){
            echo "<br />$k:$v";
        }
    }
?>