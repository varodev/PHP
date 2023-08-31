<!DOCTYPE html>
<html>
	<head>
		<title>Contactos</title>
		<link rel="stylesheet" href="css/estilos_agenda.css">
		<script src="validar_formulario.js" defer></script>
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
				<form method='GET' action='mostrar_ficha.php' id='formulario'>
				<input type='hidden' name='consulta'>
				<input type='hidden' name='busqueda'>
				<label for='nombre'>Nombre: </label>
				<input type='text' name='nombre' id='nombre'>
				<label for='nombre'>Apellidos: </label>
				<input type='text' name='apellidos' id='apellidos'>
				<input type='button' value='Enviar' name='busqueda' id='validar_formulario' onclick='validar()'>
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