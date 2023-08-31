<?php
echo "<meta charset ='utf-8'>";
echo "<h1>Primos</h1>";
//Sacar si un número es primo aleatorio del 0 al 100
//Los números primos son aquellos que solo son divisibles entre ellos mismos y el 1
$numero = rand(0,100);
$contador = 0;

for ($i=1; $i<=$numero; $i++){
	if ($numero % $i==0){
		$contador++;
	}
}

if ($contador == 2){
	echo "<p>$numero es primo</p>";
}else{
	echo "<p>$numero no es primo</p>";
}
?>

