<?php
namespace src\Controller;

class IndexController
{
    public function index(): void
    {
        require_once __DIR__ . '/../../views/uploadFile/index.phtml';
    }
}
