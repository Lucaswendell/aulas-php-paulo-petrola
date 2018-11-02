<?php
#echo ("codigo iniciado...");
#goto saindo;
/* 
requisição de arquivos
    include -> método sem retorno, recebe um argumento(arquivo), não gera erro fatal, gera um WARNING(avisa)
    erro fatal -> qualquer erro que pare minha aplicação
    ex: 
        include("arquivo");
    include_once -> o mesmo que o include, mas ele verifica se o arquivo já foi chamado
    ex:
        include_once("arquivo");
 ** se colocar o include antes do include_once, o arquivo não é requisitado novamente
 ** se colocar o include_once antes do include, o include requisita o arquivo novamente
    require -> método sem retorno, faz requisições de arquivo, recebe um argumento(Arquivo), gera um erro fatal, ou seja, irá parar a aplicação
    ex:
        require("arquivo");
    require_once -> mesmo que o require, mas verifica se o arquivo já foi requisitado. Também gera um erro fatal
    ex:
        require_once("arquivo");
 **********************************************************************************************    
Manipulação de arquivos e diretórios
        file_exists -> verifica a existência de um arquivo ou diretório, retorno booleano, argumento(arquivo ou diretório que deseja-se verificar)
        ex: 
            file_exists("include.php");
        is_file -> método com retorno booleano, recebe um argumento(Arquivo), Verifica se é arquivo ou não, se o arquivo não existir o ele gera um erro fatal
        ex:
            is_file("include.css");
        copy ->copia um arquivo, método com retorno booleano, recebe dois argumentos(arquivo de origem, arquivo de destino)
        rename -> ronomeia ou move, método com retorno booleano, recebe dois argumentos(nome original, novo nome)
        unlink -> apaga um arquivo, metodo com retorno booleano, recebe um argumento(Arquivo)
        mkdir -> cria diretório, retorno booleano, recebe um argumento(Diretorio que você quer diretório), é posivel da permições passando um 2 parâmetro, como octal 0777, terceiro parâmetro é o da recursividade
            ex: 
                mkdir("js", 0777, true);
        fopen -> método para abrir arquivos, recebe dois argumentos(Arquivo, modo de operação)
            modo de operação:
                r -> read-> modo leitura
                w -> write-> modo escrita, mas irá resetar o arquivo, caso nao exista ele irá criar
                a -> apend-> anexo, conteudo antigo, caso exita, nao vai ser apagado, ou seja, ele ira pula uma linha e colocar o conteúdo
 *armazena o arquivo dentro de uma variavel, essa variavel sera chamada de ponteiro
 exercicio: 
    criar a estrutura basica da aplicação web caso não exista
        fwrite -> escreve no arquivo, recebe dois argumentos o arquivo que ira ser inserido o texto e o segundo sera o conteudo, só execulta se estiver um fopen.
            ex:
                fwrite($arquivo, "texto");
        fclose -> por motivos de segurança, é interessante fecha o ponteiro, com o método fclose
            ex:
                fclose($arquivo);
 */
#echo ("codigo execultado");
#echo ("arquivo");
$arquivo = fopen("teste2.txt", "r");
//fwrite($arquivo, "I <3  info\n");
$leitura = fread($arquivo, filesize("teste2.txt"));
fclose($arquivo);
echo $leitura;
#saindo :
#   echo ("<br/> saindo");


?>