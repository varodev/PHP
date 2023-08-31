<?php
echo "<meta charset ='utf-8'>";
echo "<h1>ESTRUCTURAS DE CONTROL</h1>";
echo "<h2>IF</h2>";

$nota = 7;
if ($nota==32){
echo "<p>Se cumple la condicion</p>";
}

echo "<p>Siguiente linea de código que se ejecuta</p>";
echo "<h2>IF ELSE IF ELSE</h2>";

if($nota<0 or $nota>10){
echo "<p> nota incorrecta </p>";
} else if ($nota>=5){
echo "<p> Aprobado </p>";
}else{
echo "<p> Suspendido </p>";
}

echo "<h2>CONCATENACIÓN</h2>";
echo "<p> Has sacado la nota $nota en el examen.</p>";
echo "Has sacado un " .$nota. " en el examen. Luego";





?>