<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adivina el numero</title>
</head>
<body>
	<?php
	//partimos de que al pulsar el botón se pregunya si se envio
	if(isset($_GET['enviar'])){//el name del boton///////////////enviar
		if(isset($_GET['nombre'])){
		//asignar variables
		$nombre=$_GET['nombre'];//required, debe estar
		//echo($nombre); funciona

	}
	if(isset($_GET['dni'])){
		$dni_usuario=$_GET['dni'];//
		//echo($dni); funciona
	}

	if(isset($_GET['intento'])){
		$intento=$_GET['intento'];
		$intento--;
	}
	//enviar datos por la url y refrescar valores
	$resultado=0;

	//procesar al momento de enviar//////////////////
	// Array de letras
		$letras_dni = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
		// Se coje el tamaño del array
		//$longuitud_array = sizeof($letras_dni);//tamaño array
		// Se coje el tamaño del dni
		//$longuitud_dni = strlen($dni_usuario);//tamaño dni
		// Con esta variable se comprobara si se encontro o no la letra
		$letra_econtrada = false;
		// Cojo la ultima posicion del dni
		$letra_dni = substr($dni_usuario, -1);
		// La paso a mayuscula
		$letra_dni = strtoupper($letra_dni);

		//vamos a comprobar cada poscion del array con la letra que supuestamente tenemos, es el .length el sizeof($letras_dni)
	for($i=0; $i<sizeof($letras_dni) && !$letra_econtrada; $i++){
			if($letras_dni[$i]==$letra_dni){
				$letra_econtrada = true;
			}//si no ha metido letra no va a cambiar a true
		}

		//hay q trabajar ahora la parte númerica
	$numero_dni= substr($dni_usuario, 0,strlen($dni_usuario)-1);
	$resto = $numero_dni%23;
	//comprobar si en el array en la posicion del rsto es igual a letra que tenemos nosootros
	$letra_dni_correspondiente=$letras_dni[$resto];

	if($letra_dni_correspondiente !=$letra_dni){
		// Sino lo es devuelvo 1 (error / incorrecto)
			$resultado = 1;//entra porque es diferente
	}//se declara resultado 0 --> se encontró, declara arriba
header("Location:validarDNI.php?nombre=$nombre&dni=$dni_usuario&intento=$intento&resultado=$resultado");/////enviar
}//esto es la parte de procesar, ahora necesitas capturar los datos
//////////fin de procesar//////
//$resultado =0 coincidencia // 1 no 
	//si vas a imprimir cosas, vuelve a capturar
	if(isset($_GET['resultado'])){
		$resultado = $_GET['resultado'];
		$nombre=$_GET['nombre'];
		$dni_usuario=$_GET['dni'];
		$intento = $_GET['intento'];
		//en caso que el tamaño del DNI sea 9
		if(strlen($dni_usuario) ==9){
			$dni_usuario= "0".$dni_usuario;
		}

		if($resultado==0){
			echo"<p>Hola $nombre. Tu $dni_usuario es correcto </p>";//añadir en el if el formulario resultado 
		}else if($resultado==1 && $intento>0){//si te equivocas pero te quedan intentos
echo"<p>Hola $nombre. Tu $dni_usuario es incorrecto. Tienes otro internto. </p>";
		}else{
			echo"<p>Hola $nombre. Tu $dni_usuario es incorrecto. Debes ponerte en contacto soporte. </p>";
		}
	}
	if(isset($_GET['intento'])){//antes de enviar da error por loque hay que preguntar el valor
		$intento = $_GET['intento'];
		$resultado = $_GET['resultado'];

	}else{
		$intento=2;
		$resultado =2;
	}

	if($intento>0 && $resultado !=0){
	//si es más de una, echo 
	// vez que funciona los isset, que desaparezca el formulario a la segunda vez, entonces utilizar los intentos para ocultar formulario.
		echo "
				<h1>Comprobar dni</h1>
             <form name='formulario' action='validarDNI.php' method='GET' enctype='application/x-www-form-urlencoded'>
     <label for='nombre'>Escriba su nombre</label>
     <input type='text' name='nombre' required autofocus>
     <label>Escriba su dni</label>
     <input id='dni_user' type='text' name='dni' minlength='9' maxlength='10' required>
     <input type='hidden' name='intento' value='$intento' hidden>
                <input type='submit' name='enviar' value='Enviar'>
                </form>";
    }
?>
	</body>
	</html>











