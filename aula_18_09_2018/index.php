<?php
    /* 
    pandoc->gera pdf a parti de anotações
        Strings -> Objeto em linguagens modernas
        por ser ojbeto, ela contém método e atributos 
        toda string é manipulavel
        *por padrao o php evita espaços em brancos no inicio, em exeço
        metodos
            addslashes($string); -> adiciona \ em caracteres especiais de uma string para que codigos maliciosos nao sejam executado;
            strtolower($string); -> transforma qualquer string para caixa baixa;
            strtoupper($string); -> transforma qualquer string para caixa alta;
            strlen($string); -> retorna o tamanho da variavel;
            substr($string, ponto inicial, qtd de caracteres a partir do inicial); -> pega uma parte de uma string a partir do indice estipulado 
    */
    echo '
    <form action="veri.php" method="post">
        <label for="usr">User:</label> <input type="text" required name="usr" id="usr" />
        <br /> 
        <br />
        <label for="password">Password:</label> <input type="password" name="password" id="password" required/>
        <input type="submit" value="enviar">
    </form>';
?>
 