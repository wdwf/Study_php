<?php 

namespace Src\Repositories;

use Src\Infra\Database;
use Src\Entities\User;
use PDO;

class UserRepository
{
    private $pdo;

    public function __construct(Database $database)
    {
        $this->pdo = $database->getConnection();
    }

    public function createUser(User $user) 
    {
        $query = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $query->execute([
            ":name" => $user->getName(),
            ":email" => $user->getEmail()
        ]);
    }

     // ToDo: Add outros Métodos (find, update e delete)
}