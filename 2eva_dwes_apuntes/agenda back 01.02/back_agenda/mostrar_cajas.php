<!DOCTYPE html>
<html>
	<head>
		<title>Contactos</title>
		<link rel="stylesheet" href="css/estilos_agenda.css">
	</head>

	<body>
		<section id="contenedor">
			<header>
				<a href='mostrar_contactos.php'><img src="media/img/cabecera.jpg"></a>
				
			</header>

			<main>

				<h1>Buscador de contactos</h1>
				<?php

				$formulario = "
				<form method='GET' action='mostrar_ficha.php'>
				<input type='hidden' name='consulta'>
				<label for='nombre'>*Nombre: </label>
				<input type='text' name='nombre' required>
				<label for='nombre'>*Apellidos: </label>
				<input type='text' name='apellidos' required>
				<input type='submit' name='busqueda'>
				</form>
				";

				echo $formulario;
				?>

			</main>

			<aside>
				
			</aside>

			<footer>
				
			</footer>

		</section>
	</body>
</html>