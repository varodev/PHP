<?php
echo "<h1>Mostrar los divisores de un número introducido por código en php</h1>";
$numero = rand(1,100);

for ($i=1; $i <= $numero ; $i++) { 
    if ($numero % $i == 0) {
		echo "<p>los divisiones de $numero son $i</p>";
    }
}

?>