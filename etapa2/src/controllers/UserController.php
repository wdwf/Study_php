<?php 

namespace Src\Controllers;

use Src\UseCases\UserUseCase;

class UserController
{
    private $userUseCase;

    public function __construct(UserUseCase $userUseCase)
    {
        $this->userUseCase = $userUseCase;
    }

    public function createUser()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->userUseCase->createUser($name, $email);
        echo "Usuário criado com sucesso!";
    }
}