<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Juego adivina el número</title>
</head>

<body>
	<?php

	if(isset($_GET['intento'])){
		$intento=$_GET['intento'];//intento en procesa
	}else{
		$intento=0;
	}//

		
		$formulario ="
		<form name='formulario' action='alvaro_moreno_procesa.php' method='GET' enctype='application/x-www-form-urlencoded'>

		<label for='nombre'>Introduce un número del 1 al 100</label>
		<input type='number' name='numero' min='0' max='100' required autofocus>
		<input type='hidden' name='intento' value='$intento'>
		<input type='submit' name='enviar' value='Enviar'>
		<p>Has consumido $intento intento</p>
		</form>
		";

	if(isset($_GET['error'])){
		if($_GET['error']==1){//en caso de error, se controla para que no explote
			echo $formulario;
		}
	}else if(isset($_GET['resultado'])){
		$numero_aleatorio=$_GET['numero_aleatorio'];//numero en procesa

		if($_GET['resultado']=="sube"){//numero va bajo
			echo $formulario;
			echo "<p>Sube</p>";
		}else if($_GET['resultado']=="baja"){//numero va alto
			echo $formulario;
			echo "<p>Baja</p>";
		}else if($_GET['resultado']=="ganar"){//ganaste
			echo "<p>Enhorabuena, has acertado al $intento intento</p>";
			echo "<p>Has ganado, el numero era el $numero_aleatorio</p>";
			echo "<a href='alvaro_moreno_adivina.php' title='Jugar de nuevo'>Jugar de nuevo</a>";
		}else{//perdiste
			echo "<p>Lo siento, las consumido los $intento intentos</p>";
			echo "<p>Has perdido, el numero era el $numero_aleatorio</p>";
			echo "<a href='alvaro_moreno_adivina.php' title='Jugar de nuevo'>Jugar de nuevo</a>";
		}	
	}else{
		echo $formulario;
	}
	?>
</body>
</html>	