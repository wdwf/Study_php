<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Infra\Database;
use Src\Repositories\UserRepository;
use Src\UseCases\UserUseCase;
use Src\Controllers\UserController;

// Configurações e injeção de dependência
$database = new Database();
$userRepository = new UserRepository($database);
$userUseCase = new UserUseCase($userRepository);
$userController = new UserController($userUseCase);

var_dump($database);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Criar usuário</title>
</head>

<body>
	<form action="" method="POST">
    <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Criar Usuário</button>
	</form>

	<?php 
    // Exemplo de criação de usuário
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userController->createUser();
    }
    ?>
</body>

</html>
