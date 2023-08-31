<?php
echo "<h1>Vamos a jugar al bingo!</h1>";

function generarBombo(){
	for ($numero=1; $numero<=100; $numero++) { 
		$bombo[]=$numero;
	}
	return $bombo;
}

function generarCarton(){
	$carton=array();
	while(sizeof($carton)<15){
		//generar numero aleatorio
		$aleatorio=rand(1,100);
		//si no esta en el array, lo meto en carton
		if (!in_array($aleatorio, $carton)) {
			// lo añado
			$carton[]=$aleatorio;
		}
	}
	sort($carton);
	return $carton;
}

function jugarBingo(){
	$bombo=generarBombo();
	$carton=generarCarton();
	//mostramos los numeros del carton
	echo "<h2>Números del carton:</h2>";
	foreach ($carton as $numero) {
		echo $numero. "||";
	}
		
	$aciertos=0;
	while($aciertos<15){
		//generar un numero aleatorio entre 0 y el tamaño del bombo
		$indice=rand(0, sizeof($bombo)-1);
		//miramos que valor hay en dicha indice (indice del array) y lo guardamos en $bola
		$bola=$bombo[$indice];
		//borramos esa bola del bombo
		array_splice($bombo, $indice,1);
		//si la bola esta en el carton, he acertado un numero, sumo un acierto
		if (in_array($bola, $carton)) {
			$aciertos++;
			echo "<p>Ha salido el numero $bola. Has acertado.</p>";
		}else{
			echo "<p>Ha salido el numero $bola. No esta en el carton.</p>";
		}
	}

		if(isset($_GET['nombre'])){
			$nombre = $_GET['nombre'];
		}
	
	echo "<p>Enhorabuena $nombre! Has cantado bingo con ".(100-sizeof($bombo))." extracciones de bolas.</p>";
	echo "<p><a href='1Eva_examen_bingo.php' title='Volver a jugar'>Volver a jugar al bingo</a></p>";
}

if (!isset($_GET['enviar'])){
	echo"<form name='formulario' action='1Eva_examen_bingo.php' method='GET'>
                <label>Introduce tu nombre para jugar al bingo:</label>
                <input type='text' name='nombre' autofocus required>
                <input type='submit' name='enviar' value='Enviar'>
            </form>
        ";
}else{
	jugarBingo();
}
