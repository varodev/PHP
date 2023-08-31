<?php
echo "<meta charset='UTF-8'>";

if (isset($_GET['enviar_btn'])){//recoges los campos de la URL
	$aleatorio   = $_GET['aleatorio'];
	$numero_usuario = $_GET['numero_usuario'];
	$intentos = $_GET['intentos'];
	$intentos++;

	if($aleatorio>$numero_usuario){
		$opcion=1;// EL numero que he pensado es mayor al numero introducido
	}else if ($aleatorio<$numero_usuario){
		$opcion=2;// EL numero que he pensado es menor al numero introducido
	}else if ($aleatorio==$numero_usuario){
		$opcion=3;// El numero es igual al introducido, has acertado
	}//primera viaja vacia
	header("Location:0.alvaro_moreno_adivina.php?primera&opcion=$opcion&intentos=$intentos&aleatorio=$aleatorio");
}else{
	echo "Entrada incorrecta";
}
?>


