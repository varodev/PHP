<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseñas</title>
</head>
<body>
	<h1>Contraseña</h1>

	<!-- FORMULARIO POR MÉTODO GET -->

	
	<form name="contrasena" action="contrasena.php" method="POST" enctype="application/x-www-form-urlencoded">
	<!-- "application/x-www-form-urlencoded" es el enctype predeterminado
		por lo que no poner enctype se traduce en poner éste. Este encoding asocia la información por pares de nombre y valor -->

		<label for="usuario">Nombre</label>
		<input type="text" name="usuario" required autofocus>

		<label for="password">Contraseña</label>
		<input type="password" name="password" required>

		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" value="Restablecer">
	</form>

	<?php

	$usuario = 'alvaro';
	$pass = 'moreno';
	
	if(isset($_POST['enviar'])){
		if(($_POST['usuario']==$usuario) && ($_POST['password']==$pass)){
			echo "<p>Login correcto</p>";
		}else{
			header("Location:contrasena.php?error");
		}
	}

	if (isset($_GET['error'])){
		echo "<p>Error</p>";
	}
	?>
  
</body>
</html>



