<?php
echo "<meta charset='UTF-8'>";
echo "<h1>Arrays</h1>";

echo "<h2>Primera forma</h2>";
$alumnos[0]="Cristian";
$alumnos[1]="Ricardo";
$alumnos[2]="Diego F";
$alumnos[3]="David";
$alumnos[4]="Kevin";
$alumnos[5]="Elias";
$alumnos[6]="Álvaro";
$alumnos[7]="Samuel";
$alumnos[8]="Adrian";
$alumnos[9]="Adrian2";
$alumnos[10]="Diego D";
$alumnos[11]="Nacho";
//sacar el tamaño --> echo "<p>".sizeof($alumnos)."</p>;
//Te da informacion del array --> var_dump($alumnos);
echo"<h3>Una forma de Recorrer arrays(Bucle for)</h3>";
	for ($indice=0; $indice<sizeof($alumnos); $indice++){
		echo "<p>$alumnos[$indice]</p>";
	}
echo"<h3>Otra forma de Recorrer arrays(Bucle foreach)</h3>";
	foreach($alumnos as $alumno){
		echo "<p>$alumno</p>";
	}

echo "<h2>Segunda forma</h2>";
$alumnos2[]="Andrés Andrisito";
$alumnos2[]="Pedro Pedrosito";
$alumnos2[]="Pez Pedromancer";

//Modifico la contenido del indice 1 del array
$alumnos2[1]="Macabi de Levantar";
echo"";

//Asignamos $alumnos2 al array $otro_array. NO EXISTIA $otro_array todavia.
$otro_array=$alumno2;
	foreach($otro_array as $otro_alumno){
		echo "<p>$otro_alumno</p>";
	}

/*//Curiosidad/Utilidad
$variable_que_no_me_sirve="Elimina la variable en cuanto puedas";	
echo"<p>$variable_que_no_me_sirve</p>";
//ya no me sirve para nada!! me la cargo
unset($variable);
echo"<p>$variable_que_no_me_sirve</p>";
//Fin Curiosidad/Utilidad

unset($alumnos2);
var_dump($alumnos2);
//no se puede hacer un var_dump de algo que no existe*/

echo "<h2>Tercera forma</h2>";
$frutas=["Sandias", "Naranjas", "Limones", "Manzanas", "Pomelo"];
foreach($frutas as $fruta){
		echo "<p>$fruta</p>";
	}


echo "<h2>Cuarta forma</h2>";
$asignaturas=array("Fisica", "Quimica", "Matematicas", "Ingles", "Literatura");
foreach($asignaturas as $asignatura){
		echo "<p>$asignatura</p>";
}

echo"<h2>Eliminar elementos de un array</h2>";
$dias=array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo");
echo"<p>Recorro todo el array con un for</p>";
for($i=0; $i<sizeof($dias); $i++){
echo $dias[$i]."||";
}
echo "<p>Borro un elemento de un array (indice y contenido) reordenado el array</p>";
echo "<p>Borro el miercóles, que corresponde al indice 2</p>";
array_splice($dias,2,1);
echo "<p>Recorro todo el array con un for</p>";
for($i=0; $i<sizeof($dias); $i++){
echo $dias[$i]." || ";
}
echo "<p>Var Dump</p>";
var_dump($dias);
?>