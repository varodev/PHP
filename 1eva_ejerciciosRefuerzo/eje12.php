<?php
echo "<h1>Averiguar si un número introducido desde un formulario es primo en php</h1>";

if(isset($_GET['enviar_btn'])){
    $numero = $_GET['numero'];
    $divisor = $_GET['divisor'];
    $intento = $_GET['intento'];
    $intento++;

    for ($i=1; $i<=$numero; $i++){
	    if ($numero%$i==0){
		    $divisor++;
	    }
    }
    header("Location:eje12.php?numero=$numero&divisor=$divisor&intento=$intento"); 
}else{
    $divisor = 0;
}

if (isset($_GET['intento'])){
    $intento = $_GET['intento'];
 }else{
    $intento = 0;
 }

if ($intento == 0) {
echo "<form name='formulario' method='get' action='eje12.php'>
		<input type='number' name='numero'>

        <input type='hidden' name='divisor' value='$divisor'>
        <input type='hidden' name='intento' value='$intento'>

        <input type='submit' name='enviar_btn' value='Enviar'>
		<input type='reset' value='Borrar'>
	</form>";
}else{
    if(isset($_GET['numero'])){
        $numero = $_GET['numero'];
        $divisor = $_GET['divisor'];
        if ($divisor == 2){
            echo "<p>$numero es primo</p>";
            echo "<a href='eje12.php'>Intentar otra vez</a>";
        }else{
            echo "<p>$numero no es primo</p>";
            echo "<a href='eje12.php'>Intentar otra vez</a>";
        }
    }
}    
?>