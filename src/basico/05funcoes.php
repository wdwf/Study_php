<?php

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
    function teste(string $valor) {
        echo "<br> Testeee $valor<br>";
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
    echo call_user_func($myArr["teste"], "valor");
    echo call_user_func($myArr2[0], "fulano");
    echo $myArr2[0]("valorrrrr");

    echo "<br>";

    # -------------

    # funções relacionadas ao array
    
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

        //Remova elementos de um array e substitua-o por novos elementos:
    var_dump(array_splice($var6, 1, 1));
    echo "<br><br>";
    $arr8 = ["A", "B", "C"];
    $arr9 = ["F", "G", "H"];
    var_dump(array_splice($arr8, 0, 1, $arr9));
    echo "<br><br>";


        // Array diff Compare os valores de duas matrizes e retorne as diferenças:
    $cars = ["Ford", "Mustang", "Toyota"];
    $newArr = array_diff($cars, ["Ford", "Mustang"]);
    echo "<br><br>" . var_dump($newArr);
    $newArr[0] = "valor";
    echo "<br><br>" . $newArr[0];

    # -------------

    # Expansão de array - concatenação
    $arr4 = [1, 2, 3];
    $arr5 = [4, 5, 6];
    $arr6 = [...$arr4, ...$arr5];
    var_dump($arr6); // [1, 2, 3, 4, 5, 6]
    echo "<br><br>";


    # -----------------
    // metodo map
    function myFuncMap(int $v) {
        return $v * 2;
    }
    $mapArr = [1,2,3,4,5,6];
    print_r(array_map("myFuncMap", $mapArr));
    echo "<br><br>";

    # ------------------

    //Metodo filter
    function filterFunc(int $v) {
        if ($v % 2 == 0) {
            return $v;
        }
    }
    $filterArr = [1,2,3,4,5,6];
    print_r(array_filter($filterArr, "filterFunc"));
    echo "<br><br>";



    # ---------------
    #Organização
    // sort() - organiza de modo crescente
    // rsort() - organiza de modo decrescente 
    // asort() - sort associative arrays in ascending order, according to the value
    // ksort() - sort associative arrays in ascending order, according to the key
    // arsort() - sort associative arrays in descending order, according to the value
    // krsort() - sort associative arrays in descending order, according to the key


    # ----------------
    # uso de include
    // Se refere ao uso de um arquivo
    include '01variaveis.php';

    echo "Variavel de outro arquivo $Var";

    # ----------------

    echo "<br><br>";

    # Objetos

    // O uso de objetos se dá apenas pelo uso de classes seguindo a orientação a objetos

    class Livro {
        public $titulo;
        public $autor;

        //Inicializador do objeto
        public function __construct(string $titulo, string $autor) {
            $this->titulo = $titulo; 
            $this->autor = $autor;
        }

        public function apresentar() {
            return "titulo: $this->titulo<br>autor: $this->autor";
        }
    };

    $book = new Livro("Padrões de arquitetura", "Fulano");

    var_dump($book);
    echo "<br> {$book->apresentar()}";

    //---------------------
    # Funções

    $esc_global = "valor";
    echo teste2();

    // Dentro de uma função, para acessar uma variável global, você precisa usar a palavra-chave global ou o array $GLOBALS.

    function teste2($param = "Bob") {
        //acessando var global
        global $esc_global;
        //or
        //echo $GLOBALS['esc_global'];
        echo $esc_global;

        return $param;
    };

    # Funçoes anonimas
    $saudacao = function ($nome = "jom") {
        return "Olá $nome";
    };

    echo $saudacao("Bob");

    #Arrow functions - funcionalidades de uma linha
    $fn1 = fn($valor) => $valor + 2;

    echo $fn1(10);
?>