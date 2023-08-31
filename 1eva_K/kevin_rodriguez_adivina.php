<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adivina el numero</title>
</head>
<style>
	body {
		height: 100vh;
		justify-content: center;
	}

	#container_numero,
	form,
	a,
	body {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	input,
	label,
	p,
	h1 {
		margin: 10px auto;
		text-align: center;
	}

	h1,
	label,
	p {
		font-family: sans-serif;
	}

	input {
		padding: 1em 5em;
		border-radius: 20px;
		border: 2px solid rgb(166, 158, 158, .8);
	}

	input[type="number"]:focus {
		border: 2px solid rgb(166, 158, 158, .8);
	}

	input[type="submit"] {
		padding: 1em 2em;
		background-color: rgb(29, 29, 170, 0.9);
		color: white;
		transition: background 1s;
	}

	input[type="submit"]:hover {
		background-color: rgb(85, 78, 199, 0.9);
	}

	.erroneo {
		color: rgb(221, 52, 52, 0.8);
	}

	.correcto {
		color: rgb(17, 201, 13, 0.8);
	}
</style>


<body>
	<?php



	
	//Compruebo si esta definada en la url el parametro intento
	if (isset($_GET['intento'])) {
		// Si lo esta, la variable $intento sera su valor
		$intento = $_GET['intento'];
	} else {
		// Si no lo esta, se inicializa a 1 (Ya que es el primer intento nada mas abrir la página)
		$intento = 5;
	}

	// Se asigna el valor de la variable intento a un input escondido que viajara en la url 
	$formulario = "
	<div id='container_numero'>
	<h1>Adivina el numero</h1>

	<form name='formulario' action='kevin_rodriguez_procesa.php' method='GET' enctype='application/x-www-form-urlencoded'>

		<label for='nombre'>Introduzca un numero del 1 al 100</label>
		<input type='number' name='numero' min='0' max='100' required autofocus>
		<input type='hidden' name='intento' value='$intento' >
		<input type='submit' name='enviar' value='Enviar'>
		<p>Te quedan $intento intentos</p>
	</form>
	</div>
	";

	// Se comprueba si hay un error
	if (isset($_GET['error']) && $_GET['error'] == 1) {
		//Se muestra tanto el formulario como un mensaje
		echo $formulario;
		echo "<p class='erroneo'>Vaya parece que algo no ha ocurrido como debia</p>";

		// Se comprueba si existe el parametro resultado
	} else if (isset($_GET['resultado'])) {
		// Se comprueba el parametro resultado en la función
		// Se pasa como parametro el formulario por si hay que mostrarlo
		comprobarResultado($formulario);
	} else {
		// Si no hay error, enseño el formulario
		echo $formulario;
	}

	function comprobarResultado($formulario)
	{
		$numero=$_GET['numero'];
		if ($_GET['resultado'] == "menor") {
			// Compruebo si es el parametro es "menor"
			echo $formulario;
			echo "<p class='erroneo'>El numero es menor</p>";
		} else if ($_GET['resultado'] == "mayor") {
			// Compruebo si es el parametro es "mayor"
			echo $formulario;
			echo "<p class='erroneo'>El numero es mayor</p>";
		} else if ($_GET['resultado'] == "perdio") {
			// Compruebo si es el parametro es "perdio" (uso todos los intentos y no acerto el numero)
			echo "<p class='erroneo'>Lo siento, otra vez será</p>";
			echo "<p class='erroneo'>El numero era el $numero</p>";
			echo "<a href='kevin_rodriguez_adivina.php' title='Jugar de nuevo'>Jugar de nuevo</a>";
		} else {
			// Sino es que el numero introducido es el mismo que el numero secreto
			echo "<h1 class='correcto'>Enhorabuena</h1>";
			echo "<p class='erroneo'>El numero era el $numero</p>";
			echo "<a href='kevin_rodriguez_adivina.php' title='Jugar de nuevo'>Jugar de nuevo</a>";
		}
	}
	?>
</body>

</html>