<?php
echo "<meta charset ='utf-8'>";
echo "<h1>Ejercicio Quitar Tildes</h1>";
function quitarTildes($texto_sin_tildes){
$texto_sin_tildes = str_replace(array("Á", "É", "Í", "Ó", "Ú"),array("A", "E", "I", "O", "U"),$texto_sin_tildes);
$texto_sin_tildes = str_replace(array("á", "é", "í", "ó", "ú"),array("a", "e", "i", "o", "u"),$texto_sin_tildes);
return $texto_sin_tildes;
}

echo "<meta charset ='utf-8'>";
echo "<h1>Ejercicio2</h1>";

/*$dia = rand(1,7);

switch ($dia){
case 1: 
	$dia = "Lunes";
	break;
case 2:
  	$dia = "Martes";
	break;
case 3:
	$dia = "Miércoles";
	break;
case 4:
	$dia = "Jueves";
	break;
case 5:
  	$dia = "Viernes";
	break;
case 6:
	 $dia = "Sábado";
	break;
case 7:
	$dia = "Domingo";
	break;	
default:
	echo "<p>error</p>";
	break;	
}*/
$dia = "Lunes";
$dia = quitarTildes($dia);
$dia = strtolower($dia);

switch ($dia){
case "lunes":
	$mensaje = "Tenemos clase de 15:00 a 16:45";
	  $error=True;
	break;
case "martes":
  	$mensaje = "Tenemos clase de 15:00 a 16:45";
	  $error=True;
	break;
case "miercoles":
	$mensaje = "Tenemos clase de 15:00 a 16:45";
		$error=True; 
	break;
case "jueves":
	$mensaje = "Tenemos clase de 15:00 a 16:45";
	  $error=True;
	break;
case "viernes":
$mensaje = "no hay clase";
	  $error=false;
	break;	
case "sabado":
$mensaje = "no hay clase";
	  $error=false;
	break;	
case "domingo":
$mensaje = "no hay clase";
	  $error=false;
	break;			
default:
	$error=False;
	$mensaje = "Día incorrecto";
	break;	
}

if($error){
	echo "$dia, $mensaje";
}else{
	echo "$dia, $mensaje!!";
}


//echo $dia;