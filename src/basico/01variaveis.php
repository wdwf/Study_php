<?php 
    /*
        As variaveis sao case sensitive
        não é possivel fazer concatenação de constantes diretamente na string
    */

    $var = "Bob";
    $Var = "alan";
    const constante = "Varaivel constante";
    const VARIAVEL = "Valor 1";
    const VARIAVEL2 = "Valor 2";

    echo constante;

    echo "<br>";

    echo "concatenação: $var, $Var";

    echo "<br>";

    echo "concatenação:" . VARIAVEL . "," . VARIAVEL2;

    echo "<br>";

    echo 'tentando usar variavel $var, $Var';

    echo "<br>";
    
    /*
        função interna que traz detalhes sobre a varaivel. Como tipo, length, e valor
    */
    var_dump($var);

    echo "<br>";

    # atribuição por referencia 
    /* 
        torna a varialve secundaria em um apelido para a varialve primaria
        assim quando a secundaria trocar de valor a primaria tbm troca.
    */

    $foo = "Bob";

    $bar = &$foo;

    echo $bar;
?>