<?php 
/*
    Variaveis superglobais são nativas e são aquelas que podem ser acessadas de qualquer parte do script 
    inclusive de dentro de funções. Elas armazenam informações relacionadas a variáveis de 
    servidor, usuários, formulários, sessões, entre outras.

    Lista das Principais Superglobais em PHP:
    $_GET: Contém os dados enviados via método GET na URL.
    $_POST: Contém os dados enviados via método POST, geralmente por formulários HTML.
    $_REQUEST: Contém os dados enviados via GET, POST ou COOKIE.
    $_SESSION: Contém dados da sessão do usuário.
    $_COOKIE: Contém dados armazenados nos cookies do navegador.
    $_FILES: Contém informações sobre arquivos enviados via upload.
    $_SERVER: Contém informações sobre o servidor e ambiente de execução.
    $_ENV: Contém variáveis de ambiente do sistema.
    $GLOBALS: Contém todas as variáveis globais do script.

*/
    #GLOBALS
    echo "<br><h2>Globals</h2>";

    function teste() {
        $var = "Local";

        echo "Global: " . $GLOBALS['var'];
        echo "<br>";
        echo "Local: " . $var;
    }
    
    $var = "Global";
    teste();



    # Server
    // variável que contém informações sobre cabeçalhos, servidor, caminhos e locais de script.
    echo "<br><h2>Server</h2>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

    echo "<br><h2>Get</h2>";
    echo "Ola " . (isset($_GET["nome"]) && !empty($_GET["nome"]) ? htmlspecialchars($_GET["nome"]) : "Mundo");
    echo "<br>";
    echo "<a href='". $_SERVER['PHP_SELF'] ."?nome=Bob'>Usando o Get</a>";

    echo "<br>";
?>