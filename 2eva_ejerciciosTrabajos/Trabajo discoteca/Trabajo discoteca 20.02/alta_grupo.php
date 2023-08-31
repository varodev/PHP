<?php
require_once('sesion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_discoteca.css">
    <title>Grupos</title>
</head>

<body>
    <section id="contenedor">
        <header>
            <a href="mostrar_grupos.php"><img src="media/img/cabecera.jpg" alt="cabecera"></a>
        </header>
        <?php
        include('menu.html');
        ?>

        <h1>Alta Grupos:</h1>
        <ul class='ul-albumes'>
            <li><a href='alta_grupo.php'>Dar de alta un grupo nuevo</a></li>
        </ul>
        <?php

        if (isset($_POST['alta'])) {
            $nombre = $_POST['nombre'];
            $nacionalidad = $_POST['nacionalidad'];
            $biografia = $_POST['biografia'];
            $nombreArchivo = $_FILES['archivo_fls']['name'];

            $archivo = $_FILES['archivo_fls']['tmp_name'];
            $destino = "media/img/grupos/" . $_FILES['archivo_fls']['name'];
            $tipo = $_FILES['archivo_fls']['type'];
            $size = $_FILES['archivo_fls']['size'];

            if (($tipo == "image/jpeg" && $size <= 409600)) {
                if (move_uploaded_file($archivo, $destino)) {
                    echo "<p>Subido archivo de tipo permitido</p>";
                    require("0.conexion_discoteca.php");
                    $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
                    if ($conexion) {
                        mysqli_query($conexion, "SET NAMES 'UTF8'");

                        if (mysqli_select_db($conexion, $bbdd)) {
                            $cod_grupo_actual = "SELECT MAX(cod_grupo) FROM grupos;";
                            $resultado_codigo = mysqli_query($conexion, $cod_grupo_actual);
                            $fila_codigo = mysqli_fetch_array($resultado_codigo);
                            $codigo_final = $fila_codigo[0] + 1;
                            $consulta = "INSERT INTO grupos (cod_grupo, nombre, nacionalidad, biografia, foto) VALUES ($codigo_final,'$nombre', '$nacionalidad', '$biografia', '$nombreArchivo')";
                            mysqli_query($conexion, $consulta);

                            if (mysqli_errno($conexion) != 0) {
                                echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                                echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                            } else {
                                echo "<p>Registro de Grupo insertado correctamente</p>";
                                echo"<a href='mostrar_grupos.php'>Volver a Mostrar grupos</a>";
                            }
                            mysqli_close($conexion);
                        }
                    }
                } else {
                    echo "<p>Error</p>";
                }
            } else {
                echo "Solo permitimos jpeg hasta 400KB";
            }
        } else {
            echo "<section class='cuerpo-formulario'>
            <div class='prueba'>
            <form id='formulario' class='columna' method='post' action='alta_grupo.php' name='formulario' enctype='multipart/form-data'>
                                    <label>Nombre:</label>
                                    <input type='text' name='nombre' required>
                                    <label>Nacionalidad:</label>
                                    <input type='text' name='nacionalidad' required>
                                    <label>Biografía:</label>
                                    <input type='text' name='biografia' required>
                                    <label for='nombre'>Ficheros:</label>
                                    <input type='file' name='archivo_fls'>

                                    <section class='seccion-btn'>                            
                                    <input type='submit' name='alta' value='Enviar'>
                                    <input type='reset' value='Limpiar'>
									</section>
                                     </form>
                                     </div>
                    </section>
								";
        }
        ?>
    </section>
</body>

</html>