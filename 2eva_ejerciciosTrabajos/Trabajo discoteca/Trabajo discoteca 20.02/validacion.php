<?php
require("0.conexion_discoteca.php");

if (isset($_POST['enviar'])) {
    $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
    if ($conexion) {
        mysqli_query($conexion, "SET NAMES 'UTF8'");
        if (mysqli_select_db($conexion, $bbdd)) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $consulta = "SELECT user, AES_DECRYPT(pass, 'almandrullos') AS pass FROM usuarios WHERE user='$user' AND pass=AES_ENCRYPT('$pass', 'almandrullos');";
            $resultado = mysqli_query($conexion, $consulta);
            $fila = mysqli_fetch_array($resultado);
            if (mysqli_errno($conexion) != 0) {
                echo "<p>Nº Error: " . mysqli_errno($conexion) . "</p>";
                echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
            } else {
                if (mysqli_num_rows($resultado) > 0) {
                    session_start();
                    $_SESSION['logueado'] = true; 
                    $_SESSION['usuario'] = $user;
                    $_SESSION['hora'] = time();
                    header("location:mostrar_grupos.php");
                } else {
                    header("location:index_sesiones.php?mensaje=error&usuario=$fila[user]&contraseña=$fila[pass]");
                }
            }
        } else {
            header("location:index_sesiones.php");
        }
    }
}
