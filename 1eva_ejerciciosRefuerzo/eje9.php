<?php
echo "<h1>Listado de números perfectos del 1 al 10.000 en php</h1>";
for ($i=1; $i<=10000; $i++) {
    $suma = 0;
    for ($j=1; $j<$i; $j++) {
        if ($i%$j==0) {
            $suma = $suma + $j;
        }
    }

    if ($suma == $i) {
        echo"<p>$i</p>";
    }
}
?>