<?php
    $valores = array();
    for($i=0;$i<5;$i++){
        array_push($valores,rand(0,10));
    }
    for($i=0;$i<5;$i++){
        if($i % 2 == 0){
            array_pop($valores);
        }else{
            array_unshift($valores,$i);
        }
    }    
    var_dump($valores);
?>