<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?= APP_NAME ?></title>
		<?= Template::getCss() ?>
	</head>
	<body>
		<?= Template::getLogin() ?>
		<?= Template::getHeader('Nuevo lugar') ?>
		<?= Template::getMenu() ?>
		<?= Template::getSuccess() ?>
		<?= Template::getError() ?>
		
		<main>
    		<h1><?= APP_NAME ?></h1>
    		<h2>Nuevo lugar</h2>

    		<div class="flex-container">
    			<form class="flex1" method="post" action="/Place/store" enctype="multipart/form-data">
    				<label>Nombre</label>
    				<input type="text" name="name">
    				<br>
    				<label>Tipo</label>
    				<input type="text" name="type">
    				<br>
    				<label>Descripción</label>
    				<input type="text" name="description">
    				<br>

    				<input type="submit" class="button" name="guardar" value="Guardar">
    			</form>
    
    			
    		</div>
		</main>
	</body>
</html>

