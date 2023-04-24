<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?= APP_NAME ?></title>
		<?= Template::getCss() ?>
		<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
	</head>
	<body>
		<?= Template::getLogin() ?>
		<?= Template::getHeader('Lista de lugares') ?>
		<?= Template::getMenu() ?>
		<?= Template::getSuccess() ?>
		<?= Template::getError() ?>
		
		<div class="flex-container">
			<section class="flex1">
				<h2>Contacto</h2>
				<p>Utiliza el formulario de contacto para enviar un menssaje al administrador.</p>
				
				<form method="POST" action="/Contacto/send">
					<label>Email</label>
					<input type="email" name="email" required>
					<br>
					<label>Nombre</label>
					<input type="text" name="nombre" required>
					<br>
					<label>Asunto</label>
					<input type="text" name="asunto" required>
					<br>
					<label>Mensaje</label>
					<textarea name="mensaje" required></textarea>
					<br>
					<div class="g-recapcha" 
						data-sitekey="6LdswTclAAAAAA-Z2kjE_YZr0ZifNW8Jy9g571jP"> 
					</div>
					<br>
					<input class="button" type="submit" name="enviar" value="Enviar">					
				</form>
			</section>
		
		<section class="flex1">
			<h2>Ubicación y mapa</h2>
			<iframe width='400' height='200' src='https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Carreterra%20de%20Tarrassa,%2054,%20Sabadell,%20Spain+(RiS%20Pasteler%C3%ADa)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed'>
			</iframe>
			<h3>Datos</h3>
			<p><b>CIFO Sabadell</b> - Carretera Nacional 150 km.15, 08227 Terrassa<br>
			Teléfono 93 736 29 10<br>
			cifo_valles.soc@gencat.cat
			</p>
		</section>
		</div>
		
		<?= Template::getFooter() ?>
	</body>
</html>

