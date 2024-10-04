<?php 
    session_start();

    //sanitização e validação
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
        // essa sanitização do email apenas limpa não garante que seja um email valido
        $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

        if (empty($nome) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['mensagem'] = "Por favor, preencha o formulário corretamente.";
            header('Location: index.php'); // Redireciona para o formulário
            exit();
        }
        $_SESSION['mensagem'] = "";
        echo "<h3>Prazer em te conhecer, $nome! Seu email é $email.</h3>";
    }

/*
    Sanitização:  Remova ou escape caracteres indesejados para evitar injeções de código e ataques XSS (Cross-Site Scripting).
*/