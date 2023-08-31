<?php
echo "<meta charset ='utf-8'>";
echo "<h1>Primos2</h1>";
//Dado un número por código aleatorio (2 a 100), indicar si es primo o compuesto, utilizar variable booleana
$numero = rand(2,100);
$mitad = $numero/2;
$posible_divisor = 2;
$primo = true;

while ($posible_divisor <= $mitad && $primo){//mientras el número q empieza mayor e igual y verdad.
	if ($numero % $posible_divisor == 0){//es el algoritmo que define que un número es primo.
		$primo = false;//rompe, si se cumple(encuentra divisor), salgo.
	}
	$posible_divisor++; //incremento
}

/*for ($posible_divisor; $posible_divisor <=$mitad && $primo; $posible_divisor++){
	if ($numero % $posible_divisor == 0){//es el algoritmo que define que un número es primo.
		$primo = false;//rompe, si se cumple(encuentra divisor), salgo.
	}
}*/

if ($primo){
	echo "<p>$numero es primo</p>";
}else{
	echo "<p>$numero no es primo</p>";
}







?>
