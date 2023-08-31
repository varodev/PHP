<?php
echo "<meta charset ='utf-8'>";
echo "<h1>array_recoger</h1>";

//Para utilizar el array que viene de array_pasar.php, debe utilizar la funcion unserialize();

/*Sasignaturas=$_GET['asignaturas'];
$asignaturas=unserialize($asignaturas);*/


$asignaturas=unserialize($_GET['asignaturas']);
$nota=$_GET['nota'];

foreach ($asignaturas as $asignatura) {
	echo $asignatura . ", ";
}

echo "<p>$nota</p>";

?>