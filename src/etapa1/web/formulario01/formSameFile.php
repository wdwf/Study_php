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
    <h2>Formulário no mesmo arquivo</h2>
    <form id="formulario" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="idNome" name="nome" />
        <label for="email">Email:</label>
        <input type="email" name="email" id="idEmail" />
        <input type="submit" value="Enviar">
    </form>
    <main>
        <h3>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nome = $_POST["nome"] ?? "Não informado";
                $email = $_POST["email"] ?? "Não informado";
                echo "Prazer em te conhecer, $nome! Seu email é $email.";
                return;
            }
            echo "Aguardando form...";
            return;
        ?>
        </h3>
    </main>
</body>
</html>