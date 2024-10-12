<?php

session_start();

use src\Services\FileService;

require_once '../Services/FileService.php';

class UploadController
{
    public function handleRequest()
    {
        if (isset($_POST['enviar'])) {
            $fileService = new FileService($_FILES['arquivo']);
            $erros = $fileService->validate();

            if (!empty($erros)) {
                $_SESSION['erros'] = $erros;
                $this->redirectToForm();
            }

            $message = $fileService->saveFile();
            $_SESSION["mensagem"] = $message;
            //chama a própria classe
            $this->redirectToForm();
        }
    }

    private function redirectToForm()
    {
        header('Location: /etapa1/web/uploadFile/index.php');
        exit();
    }
}

$controller = new UploadController();
$controller->handleRequest();
