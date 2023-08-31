<?php
echo "<h1>Averiguar si un número generado aleatoriamente (1-100) es primo en php</h1>";
$numero = rand(1,100);
$contador = 0;

for ($i=1; $i<=$numero; $i++){
	if ($numero%$i==0){
		$contador++;
	}
}

if ($contador == 2){
	echo "<p>$numero es primo</p>";
}else{
	echo "<p>$numero no es primo</p>";
}
?>