<?php
echo "<h1>Averiguar cuántos divisores tiene un número generado aleatoriamente (1-100) en php</h1>";
$numero = rand(1,100);
$divisor = 0;

for ($i=1; $i<=$numero; $i++) { 
	if ($numero%$i==0) {
		$divisor++;
	}
}
echo "<p>El número $numero tiene $divisor divisores</p>";
?>