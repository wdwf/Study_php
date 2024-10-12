<?php

use src\Controller\IndexController;
use src\Controller\UploadController;

// Retorna o controlador com base na URL requisitada
return match (rtrim($_SERVER['REQUEST_URI'], '/')) {
    '' => (new IndexController())->index(),         // Página inicial
    '/upload' => (new UploadController())->handleRequest(), // Página de upload
    default => http_response_code(404) && 'Página não encontrada',  // 404
};
