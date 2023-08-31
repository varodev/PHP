<?php
//Archivo introduzca 25 números.
function crearArray(){
	for ($numero = 1; $numero <= 25; $numero++) {
		$serie[] = $numero;
	}
	return $serie;
}

//rellenar con una función
function rellenarArray(){
	$serie = array();
	//se repite hasta completar
	while (sizeof($serie) < 25) {
		//generar numero aleatorio entre 1 y 100
		$num_aleatorio = rand(1, 100);
		//no puede haber ningún número repetido
		if (!in_array($num_aleatorio, $serie)) {
			$serie[] = $num_aleatorio;
		}
	}
	//el array debe estar ordenado ascendentemente
	sort($serie);
	return $serie;
}

//Cuando el array este completo, el programa mostrará los números
function lanzarArray(){
	$serie = rellenarArray();
	foreach ($serie as $numero) {
		//echo "<p>$numero . ","<p>";
		echo $numero . ",";//salga en línea 
	}
}

lanzarArray();

//A continuación, el programa generará automáticamente un número aleatorio entre 1 y 10
function compararNumero(){
	$serie = rellenarArray();
	$num_aleatorio_comprobar = rand(1, 10);
	echo "<p>El número a comprobar aleatorio es $num_aleatorio_comprobar</p>";
	//Si es par, comprobará que esta en el array
	if ($num_aleatorio_comprobar % 2 == 0) {
		echo "<p>Es par<p>";
		
		if (!in_array($num_aleatorio_comprobar, $serie)) {
		echo "<p>no Contiene el número definido en el array</p>";
		}else{
		echo "<p>Contiene el número definido en el array</p>";
		}
		
	//si es impar, monstrará enlace	
	} else {
		echo "<p>Es impar<p>";
		echo "<a href='examen.php' title='Intentelo de nuevo'>Inténtalo de nuevo</a>";
	}
}

compararNumero();

?>
