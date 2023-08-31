<!DOCTYPE html>
<html lang="es">
<head>
	<title>Contactos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilos_agenda.css">
	<script type="text/javascript" src="js/validar_formulario.js"></script>
</head>
<body>
	<section id="contenedor">
		<header>
			<a href="mostrar_contactos.php"><img src="media/img/cabecera.jpg"></a>
		</header>
		<main>
			<h1>BUSQUEDA DE CONTACTO</h1>
			<?php
			$nombre="";
			$apellidos="";
			$formulario="<form name='formulario' id='formulario' method='GET' action='mostrar_ficha.php'>
									<label>Nombre:</label>
									<input type='text' name='nombre' value='$nombre' id='nombre'>
									<label>Apellidos:</label>
									<input type='text' name='apellidos' value='$apellidos' id='apellidos'>
									<input type='hidden' name='busqueda'>
									<button type='button' name='validar' onclick='validar_campos()'>Validar datos</button>
									<input type='reset' value='Borrar'>
						</form>";
			if(isset($_GET['error'])){
				echo "<h2>Al menos uno de los campos debe de tener un valor.</h2>";
				echo $formulario;

			}else{
				echo "$formulario";
			}
			?>
			
		</main>
		<aside>
			
		</aside>
		<footer>
			
		</footer>	
	</section>
</body>
</html>