<?php 
setcookie("dia-da-semana", date("l \\t\h\e jS"), time() + 3600);
session_start();
$_SESSION["teste"] = "funcionou!"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <h1>Resultado do processo</h1>
    <main>
        <?php
            $nome = $_POST["nome"] ?? "Não informado";
            $email = $_POST["email"] ?? "Não informado";
            echo "<h3>Prazer em te conhecer $nome $email </h3>";
            echo "<br>";
            echo "<h3>Super global Cookie</h3>";
            if(!isset($_COOKIE["dia-da-semana"])) {
                echo "Cookie named '" . "dia-da-semana" . "' is not set!";
              } else {
                echo "Cookie '" . $_COOKIE["dia-da-semana"] . "' is set!<br>";
                var_dump($_COOKIE);
              }
            echo "<br>";
            echo "<br>";
            echo "<h3>Super global Session</h3>";
            var_dump($_SESSION);
            echo "<br>";
        ?>
        <button onclick="history.back()">Voltar para a pagina anterior</button>
    </main>
</body>
</html>