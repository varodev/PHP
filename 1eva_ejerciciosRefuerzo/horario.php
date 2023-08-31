<?php
function quitarTildes($texto_sin_tildes){
/*$texto_sin_tildes =str_replace("á", "a", $texto_sin_tildes);
$texto_sin_tildes =str_replace("Á", "A", $texto_sin_tildes);
$texto_sin_tildes =str_replace("é", "e", $texto_sin_tildes);
$texto_sin_tildes =str_replace("É", "E", $texto_sin_tildes);
$texto_sin_tildes =str_replace("í", "i", $texto_sin_tildes);
$texto_sin_tildes =str_replace("Í", "I", $texto_sin_tildes);
$texto_sin_tildes =str_replace("ó", "o", $texto_sin_tildes);
$texto_sin_tildes =str_replace("Ó", "O", $texto_sin_tildes);
$texto_sin_tildes =str_replace("ú", "u", $texto_sin_tildes);
$texto_sin_tildes =str_replace("Ú", "U", $texto_sin_tildes);*/
$texto_sin_tildes = str_replace(array("Á", "É", "Í", "Ó", "Ú"),array("A", "E", "I", "O", "U"),$texto_sin_tildes);
$texto_sin_tildes = str_replace(array("á", "é", "í", "ó", "ú"),array("a", "e", "i", "o", "u"),$texto_sin_tildes);
return $texto_sin_tildes;
}

echo "<meta charset ='utf-8'>";
echo "<h1>Horario</h1>";

$dia = "Miércoles";
$dia = quitarTildes($dia);
$dia = strtolower($dia);
//echo $dia;

//llamar el método con otro texto
/*$texto = "Camión Lucía CAMIÓN LUCÍA";
$texto = quitarTildes($texto);
$texto = strtolower($texto);
echo "</br>$texto";*/

switch ($dia){
case "lunes":
	$mensaje = "Tenemos clase de 15:00-16:45";
	  $error=True;
	break;
case "martes":
  	$mensaje = "Tenemos clase de 15:00-16:45";
	  $error=True;
	break;
case "miercoles":
	$mensaje = "Tenemos clase de 15:00-16:45";
		$error=True; 
	break;
case "jueves":
$mensaje = "Tenemos clase de 15:00-16:45";
	  $error=True;
	break;

default:
	$error=False;
	$mensaje = "No hay clase";
	break;	
}

if($error){
	echo "$dia, $mensaje";
}else{
	echo "$dia, $mensaje!!";
}
?>