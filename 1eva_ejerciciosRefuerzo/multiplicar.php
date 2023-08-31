<?php
echo "<meta charset ='utf-8'>";
echo "<h1>Ejercicio Tabla multiplicar</h1>";

$numero = 7;
$resultado = 0;

for($i=0; $i<=10; $i++){
	$resultado = $numero * $i;
	echo "<p>$numero x $i = $resultado</p>";
	//echo "<p>$numero x $i =" . $numero*$i ."</p>";
}

/*echo "<p>$numero x 0 =" . ($numero * 0) . "</p>";
echo "<p>$numero x 0 =" . $numero * 0 . "</p>";
echo "<p>$numero x 1 =" . $numero * 1 . "</p>";
echo "<p>$numero x 2 =" . $numero * 2 . "</p>";
echo "<p>$numero x 3 =" . $numero * 3 . "</p>";
echo "<p>$numero x 4 =" . $numero * 4 . "</p>";
echo "<p>$numero x 5 =" . $numero * 5 . "</p>";
echo "<p>$numero x 6 =" . $numero * 6 . "</p>";
echo "<p>$numero x 7 =" . $numero * 7 . "</p>";
echo "<p>$numero x 8 =" . $numero * 8 . "</p>";
echo "<p>$numero x 9 =" . $numero * 9 . "</p>";
echo "<p>$numero x 10 =" . $numero * 10 . "</p>";*/
?>

