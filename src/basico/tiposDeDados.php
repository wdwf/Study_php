<?php 
    /*
        null
        bool
        int
        float
        string
        array
        object
        callable
        resource
    */

    $var = null;
    $var2 = true;
    $var3 = 10;
    $var4 = 10.5;
    $var5 = "Bob";

    # ---------------
    # Acesso por index
    $var6 = array( "Maça", "Pão", "Arroz" );
    echo $var6[0];
    # OR
    //Este é um array associativo acesse a chave invez do index
    $var7 = array( "fruta" => "Maça", "legume" => "tomate");

    echo $var7["fruta"];

    # Sintex curta
    $var8 = ["gato", "cachorro"];

    # Nota: se foi definido uma função dentro do array sera necessario executa-la assim:
    function teste() {
        echo "<br> Testeee <br>";
    };
    $myArr = array(
        "saudacao" => function($nome) {
            return "Olá, " . $nome;
        },
        "despedida" => function($nome) {
            return "Adeus, " . $nome;
        },
        "teste" => "teste"
    );
    $myArr2 = ["teste"];
    $myArr["saudacao"]("fulano");
    echo call_user_func($myArr["teste"]);
    echo call_user_func($myArr2[0]);

    echo "<br>";

    # -------------

    # funções relacioando ao array
    
        // conta a largura do array

    echo count($var6);
        
        // add um item ao final do array
    
    array_push($var6, "New value");

        // remove um item do final do array
        
    array_pop($var6);

       // add um item ao Inicio do array
    
    array_unshift($var6, "New value");

       // remove um item ao inicio do array
    
    array_shift($var6);

        // Remove um pedaço definido do array
    
    array_splice($var6, 1, 1);

        // Array diff retorna um novo array mas sem os itens especificados e com os indexes vazios

    $cars = ["Ford", "Mustang", "Toyota"];
    $newArr = array_diff($cars, ["Ford", "Mustang"]);
    echo "<br>" . var_dump($newArr);
    $newArr[0] = "valor";
    echo "<br>" . $newArr[0];

    # -------------

    # Expansão de array
    $arr4 = [1, 2, 3];
    $arr5 = [4, 5, 6];
    $arr6 = [...$arr4, ...$arr5];
    var_dump($arr6); // [1, 2, 3, 4, 5, 6]

    # ---------------
    #Organização
    // sort() - organiza de modo crescente
    // rsort() - organiza de modo decrescente 
    // asort() - sort associative arrays in ascending order, according to the value
    // ksort() - sort associative arrays in ascending order, according to the key
    // arsort() - sort associative arrays in descending order, according to the value
    // krsort() - sort associative arrays in descending order, according to the key

?>