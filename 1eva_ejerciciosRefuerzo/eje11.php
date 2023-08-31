<?php
echo "<h1>Mostrar los divisores de un número introducido desde un formulario en php</h1>";
if(isset($_GET['enviar_btn'])){
    $numero = $_GET['numero'];
    $intento = $_GET['intento'];
    $intento++;
    $array = [];
    
    for ($i=1; $i<=$numero; $i++) { 
        if ($numero%$i==0) {
            $array[] = $i;
        }
    }
    $array = serialize($array);
    header("Location:eje11.php?numero=$numero&intento=$intento&array=$array"); 
} 
 if (isset($_GET['intento'])){
    $intento = $_GET['intento'];
 }else{
    $intento = 0;
 }

if($intento ==0){
    echo "<form name='formulario' method='get' action='eje11.php'>
		<input type='number' name='numero'>

        <input type='hidden' name='intento' value='$intento'>

        <input type='submit' name='enviar_btn' value='Enviar'>
		<input type='reset' value='Borrar'>
	</form>";
}else{
if(isset($_GET['array'])){
    $array = $_GET['array'];
    $numero = $_GET['numero'];
    $array = unserialize($array);
    foreach ($array as $elemento){
        echo "<p>los divisiones de $numero son $elemento</p>";
    }
    echo "<a href='eje11.php'>Intentar otra vez</a>";
}
}

?>