<?php
echo "<meta charset='UTF-8'>";
echo "<h1>Tratamiento de cadenas</h1>";

$texto="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
echo"<p>$texto</p>";
$longitud=strlen($texto);//cuenta todo los caracteres
echo"<p>$longitud</p>";

//cojer una subcadena
echo "<p>".substr($texto,0,1)."</p>";//empiezo en el cero(A), y cojo 1 (la A). 
echo "<p>".substr($texto,0,10)."</p>";//empiezo en el cero(A), y cojo 10 (la A a la J inclusive).
echo "<p>".substr($texto,1,10)."</p>";//empiezo en el uno(B), y cojo 10 (la A a la J inclusive).
echo "<p>".substr($texto,1)."</p>";//empiezo en el uno(B), y cojo el resto.
echo "<p>".substr($texto,-1)."</p>";//Cojo la última
?>