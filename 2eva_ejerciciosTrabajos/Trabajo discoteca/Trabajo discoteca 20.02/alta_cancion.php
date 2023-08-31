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
    <title>Canción</title>
</head>

<body>
    <section id="contenedor">
        <header>
            <a href="mostrar_grupos.php"><img src="media/img/cabecera.jpg" alt="cabecera"></a>
        </header>
        <?php
        include('menu.html');
        ?>

        <h1>Alta Canción:</h1>
        <ul class='ul-albumes'>
        <li><a href='alta_cancion.php'>Dar de alta una cancion nueva</a></li>
        </ul>
        <?php
        require("0.conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
        if (isset($_POST['alta'])) {
            $titulo = $_POST['titulo'];
            $duracion = $_POST['duracion'];
            $num_pista = $_POST['num_pista'];
            $cod_album = $_POST['cod_album'];

            if ($conexion) {
                mysqli_query($conexion, "SET NAMES 'UTF8'");

                if (mysqli_select_db($conexion, $bbdd)) {
                    $cod_cancion_actual = "SELECT MAX(cod_cancion) FROM canciones;";
                    $resultado_codigo = mysqli_query($conexion, $cod_cancion_actual);
                    $fila_codigo = mysqli_fetch_array($resultado_codigo);
                    $codigo_final = $fila_codigo[0] + 1;
                    $consulta = "INSERT INTO canciones (cod_cancion, titulo, duracion, num_pista, cod_album) VALUES ($codigo_final,'$titulo', '$duracion', '$num_pista', '$cod_album');";
                    mysqli_query($conexion, $consulta);

                    if (mysqli_errno($conexion) != 0) {
                        echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                        echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                    } else {
                        echo "<p>Registro de canciones insertado correctamente</p>";
                        echo"<a href='mostrar_canciones.php'>Volver a Mostrar canciones</a>";
                    }
                    mysqli_close($conexion);
                }
            }
        } else {
            if ($conexion) {
                mysqli_query($conexion, "SET NAMES 'UTF8'");
                if (mysqli_select_db($conexion, $bbdd)) {

                    $consultar_grupos = "SELECT cod_album, titulo FROM albumes ORDER BY titulo;";
                    $resultado  = mysqli_query($conexion, $consultar_grupos);
                    if (mysqli_errno($conexion) != 0) {
                        echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                        echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                    } else {
                        echo "<section class='cuerpo-formulario'>
                        <div class='prueba'>
                        <form id='formulario' class='columna' method='post' action='alta_cancion.php' name='formulario' enctype='multipart/form-data'>
                                                <label>Titulo:</label>
                                                <input type='text' name='titulo' required>
                                                <label>Duración:</label>
                                                <input type='text' name='duracion' required>
                                                <label>Numero de Pista:</label>
                                                <input type='number' name='num_pista' required>
                                                <label>Album:</label>
                                                <select name='cod_album'>
                                                <option>Elige un album</option>";
                        while ($fila = mysqli_fetch_array($resultado)) {
                            echo "<option value='$fila[cod_album]'>$fila[titulo]</option>";
                        }
                                                echo "</select>
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