<?php
echo "<meta charset= 'UTF-8'>";

echo "<h1>ESTRUCTURAS DE CONTROL</h1>";
/*
Operadores comparacion:
	> >= < <= 
	== (valor)
	=== (valor y tipo)
	!=

Operadores logicos:
	and, &&
	or, ||
	xor (cuando se cumple una y solo una)
*/
echo "<h2>IF</h2>";
$nota=7;

if ($nota==7) {
	echo "<p>Se cumple la condicion</p>";
}
echo "<p>Siguiente linea de codigo que s ejecuta</p>";

echo "<h2>IF-ELSE</h2>";
if ($nota>=5) {
	echo "<p>Enhorabuena!!! Has aprobado.</p>";
}else{
	echo "<p>Los siento. Has suspendido.</p>";
}

echo "<h2>IF-ELSE IF-ELSE</h2>";
if ($nota<0 || $nota>10) {
	echo "<p>La nota es incorrecta</p>";
}else if ($nota>=5) {
	echo "<p>Superado.</p>";
}else{
	echo "<p>Suspenso.</p>";
}


//Concatenacion:
//Si lo ponemos asi sale el contenido de $nota
echo "<p>Has sacadao un $nota en el examen.</p>";
//Si lo ponemos sin parrafo:
//lo concatenamos con .variable. y ponemos cada parte del texto entre ""
echo "Has sacado un ".$nota." en el examen.";
//Si esta ultima lo ponemos en parrafo solo tenemos que abrir un solo <p>:
echo "<p>Has sacado un ".$nota." en el examen.</p>";


?>