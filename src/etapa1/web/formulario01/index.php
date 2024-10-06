<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="pt-br">
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
    <h1>Formulário processado.</h1>
    <form action="processar_form.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="idNome" name="nome" />
        <label for="email">Email:</label>
        <input type="email" name="email" id="idEmail" />
        <input type="submit" value="Enviar">
    </form>

    <?php
    
        if (isset($_SESSION['mensagem'])) {
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        }
    ?>
</body>
</html>