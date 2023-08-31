<?php
echo "<meta charset ='utf-8'>";
echo "<h1>array_pasar</h1>";

$asignaturas=array("Física", "Química", "Matemáticas", "Ingles", "Literatura");

//Para pasar un archivo, debemos serializarlo previamente
$asignaturas=serialize($asignaturas);
//Una vez serializado, lo paso por el enlace
$nota=8;
echo"<a href='array_recoger.php?asignaturas=$asignaturas&nota=$nota'>Pasar array</a>";

?>