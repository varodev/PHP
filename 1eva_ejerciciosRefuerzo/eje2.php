<?php
echo "<h1>Averiguar cuántos divisores tiene un número introducido por código en php</h1>";
$numero = 200;
$divisor = 0;

for ($i=1; $i<=$numero; $i++) {
	if ($numero%$i==0) {
		$divisor++;
	}
}

echo "<p>El número $numero tiene $divisor divisores</p>";
?>