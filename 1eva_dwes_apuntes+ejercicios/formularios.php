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
	<form name="formulario1" action="procesar_formulario.php" method="GET" enctype="application/x-www-form-urlencoded">
	<!-- "application/x-www-form-urlencoded" es el enctype predeterminado
		por lo que no poner enctype se traduce en poner éste. Este encoding asocia la información por pares de nombre y valor -->

		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" required autofocus>

		<label for="apellidos">Apellidos</label>
		<input type="text" name="apellidos" required>

		<label>Calificación</label>
		<input type="number" min="0" max="10" step="0.01" name="nota" required>

		<input type="hidden" name="mes" value="noviembre">

		<input type="submit" name="enviar1" value="Enviar1">
		<input type="reset" value="Restablecer">
	</form>

	<!-- FORMULARIO POR MÉTODO POST -->

	<h2>Método POST</h2>
	<form name="formulario2" action="procesar_formulario.php" method="POST" enctype="application/x-www-form-urlencoded">

		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" required autofocus>

		<label for="apellidos">Apellidos</label>
		<input type="text" name="apellidos" required>

		<label>Calificación</label>
		<input type="number" min="0" max="10" step="0.01" name="nota" required>

		<input type="submit" name="enviar2" value="Enviar2">
		<input type="reset" value="Restablecer">
	</form>

	<!--Enlaces-->
	<a href="procesar_formulario.php?edad=30">Enlace 1 </a>

	<?php
		if(isset($_GET['error'])){
			if($_GET['error']==1){
				echo "<p><b>Error</b>. No puedes acceder directamente a 'procesar_formulario.php'</p>";
			}
		}	
	?>

	<h2>Formulario en PHP</h2>
	<?php
	$nombre="Anibal";
	$formulario ="
		<form name='formulario1' action='procesar_formulario.php' method='GET' enctype='application/x-www-form-urlencoded'>
			<!-- 'application/x-www-form-urlencoded' es el enctype predeterminado
			pares de nombre y valor -->

			<label for='nombre'>Nombre</label>
			<input type='text' name='nombre' value = '$nombre' required autofocus>

			<label for='apellidos'>Apellidos</label>
			<input type='text' name='apellidos' required>

			<label>Calificación</label>
			<input type='number' min='0' max='10' step='0.01' name='nota' required>

			<input type='hidden' name='mes' value='noviembre'>

			<input type='submit' name='enviar1' value='Enviar1'>
			<input type='reset' value='Restablecer'>
		</form>
	";
	echo $formulario;
?>
    
</body>
</html>