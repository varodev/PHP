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
	h1,
	a {
		margin: 10px auto;
		text-align: center;
	}

	h1,
	label,
	p,
	a {
		font-family: sans-serif;
	}

	input {
		padding: 1em 5em;
		border-radius: 20px;
		border: 2px solid rgb(166, 158, 158, .9);
		transition: border .5s;
	}

	input[type="submit"] {
		padding: 1em 2em;
		background-color: rgb(29, 29, 170, 0.9);
		color: white;
		transition: background 1s;
		border: 2px solid rgb(0, 0, 0, .8);
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

	a {
		color: rgb(29, 29, 170, 0.7);
	}

	a:hover {
		color: rgb(85, 78, 199, 1);
	}

	#dni_user:invalid {
		border: 1px solid rgb(221, 52, 52, 0.8);
		background-color: rgb(221, 52, 52, 0.8);
	}

	#dni_user:valid {
		border: 1px solid rgb(17, 201, 13, 0.8);
		background-color: rgb(17, 201, 13, 0.8);
	}
</style>

<body>
	<?php
	///////////////////////////////////////////////////////////
	//// El color del input dni cambia solo si el contenido////
	//// tiene una longuitud de 9 o 10.				   	   ////
	///////////////////////////////////////////////////////////


	if (isset($_GET['enviar'])) {
		// Si esta definido nombre
		if (isset($_GET['nombre'])) {
			// Si esta puesto el nombre, recogo su valor y el de intento
			$nombre_usuario = $_GET['nombre'];
			$intento = $_GET['intento'];
			$intento--;
		}

		// Comprueba si esta definida $dni
		if (isset($_GET['dni'])) {
			// Le asino el valor
			$dni_usuario = $_GET['dni'];
			// Le mando como parametro a una funcion
			// que devolvera un numero dependiendo si es correcto o no
			$resultado = validarDni($dni_usuario);
			// Reenvio con los parametros y valores correspondientes
			header("Location:dni_form.php?nombre=$nombre_usuario&dni=$dni_usuario&intento=$intento&resultado=$resultado");
		}
	}

	// Devolvera un numero dependiendo si es correcto o no
	function validarDni($dni_usuario)
	{
		// Variable que servira para decidir que mensaje mostrar
		$resultado = 0;

		// Array de letras
		$letras_dni = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
		// Se coje el tamaño del array
		$longuitud_array = sizeof($letras_dni);
		// Se coje el tamaño del dni
		$longuitud_dni = strlen($dni_usuario);
		// Con esta variable se comprobara si se encontro o no la letra
		$letra_econtrada = false;
		// Cojo la ultima posicion del dni
		$letra_dni = substr($dni_usuario, -1);
		// La paso a mayuscula
		$letra_dni = strtoupper($letra_dni);

		// Se comprueba si esta la letra
		for ($index = 0; $index < $longuitud_array && !$letra_econtrada; $index++) {
			// Si la encuentra, para de recorrer 
			if ($letras_dni[$index] == $letra_dni) {
				$letra_econtrada = true;
			}
		}

		// Cojo la parte numerica
		// Desde 0 hasta la longuitud del dni - 1
		$numero_dni = substr($dni_usuario, 0, $longuitud_dni - 1);

		$resto = $numero_dni % 23;
		$letra_dni_correspondiente = $letras_dni[$resto];

		// Compruebo si la letra del dni es la que le corresponde del array
		if ($letra_dni_correspondiente != $letra_dni) {
			// Sino lo es devuelvo 1 (error / incorrecto)
			$resultado = 1;
		}
		//Sino devolvera 0 (correcto)
		// Declarada al principio

		return $resultado;
	}


	if (isset($_GET['resultado'])) {
		// Se comprueba el parametro resultado en la función
		// Se pasa como parametro el formulario por si hay que mostrarlo
		comprobarResultado($_GET['resultado'], $_GET['intento']);
	}


	function comprobarResultado($resultado, $intento)
	{
		// Compruebo si esta el valor de nombre y dni en la url
		if (isset($_GET['nombre']) && isset($_GET['dni'])) {
			// Se coje el valor del nombre y dni
			$nombre_usuario = $_GET['nombre'];
			$dni_usuario = $_GET['dni'];
		}

		// Se coge el valor de la longuitud del dni
		$longuitud_dni = strlen($dni_usuario);
		// Compruebo si la longuitud del dni es igual a 9
		if ($longuitud_dni == 9) {
			// Si lo es, se añade un cero delante;
			$dni_usuario = "0" . $dni_usuario;
		}



		if ($resultado == 0 && $intento <= 0) {
			// Comprueba si es el parametro es 0 (correcto)
			echo "<p class='correcto'>Hola $nombre_usuario. Tu DNI $dni_usuario es correcto</p>";
			echo "<a href='dni_form.php' title='Volver a intentarlo'>Volver a intentarlo</a>";
		} else if ($resultado == 1 && $intento == 0) {
			// Comprueba si es el parametro es 1 (incorrecto) y es el ultimo intento
			echo "<p class='erroneo'>Hola $nombre_usuario. Tu DNI $dni_usuario es incorrecto</p>";
			echo "<p class='erroneo'>Tienes otro intento</p>";
		} else {
			// Cuando el intento sea menor a 0 (No se consiguio en las dos oportunidades)
			echo "<p class='erroneo'>Hola $nombre_usuario. Tu DNI $dni_usuario es incorrecto</p>";
			echo "<p class='erroneo'>Debes ponerte en contacto con soporte</p>";
			echo "<a href='dni_form.php' title='v'>Volver al formulario</a>";
		}
	}

	// Se comprueba si esta $intento y $resultado en la url
	if (isset($_GET['intento']) && isset($_GET['resultado'])) {
		$intento = $_GET['intento'];
		$resultado = $_GET['resultado'];
	} else {
		// Si no lo esta, se inicializa a 1
		$intento = 1;
		// Se inicializa resultado a un numero distinto de 0
		$resultado = 2;
	}

	if ($intento >= 0 && $resultado != 0) {
		echo "
            <div id='container_numero'>
                <h1>Comprobar dni</h1>
                <form name='formulario' action='dni_form.php' method='GET' enctype='application/x-www-form-urlencoded'>
                    <label for='nombre'>Escriba su nombre</label>
                    <input type='text' name='nombre' required autofocus>
                    <label>Escriba su dni</label>
                    <input id='dni_user' type='text' name='dni' minlength='9' maxlength='10' required>
                    <input type='hidden' name='intento' value='$intento' hidden>
                    <input type='submit' name='enviar' value='Enviar'>
                </form>
            </div>
        ";
	}

	?>
</body>

</html>