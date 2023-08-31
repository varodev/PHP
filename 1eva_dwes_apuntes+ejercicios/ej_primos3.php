<?php
echo "<meta charset ='utf-8'>";

echo "<h1>Primos3 sin funcion</h1>";
//Mostrar todos los primos a la vez en bucle, si es primo (del nº2 al 100)
	$primo=true;

	for ($numero=2; $numero <=100; $numero++) { 
		$primo=true;
		for ($i=2; $i <=$numero/2 && $primo; $i++){
			if($numero%$i==0){
				$primo=false;
			}
		}
		if($primo){
			echo $numero . ", ";
		}
	}

echo "<h1>Primos3 con funcion</h1>";
//Mostrar todos los primos a la vez en bucle, si es primo (del nº2 al 100)
for ($i=2; $i<=100; $i++){// bucle para recorrer los primeros 100 números.
	if (motor_primo($i)){//si es primo, imprimelo
		echo $i . ", ";
	}
}

function motor_primo ($i){//función para analizar que es un primo
	for ($j=2; $j<$i; $j++){//$primo es el valor $i del bucle de arriba
		if ($i % $j==0){
			return false;
		}
	}
	return true;
}



	
?>