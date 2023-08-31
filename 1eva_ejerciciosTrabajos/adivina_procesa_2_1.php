<?php
	
	echo "<meta charset='UTF-8'>";
	echo "<h1>Juego adivina el número del 1 al 100 -- DOS EN UNO</h1>";

	// Si entro por 1era vez no existe la variable primera, luego genero el numero aleatorio UNICAMENTE una vez, condicionado a que no exista $primera
	$acierto=false;

	if(!isset($_GET['primera'])){
		$aleatorio=rand(1,100);
		$intentos=0;
		$mensaje="";
	}
	
	if (isset($_GET['enviar_btn'])){//recoges los campos de la URL
	$aleatorio   = $_GET['aleatorio'];
	$numero_usuario = $_GET['numero_usuario'];
	$intentos = $_GET['intentos'];
	$intentos++;

	if($aleatorio>$numero_usuario){
		$opcion=1;// EL numero aleatorio es mayor al numero introducido
	}else if ($aleatorio<$numero_usuario){
		$opcion=2;// EL numero aleatorio es menor al numero introducido
	}else if ($aleatorio==$numero_usuario){
		$opcion=3;// El numero es igual al introducido, has acertado
	}//primera viaja vacia
	header("Location:adivina_procesa_2_1.php?primera&opcion=$opcion&intentos=$intentos&aleatorio=$aleatorio");
	}
//cojo la informacion del Location
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
		//********************************************************************
	}
	//Acierto en el 5º intento, Sobra Otra vez será......
	
	if($intentos==5 && !$acierto){
		echo "<p>Otra vez será. El número era $aleatorio</p>";
		echo "<a href='adivina_procesa_2_1.php'>Jugar otra vez</a>";
	} else{
		if(!isset($_GET['primera'])){
			echo "<p>A jugar!!!</p>";
		}else{
			echo "<p>Intento número ".$intentos."</p>";
			echo"<p>$mensaje</p>";
		}
		
		//He acertado en el 5º intento
		if ($intentos==5 || ($intentos<5 && $acierto)){
			//echo"<p>$mensaje</p>";
			echo "<a href='adivina_procesa_2_1.php'>Jugar otra vez</a>";	
		} 
	}
	
	if ($intentos<5 && !$acierto){//Muestro el formulario condicionado a seguir jugando a: tener intentos y no haber acertado
		echo "<form name='formulario' method='get' action='adivina_procesa_2_1.php'>
		<input type='number' name='numero_usuario' min='1' max='100' autofocus required>

		<input type='hidden' name='aleatorio' value='$aleatorio'>
		<input type='hidden' name='intentos' value='$intentos'>
		
		<input type='submit' name='enviar_btn' value='Enviar'>
		<input type='reset' value='Borrar'>
	</form>";
	} 

?>