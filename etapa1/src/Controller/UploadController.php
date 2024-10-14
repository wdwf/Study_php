<?php
namespace src\Controller;

use src\Services\FileService;

require_once __DIR__ . '/../Services/FileService.php';

class UploadController
{
    public function handleRequest(): void
    {
        if (isset($_POST['enviar'])) {
            $fileService = new FileService($_FILES['arquivo']);
            $erros = $fileService->validate();

            if (!empty($erros)) {
                $_SESSION['erros'] = $erros;
                $this->renderForm();
                return;
            }

            $message = $fileService->saveFile();
            $_SESSION["mensagem"] = $message;
        }
        $this->renderForm();
    }

    private function renderForm()
    {
        // Inclui a view (index.php ou outra que você queira usar para o formulário)
        require_once __DIR__ . '/../../views/uploadFile/index.phtml';
    }
}
