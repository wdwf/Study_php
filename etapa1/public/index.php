<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Controller/IndexController.php';
require_once __DIR__ . '/../src/Controller/UploadController.php';

use src\Controller\IndexController;
use src\Controller\UploadController;

// Retorna o controlador com base na URL requisitada
match (rtrim($_SERVER['REQUEST_URI'], '/')) {
    '' => (new IndexController())->index(),         // Página inicial
    '/upload' => (new UploadController())->handleRequest(), // Página de upload
    default => http_response_code(404) && 'Página não encontrada',  // 404
};
