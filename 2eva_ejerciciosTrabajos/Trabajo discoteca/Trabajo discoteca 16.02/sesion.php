<?php
session_start();
//comprobar el estado de logueado
if(!$_SESSION['logueado']){
    //Si entro por aqui, significa que la session NO estaría vigente
    session_destroy();
    header("location:index_sesiones.php");
    exit();//arregla el problema de caducidad pinchando
}
?>