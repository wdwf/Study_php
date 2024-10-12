<?php
namespace src\Controller;
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
                return;
            }

            $message = $fileService->saveFile();
            $_SESSION["mensagem"] = $message;
            //chama a própria classe
            // $this->redirectToForm();
        }
        $this->renderForm();
    }

    // private function redirectToForm()
    // {
    //     header('Location: /etapa1/web/uploadFile/index.php');
    //     exit();
    // }
    private function renderForm()
    {
        // Inclui a view (index.php ou outra que você queira usar para o formulário)
        require_once __DIR__ . '/../../index.php';
    }
}

$controller = new UploadController();
$controller->handleRequest();
