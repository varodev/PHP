<?php
echo "<h1>Averiguar cuántos divisores tiene un número introducido desde un formulario en php</h1>";

if(isset($_GET['enviar_btn'])){
    $numero = $_GET['numero'];
    $divisor = $_GET['divisor'];
    $intento = $_GET['intento'];
    $intento++;
    
    for ($i=1; $i<=$numero; $i++) {
        if ($numero%$i==0) {
            $divisor++;
        }
    }
    header("Location:eje10.php?numero=$numero&divisor=$divisor&intento=$intento"); 
}else{
    $divisor = 0;
}

if (isset($_GET['intento'])){
    $intento = $_GET['intento'];
 }else{
    $intento = 0;
 }

if ($intento == 0) {
    echo "<form name='formulario' method='get' action='eje10.php'>
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
        echo "<p>El número $numero tiene $divisor divisores</p>";
        echo "<a href='eje10.php'>Intentar otra vez</a>";
    }
}    
?>