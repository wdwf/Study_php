<?php
session_start();
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/routes.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Upload</title>
</head>

<body>
	<form action="/upload" method="post" enctype="multipart/form-data">
		<h2>Upload de arquivo</h2>
		<input type="file" name="arquivo" />
		<input type="submit" value="Enviar" name="enviar" />
	</form>

	<?php if (isset($_SESSION['mensagem'])): ?>
	<h3 class="fc"><?= $_SESSION['mensagem']; ?>
	</h3>
	<?php unset($_SESSION['mensagem']); ?>
	<?php endif; ?>

	<?php if (isset($_SESSION['erros'])): ?>
	<div class="errors">
		<?php foreach ($_SESSION['erros'] as $erro): ?>
		<p><?= $erro; ?></p>
		<?php endforeach; ?>
		<?php unset($_SESSION['erros']); ?>
	</div>
	<?php endif; ?>
</body>

</html>