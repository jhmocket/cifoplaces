<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?= APP_NAME ?></title>
		<?= Template::getCss() ?>
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
    		
    		//recuperar la lista de lugares
    		//$places = Place::get();
    		
    		//carga la vista para mostrar la lista
    		//require '../views/places/list.php';
		
		</main>
		<?= Template::getFooter() ?>
	</body>
</html>



