<?php
echo "<meta charset ='utf-8'>";
echo "<h1>Ejercicio a1</h1>";
//hacer en casa con SC
$dia = rand(1,7);

if($dia<1 or $dia>7){
	echo "<p>$dia, Dia erroreno</p>";
} else if ($dia==1){
	echo "<p>$dia, Tenemos clase de 15:00-16:45</p>";
} else if ($dia==2){
	echo "<p>$dia, Tenemos clase de 15:00-16:45</p>";
}else if ($dia==3){
	echo "<p>$dia, Tenemos clase de 15:00-16:45</p>";
}else if ($dia==4){
	echo "<p>$dia, No hay clase</p>";
}else if ($dia==5){
	echo "<p>$dia, No hay clase</p>";
}else if ($dia>5){
	echo "<p>$dia, Festivo</p>";
}else {
	echo "<p>Algo estas haciendo mal</p>";
}

$error=False;
$mensaje = "Tenemos clase de 15:00-16:45";
$mensaje2 = "No hay clase";
switch ($dia){
case 1:
	$mensaje = "Tenemos clase de 15:00-16:45";
	  $error=True;
	break;
case 2:
  	$mensaje = "Tenemos clase de 15:00-16:45";
	  $error=True;
	break;
case 3:
	$mensaje = "Tenemos clase de 15:00-16:45";
		$error=True; 
	break;
default:
	//$error=False;
	$mensaje = "No hay clase";
	break;	
}

if($error){
	echo "$dia, $mensaje";
}else{
	echo "$dia, $mensaje!!";
}

?>
