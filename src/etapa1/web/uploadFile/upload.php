<?php 
session_start();
    function backForm() {
        header('Location: index.php'); // Redireciona para o formulário
        exit();
    }

    //isset -> Determina se a variavel foi declarada e se é diferente de null
    if (isset($_POST['enviar'])) {
        // print_r($_FILES);
        // echo $_FILES['arquivo']['name'];

        $erros = array();

        // Checa se o arquivo foi enviado com erro
        if ($_FILES['arquivo']['error'] === UPLOAD_ERR_OK ) {
            $erros[] = "Arquivo inválido..<br>";
            backForm();
        }
        // Checa se o arquivo tem nome
        if (empty($_FILES['arquivo']['name'])) {
            $erros[] = "Arquivo inválido..<br>";
            backForm();
        }

        $nomeArq = $_FILES['arquivo']['name'];
        $tipo = $_FILES['arquivo']['type'];
        $nomeTemporario = $_FILES['arquivo']['tmp_name'];
        $tamanho = $_FILES['arquivo']['size'];
        $tamanhoMaximo = 1024 * 1024 * 10; //10MB

        if ($tamanho > $tamanhoMaximo) {
            $erros[] = "Arquivo muito grande.<br>";
            backForm();
        }

        $arquivosPermitidos = ["png", "jpg", "jpeg", "gif"];
        $extensao = pathinfo($nomeArq, PATHINFO_EXTENSION);

        if (!in_array($extensao, $arquivosPermitidos)) {
            $erros[] = "Arquivo inválido.<br>";
            backForm();
        }

        $typesPermitidos = ["image/png", "image/jpg", "image/jpeg", "image/gif"];
        if (!in_array($tipo, $typesPermitidos)) {
            $erros[] = "Tipo de arquivo inválido.<br>";
            backForm();
        }

        if (! empty($erros)) {
            $_SESSION['erros'] = $erros;
            backForm();
        }
        $caminho = "uploads/";
        $novoNome = uniqid("php_Image-") . "." . $extensao;
        
        if (move_uploaded_file($nomeTemporario, $caminho . $novoNome)) {
            $_SESSION['mensagem'] = "Arquivo enviado com sucesso!";
        }
        
        backForm();
        return;
    }

