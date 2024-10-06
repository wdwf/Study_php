<?php

session_start();

use src\Services\FileService;
require_once '../Services/FileService.php';

class UploadController {

    public static function handleRequest() {
        if (isset($_POST['enviar'])) {
            $fileService = new FileService($_FILES['arquivo']);
            $erros = $fileService->validate();

            if(!empty($erros)) {
                $_SESSION['erros'] = $erros;
                self::redirectToForm();   
            }

            $message = $fileService->saveFile();
            $_SESSION["mensagem"] = $message;
            //chama a própria classe
            self::redirectToForm(); 
        }
    }

    private static function redirectToForm() {
        header('Location: /etapa1/web/uploadFile/index.php');
        exit();
    }
}

UploadController::handleRequest();