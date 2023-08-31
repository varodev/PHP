<?php
echo "<h1>Comprobar si el número 6 es perfecto en php</h1>";
$suma = 0;
$NUMERO = 6;

for ($i=1; $i<$NUMERO; $i++){
	if ($NUMERO%$i==0){
		$suma = $suma + $i;
	}      
}

if ($suma == $NUMERO){
	echo "<p>el $NUMERO es perfecto</p>";
}else{
	echo "<p>el $NUMERO no es perfecto</p>";
}
?>