<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?= APP_NAME ?></title>
		<link rel="stylesheet" type="text/css" href="/css/estilo.css">
	</head>
	<body>
		<?= Template::getLogin() ?>
		<?= Template::getHeader('Lista de lugares') ?>
		<?= Template::getMenu() ?>
		<?= Template::getSuccess() ?>
		<?= Template::getError() ?>

		<main>
    		<h1><?= APP_NAME ?></h1>
    		<h2>Lista completa de lugares</h2>
		
		</main>
		<?= Template::getFooter() ?>
	</body>
</html>



