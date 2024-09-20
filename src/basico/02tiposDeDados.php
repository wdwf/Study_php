<?php 
    /*
        null
        bool
        int
        float
        string
        array
        object
        callable -  representa qualquer coisa que você possa chamar como uma função em PHP.
        
            >   function saudacao($nome) {
                    echo "Olá, $nome!";
                }

                $minhaFuncao = 'saudacao'; // Armazenando o nome da função

                $outraFuncao = function($nome) { 
                    echo "Bem-vindo, $nome!"; 
                };

                // Usando call_user_func para chamar as funções 'callable'
                call_user_func($minhaFuncao, 'Maria'); // Saída: Olá, Maria!
                call_user_func($outraFuncao, 'João'); // Saída: Bem-vindo, João!


        resource -  representa um recurso externo ao PHP, como um arquivo aberto, uma conexão de banco de dados...
    */

    $var = null;
    $var2 = true;
    $var3 = 10;
    $var4 = 10.5;
    $var5 = "Bob";
    $var6 = [1, 2, 3];
    $var7 = new stdClass();

    