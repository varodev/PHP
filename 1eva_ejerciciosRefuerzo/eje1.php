<?php
echo "<h1>Sumar por un lado los números pares y por otro los impares del 1 al 100 en php</h1>";
$pares = 0;
$impares = 0;

for ($i=2; $i<=100; $i+=2){
    $pares+=$i;
}

for ($i=1; $i<=100; $i+=2){
    $impares+=$i;
}

echo "<p></p>La suma de los números pares del 1 al 100 es: $pares</p>";
echo "<p></p>La suma de los números impares del 1 al 100 es: $impares</p>";
?>