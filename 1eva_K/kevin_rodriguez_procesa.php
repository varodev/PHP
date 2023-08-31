<?php
$numero = rand(1,100);

if (isset($_GET['enviar'])) {

    if (isset($_GET['numero'])) {
        // Si esta puesto el numero, recogo su valor y el de intento
        $numero_usuario = $_GET['numero'];
        $intento = $_GET['intento'];
        $intento--;
    } else {
        // Por se acaso se quite el required del input
        header("Location:kevin_rodriguez_adivina.php?error=1");
    }

    if ($intento == 0 && $numero_usuario != $numero) {
        // Reenvio si el numero de intentos es mayor a 5 y no acerto el numero
        header("Location:kevin_rodriguez_adivina.php?intento=$intento&resultado=perdio&numero=$numero");
    } else {
        if ($numero_usuario < $numero) {
            // Compruebo que el numero introducido sea menor al numero oculto
            // Y lo envio como parametro
            header("Location:kevin_rodriguez_adivina.php?intento=$intento&resultado=mayor&numero=$numero");
        } else if ($numero_usuario > $numero) {
            // Compruebo que el numero introducido sea mayor al numero oculto
            // Y lo envio como parametro
            header("Location:kevin_rodriguez_adivina.php?intento=$intento&resultado=menor&numero=$numero");
        } else {
            // El valor de gano no sirve puesto que esta como else en el otro archivo
            // sino que esta puesto para recordar que manda
            header("Location:kevin_rodriguez_adivina.php?intento=$intento&resultado=gano&numero=$numero");
        }
    }
} else {
    // Por si se trata de entrar al archivo desde otro lugar que no sea el boton
    header("Location:kevin_rodriguez_adivina.php?error=1");
}
