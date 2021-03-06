<?php
    /* 
        Manipulação de array
        Criação de array -> $array = array(elementos)
        Criação de array associativo -> $array = array("chave" => elemento, "outra" => valor)
        Matrizes
        métodos:
            array_push -> adiciona um valor no ultimo indice
            array_pop -> remove um valor do ultimo indice
            array_shift -> remove um valor no primeiro indice
            array_unshift  -> adiciona um valor no primeiro indice 
            array_reverse -> retorna um array com os elementos em forma reversa
            array_merge -> junta um array
            count -> retorna o total de elementos em um array
            in_array -> checa se um valor existe em um array
            sort -> retorna um array em ordem crescente
            asort -> ordena um valor manteno a associa
            rsort -> ordem reversa
            arsort -> ordena os valores na ordem inversa, mas mantem a associação de indices 
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
                    ex:
                        setcookie("nome",valor,tempoDeVida);  
*/ 
$array = array("chave9" => 9,"chave10" => 10,"chave8" => 8, "chave9.2" => 9,"chave1" => 1);
$array2 = array(2,11,18,19,20);
$array3 = array_merge($array, $array2);
var_dump($array3);
?>