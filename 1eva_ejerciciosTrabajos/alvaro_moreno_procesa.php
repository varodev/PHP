<?php
$numero_aleatorio = rand(1,100);

if(isset($_GET['enviar'])){
	if(isset($_GET['numero'])){
		$numero_input=$_GET['numero'];
		$intento=$_GET['intento'];
		$intento++;
	}else{//controlar error
		header("Location:alvaro_moreno_adivina.php?error=1");
	}

	if($intento==5 && $numero_input!=$numero_aleatorio){//perder por consumir los intentos y no coincidir
		header("Location:alvaro_moreno_adivina.php?intento=$intento&resultado=perder&numero_aleatorio=$numero_aleatorio");
	}else{
		if($numero_input==$numero_aleatorio){//ganar por coincidir
header("Location:alvaro_moreno_adivina.php?intento=$intento&resultado=ganar&numero_aleatorio=$numero_aleatorio");
		}else if($numero_input<$numero_aleatorio){//numero menor que el random
header("Location:alvaro_moreno_adivina.php?intento=$intento&resultado=sube&numero_aleatorio=$numero_aleatorio");
		}else{//numero mayor que el random
header("Location:alvaro_moreno_adivina.php?intento=$intento&resultado=baja&numero_aleatorio=$numero_aleatorio");
		}
	}
}else{//controlar error
	header("Location:alvaro_moreno_adivina.php?error=1");
	}

?>