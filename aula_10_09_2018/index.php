<?php 
    /* 
        Orientação a objetos em php
            definição de classe
                não tem definição de pacote
                modificador padrão -> Se não mencionar nenhum modificador o php colocará um modificador publico  
                class Nome{
                    //atributos
                        definição:
                            modificador $atributo = valor
                            valor inicial opcional
                    //métodos
                        definição:  
                            modificador function nome($arg){
                                //corpo
                            }  
                }
                variável de referencia: $this->atributo ou metodo
                construtor:
                    modificado function __construct(){

                    }
                destrutor:
                    modificador function __destruct(){

                    }
                instância:
                    $variavel = new Class();
                    
    */
    echo 
    '
    <form action="login.php" method="post">
        <label for="usr">User:</label><input type="text" required name="usr" id="usr" />
        <br /> 
        <br />
        <label for="password">Password:</label> <input type="password" name="password" id="password" required/>
        <input type="submit" value="enviar">
    </form>
    ';
?>
