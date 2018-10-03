<?php

    $valores = array("valor1","valor2","valor3","valor4","valor5");
    for($i=0;$i<5;$i++){
        if($i % 2 == 0){
            array_pop($valores);
        }else{
            array_unshift($valores,$i);
        }
    }    
    var_dump($valores);
?>