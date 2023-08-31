	<?php
	echo "<meta charset='UTF-8'>";
	echo "<h1>Juego adivina el número del 1 al 100 -- corregido</h1>";

	// Si entro por 1era vez no existe la variable primera, luego genero el numero aleatorio UNICAMENTE una vez, condicionado a que no exista $primera
	$acierto=false;

	if(!isset($_GET['primera'])){
		$aleatorio=rand(1,100);
		$intentos=0;
		//$acierto=false;
		$mensaje="";
	}
	//vengo de procesa.php
	//me envia: //header("Location:adivina.php?primera&opcion=$opcion&intentos=$intentos&aleatorio=$aleatorio");
	if(isset($_GET['opcion'])){
		$opcion = $_GET['opcion'];
		$intentos = $_GET['intentos'];
		$aleatorio = $_GET['aleatorio'];
		
		if($opcion==1){//el numero que he pensado es mayor al introducido
			$mensaje="el numero que he introducido es < al aleatorio, sube";
		}else if($opcion==2){
			$mensaje="el numero que he introducido es > al aleatorio, baja";
		}else if($opcion==3){
			$mensaje="Enhorabuena, has acertado con el número $aleatorio";
			$acierto=true;
		} 
	}
	//Acierto en el 5º intento, Sobra Otra vez será......
	//Si no acierto, falta un enlace

	if($intentos==5 && !$acierto){
		echo "<p>Otra vez será. EL número era $aleatorio</p>";
		echo "<a href='adivina.php'>Jugar otra vez</a>";
	} else{
		if(!isset($_GET['primera'])){
			echo "<p>A jugar!!!</p>";
		}else{
			echo "<p>Intento número ".$intentos."</p>";
			echo "<p>$mensaje</p>";
		}
		
		//He acertado en el 5º intento
		if ($intentos==5 || ($intentos<5 && $acierto)){
			//echo "<p>$mensaje</p>";
			echo "<a href='adivina.php'>Jugar otra vez</a>";	
		} 
	}
	
	if ($intentos<5 && !$acierto){//Muestro el formulario condicionado a seguir jugando a: tener intentos y no haber acertado
		echo "<form name='formulario' method='get' action='procesa.php'>
		<input type='number' name='numero_usuario' min='1' max='100' autofocus required>

		<input type='hidden' name='aleatorio' value='$aleatorio'>
		<input type='hidden' name='intentos' value='$intentos'>
		
		<input type='submit' name='enviar_btn' value='Enviar'>
		<input type='reset' value='Borrar'>
	</form>";
	} 
	?>
