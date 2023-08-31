<?php
echo "<meta charset='UTF-8'>";
echo "<h1>Ejercicio calcular DNI</h1>";
//Calcular la letra del DNI

$letra_DNI=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");

$numeros_DNI=rand(1,60000000);
$division=$numeros_DNI%23;

echo"<p>La letra correspondiente al DNI ".$numeros_DNI." es:</p>";
echo"<p>$letra_DNI[$division]</p>";
?>

