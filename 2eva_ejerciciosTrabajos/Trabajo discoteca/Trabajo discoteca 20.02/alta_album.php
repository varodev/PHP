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
    <title>Album</title>
</head>

<body>
    <section id="contenedor">
        <header>
            <a href="mostrar_grupos.php"><img src="media/img/cabecera.jpg" alt="cabecera"></a>
        </header>
        <?php
        include('menu.html');
        ?>

        <h1>Alta Album:</h1>
        <ul class='ul-albumes'>
            <li><a href='alta_album.php'>Dar de alta un grupo nuevo</a></li>
        </ul>
        <?php
        require("0.conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
        if (isset($_POST['alta'])) { //recojer el codigo 
            $cod_grupo = $_POST['cod_grupo'];
            $titulo = $_POST['titulo'];
            $fecha = $_POST['fecha'];
            $nombreArchivo = $_FILES['archivo_fls']['name'];

            $archivo = $_FILES['archivo_fls']['tmp_name'];
            $destino = "media/img/albumes/" . $_FILES['archivo_fls']['name']; //se ponia la carpeta en el escritorio
            $tipo = $_FILES['archivo_fls']['type'];
            $size = $_FILES['archivo_fls']['size'];

            if (($tipo == "image/jpeg" && $size <= 409600)) {
                if (move_uploaded_file($archivo, $destino)) {
                    echo "<p>Subido archivo de tipo permitido</p>";

                    if ($conexion) {
                        mysqli_query($conexion, "SET NAMES 'UTF8'");
                        if (mysqli_select_db($conexion, $bbdd)) {
                            $cod_album_actual = "SELECT MAX(cod_album) FROM albumes;";
                            $resultado_codigo = mysqli_query($conexion, $cod_album_actual);
                            $fila_codigo = mysqli_fetch_array($resultado_codigo);
                            $codigo_final = $fila_codigo[0] + 1;
                            $consulta = "INSERT INTO albumes (cod_album, titulo, fecha, cod_grupo, portada) VALUES ($codigo_final,'$titulo', '$fecha', '$cod_grupo', '$nombreArchivo')";
                            mysqli_query($conexion, $consulta);

                            if (mysqli_errno($conexion) != 0) {
                                echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                                echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                            } else {
                                echo "<p>Registro de album insertado correctamente</p>";
                                echo "<a href='mostrar_albumes.php'>Volver a Mostrar albumes</a>";
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
            if ($conexion) {
                mysqli_query($conexion, "SET NAMES 'UTF8'");
                if (mysqli_select_db($conexion, $bbdd)) {

                    $consultar_grupos = "SELECT cod_grupo, nombre FROM grupos ORDER BY nombre;";
                    $resultado  = mysqli_query($conexion, $consultar_grupos);
                    if (mysqli_errno($conexion) != 0) {
                        echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                        echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                    } else {
                        echo "<section class='cuerpo-formulario'>
                        <div class='prueba'>
                        <form id='formulario' class='columna' method='post' action='alta_album.php' name='formulario' enctype='multipart/form-data'>
                                                <label>Titulo:</label>
                                                <input type='text' name='titulo' required>
                                                <label>Fecha:</label>
                                                <input type='text' name='fecha' required>
                                                <label>Grupos:</label>
                                                <select name='cod_grupo'>
                                                <option>Elige un grupo</option>";
                            while ($fila = mysqli_fetch_array($resultado)) {
                            echo "<option value='$fila[cod_grupo]'>$fila[nombre]</option>";
                            }
                                                echo "</select>
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
                    mysqli_close($conexion);
                }
            }
        }
        ?>
    </section>
</body>

</html>