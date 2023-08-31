<?php
echo "<h1>Primos4--en array (de otra forma)</h1>";
	$array_primos=[];
	$primo=true;

	for ($numero=2; $numero <=100 ; $numero++) { 
		$primo=true;
		for ($i=2; $i <=$numero/2 && $primo; $i++){
			if($numero%$i==0){
				$primo=false;
			}
		}
		if($primo){
			$array_primos[]=$numero;
		}
	}
	foreach ($array_primos as $numero_primo) {
		echo $numero_primo . ", ";
	}

echo "<h1>Primos4--en array (mio)</h1>";
//Mostrar todos los primos a la vez en bucle, comprobar si es primo (del nº2 al 100) y mostrarlo
$array_numero_primo[]="";
for ($i=2; $i<=100; $i++){// bucle para recorrer los primeros 100 números.
	if (motor_primo($i)){//si es primo, imprimelo
	    echo $i . ", ";
	}
}

function motor_primo ($i){//función para analizar que es un primo
	for ($j=2; $j<$i; $j++){//$primo es el valor $i del bucle de arriba
		if ($i % $j==0){
			$array_numero_primo[]=$i;
			return false;
		}
	}
	return true;
}



?>