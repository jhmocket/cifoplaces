<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?= APP_NAME ?></title>
		<?= Template::getCss() ?>
	</head>
	<body>
		<?= Template::getLogin() ?>
		<?= Template::getHeader('Portada') ?>
		<?= Template::getMenu() ?>
		<?= Template::getSuccess() ?>
		<?= Template::getError() ?>
		
		<main>
    		<h2>CIFO Places</h2>
    		
    		<p>Sitio web de CIFO Places.</p>
		</main>
		<?= Template::getFooter() ?>
	</body>
</html>


