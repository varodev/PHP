<?php
$nota=rand(-3,15);
$error=False;
$calificacion;
if($nota<0 || $nota>10){
	$error=True;
}elseif ($nota>=9) {
	$calificacion="Sobresaliente";
}elseif($nota>=7){
	$calificacion="Notable";
}elseif($nota>=5){
	$calificacion="Aprobado";
}else{
	$calificacion="Suspenso";
}
if($error){
	echo "Error.";
}else{
	echo "<p>Tu nota es $nota, por lo tanto tienes un $calificacion</p>";
}
?>