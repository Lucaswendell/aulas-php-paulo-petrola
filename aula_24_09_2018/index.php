<?php
    /* 
        Manipulação de array
        Criação de array -> $array = array(elementos)
        Criação de array associativo -> $array = array("chave" => elemento, "outra" => valor)
        Matrizes
        métodos:
            array_push
            array_pop
            array_shift
            array_unshift
            array_reverse
            array_merge
            array_count
            in_array
            sort
            asort
            rsort
            arsort
        $associativo = array(2,5,8,7,10,2,0,1,4,0,5,2,0,2);
        array_push($associativo,"valor");
        array_pop($associativo);
        array_shift($associativo);
        array_unshift($associativo,"numero1");
        var_dump($associativo); 
 ====================================================================================
        dados permanentes:
            as infomações podem ser compartihadas por um tempo determinado e, ao final desse tempo, serem destruídas ou renovadas
            É possível utilizar dados persistentes de duas formas:
                lado cliente ou lado servidor.
                Lado Cliente:
                    As informações ficam armazenadas no browser do usuário em espaços de memórias especiais chamados de COOKIES.
                    Os COOKIES podem ser manipulados livrimente pelo browser e até mesmo por JS, por isso a prática do uso de cookies não é muito efetiva para informações sensíveis como documentos, senhas, etc;
                
    
*/ 
?>