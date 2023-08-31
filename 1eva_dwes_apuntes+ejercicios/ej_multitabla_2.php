<?php
echo "<meta charset ='utf-8'>";
echo "<h1>Ejercicio Tabla multiplicar multitabla</h1>";
//Realizar la tabla de cualquier número con una función y el bucle for.
function multiplicacion ($numero){
	for($i=0; $i<=10; $i++){
	$resultado = $numero * $i;
		echo "<p>$numero x $i = $resultado</p>";//echo "<p>$numero x $i =" . $numero*$i ."</p>";
	}//no hace falta return
}

$numero = rand(1,7);
//$resultado = 0;
multiplicacion($numero);
?>