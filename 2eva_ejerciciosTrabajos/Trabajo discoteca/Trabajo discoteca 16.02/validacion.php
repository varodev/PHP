<?php
require("0.conexion_usuarios.php");
    $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
    if ($conexion) {
        mysqli_query($conexion, "SET NAMES 'UTF8'");

        if (mysqli_select_db($conexion, $bbdd)) {




//vamos a "validar" por código
if(isset($_POST['enviar'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $consulta="SELECT user, AES_DECRYPT(pass, 'almandrullos') FROM usuarios;";
    mysqli_query($conexion, $consulta);

    if (mysqli_select_db($conexion, $bbdd)) {

        if($user=="alvaro@gmail.com" && $pass == "1234"){
            //Simulamos identificacion contra BBDD. 
            //Existe el usuario, por lo tanto ABRIMOS UNA SESION
         session_start();
            //Vamos a crear 3 variables de sesión:
            $_SESSION['logueado']=true;//Saber si la sesión sigue vigente.
            $_SESSION['usuario']=$usuario;
            $_SESSION['hora']=time();
            header("location:mostrar_grupos.php");

        }else{
        header("location:index_sesiones.php?mensaje=error");
        }
}else{
        header("location:index_sesiones.php");
    }

?>