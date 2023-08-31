<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
	<h1>Formularios</h1>

	<!-- FORMULARIO POR MÉTODO GET -->

	<h2>Método GET</h2>
	<form name="formulario1" action="ej_formulario.php" method="GET" enctype="application/x-www-form-urlencoded">
	<!-- "application/x-www-form-urlencoded" es el enctype predeterminado
		por lo que no poner enctype se traduce en poner éste. Este encoding asocia la información por pares de nombre y valor -->

		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" required autofocus>

		<label for="apellidos">Apellidos</label>
		<input type="text" name="apellidos" required>

		<input type="submit" name="enviar1" value="Enviar1">
		<input type="reset" value="Restablecer">
	</form>

	<!-- FORMULARIO POR MÉTODO POST -->

	<h2>Método POST</h2>
	<form name="formulario2" action="ej_formulario.php" method="POST" enctype="application/x-www-form-urlencoded">

		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" required autofocus>

		<label for="apellidos">Apellidos</label>
		<input type="text" name="apellidos" required>

		<input type="submit" name="enviar2" value="Enviar2">
		<input type="reset" value="Restablecer">
	</form>

	<?php
	
	if(isset($_GET['enviar1'])){
		$nombre = $_GET['nombre'];
		echo "<p>¡El <b>isset</b> para enviar funciona!</p>";
		echo "<p>El nombre es: $nombre</p>";
		echo "<p>Se ha enviado el formulario GET</p>";
	}else if(isset($_POST['enviar2'])){
		$nombre = $_POST['nombre'];
		echo "<p>¡El <b>isset</b> para enviar funciona!</p>";
		echo "<p>El nombre es: $nombre</p>";
		echo "<p>Se ha enviado el formulario POST</p>";
	}/*else {
		header("Location:ej_formulario.php?error"); no es necesario porque es en la misma pág
	}

	if (isset($_GET['error'])){
		echo "<p>Error</p>";
	}*/
	?>
  
</body>
</html>