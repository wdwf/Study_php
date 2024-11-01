<?php 

namespace Src\UseCases;

use Src\Repositories\UserRepository;
use Src\Entities\User;

class UserUseCase 
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser($name, $email)
    {
        $user = new User($name, $email);
        $this->userRepository->createUser($user);
    }
}