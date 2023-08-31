<?php
echo "<meta charset='UTF-8'>";
echo "<h1>Ejercicio calcular DNI2</h1>";
//Comparar si letra es correcta dado un DNI

$letra_DNI=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");

$dni="52882465Z";
$comprobar=substr($dni,8,9);//la letra, tb es puede $comprobar=substr($dni,-1);//la letra
$extraer = substr($dni,0,8);//los numeros
$division=$extraer%23;//la operacion 

$letracion=$letra_DNI[$division];//guardo en la variable la letra que corresponde en la posicion

if ($letracion==$comprobar){//si la letra que corresponde en la posicion es igual a $comprobar 
	echo "<p>La letra ".$letracion." es la correcta, el dni ".$dni." es válido</p>";
}else{
	echo "<p>La letra no es correcta</p>";
}
?>