<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Upload de arquivo</h2>
        <input type="file" name="arquivo" />
        <input type="submit" value="Enviar"  name="enviar" />
    </form>
    <h3>
        <?php
            if (isset($_SESSION['mensagem'])) {
                echo "<h3 class=\"fc\">". $_SESSION['mensagem'] ."</h3>";
                unset($_SESSION['mensagem']);
                return;
            }
        ?>
    </h3>
</body>
</html>