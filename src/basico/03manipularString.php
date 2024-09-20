<?php 
    # Metodos string

    $texto = "O viés de ancoragem é uma tendência cognitiva que leva as pessoas a confiar demais na primeira informação que obtêm, o que pode influenciar de forma negativa as decisões tomadas.";
    $texto2 = "em casa de ferreiro espeto é de pau";

    //Define o comprimento da string
    echo "length: " . mb_strlen($texto);

    echo "<br><br>";

    //Retorna o index da primeira letra localiza da substrng dentro da string principal a contagem se inicia em 1
    echo "O index da palavra começa em: " . strpos($texto, "ancoragem");

    echo "<br><br>";
    
    //Substitui parte de uma string por outra string
    echo "parte da string substituida: " . str_replace("tendência", "metodologia", $texto);

    echo "<br><br>";
    
    //extrai uma parte da string
    echo substr($texto, 0, 20);

    echo "<br><br>";

    //Remove espaço, quebra de linhas e outros caracteres em branco no inicio e no final da string
    echo trim($texto);

    echo "<br><br>";

    //Converte para maiusculo e minusculo
    echo mb_strtolower($texto);
    echo "<br>--------------<br>";
    echo mb_strtoupper($texto);

    echo "<br><br>";
    
    //Coloca a primeira letra da priemira paçavra em maisucula ou de cada palavra em maiusculo
    echo ucfirst($texto2); // Primeira letra
    echo "<br>--------------<br>";
    echo ucwords($texto2); // Primeira letra de cada palavra

    echo "<br><br>";
    
    //Divide uma string em um array
    $destrocos = explode(" ", $texto2);
    var_dump($destrocos);

    echo "<br><br>";

    //Junta elementos de um array em uma string
    echo implode(" ", $destrocos);

    echo "<br><br>";
    
    //inverte uma string - não indentifica letras com acentos
    echo strrev($texto2);

    echo "<br><br>";

    //Converte novas linhas em <br>
    $texto3 = "Ola, \nMundo";
    echo nl2br($texto3);

    echo "<br><br>";

    //Escapa caracteres especiais HTML
    $texto4 = "<h1>Hello World</h1>";
    echo htmlspecialchars($texto4);
    echo "<br>" . "<h2>Hello world</h2>";

    echo "<br><br>";
    
    //Formata numeros com separadores de milhar e decimal
    $numero = 1234.6789;
    echo number_format($numero, 2, ",", ".");

    echo "<br><br>";

    //Formatar uma string
    //%s - string
    //%d - inteiro
    //%f - float
    //%o - octal
    //%x - hexadecimal
    //%.2f - casas decimal
    $nome = "Vinicios";
    $idade = 28;
    echo sprintf("Meu nome é %s, e tenho %d anos", $nome, $idade);


?>