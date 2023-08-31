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
    <title>Editar Grupos</title>
</head>

<body>
    <section id="contenedor">
        <header>
            <a href="mostrar_grupos.php"><img src="media/img/cabecera.jpg" alt="cabecera"></a>
        </header>
        <?php
        include('menu.html');
        ?>
        <h1>Editar Cancion:</h1>
        <ul class='ul-albumes'>
            <li><a href='alta_cancion.php'>Dar de alta una canción nuevo</a></li>
        </ul>
        <?php
        require("0.conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

        if ($conexion) {
            mysqli_query($conexion, "SET NAMES 'UTF8'");

            if (mysqli_select_db($conexion, $bbdd)) {
                if (mysqli_errno($conexion) != 0) {
                    echo "<p>Nº Error: " . mysqli_errno($conexion) . "</p>";
                    echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                }else {
                    if (isset($_POST['editar'])) {
                    $cod_album = $_POST['cod_album'];
                    $titulo = $_POST['titulo'];
                    $duracion = $_POST['duracion'];
                    $num_pista = $_POST['num_pista'];
                    $cod_cancion = $_POST['cod_cancion'];
                    
                            if ($conexion) {
                                mysqli_query($conexion, "SET NAMES 'UTF8'");

                                if (mysqli_select_db($conexion, $bbdd)) {

                                    $consulta = "UPDATE canciones SET titulo='$titulo', duracion='$duracion', 
                        num_pista=$num_pista, cod_album=$cod_album WHERE cod_cancion=$cod_cancion;";
                                    mysqli_query($conexion, $consulta);

                                    if (mysqli_errno($conexion) != 0) {
                                        echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                                        echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                                    } else {
                                        echo "<p>Registro de Grupo insertado correctamente</p>";
                                    }
                                    mysqli_close($conexion);
                                }
                            }
                        } else {
                    $cod_cancion = $_GET['cod_cancion'];
                $consulta = "SELECT * FROM canciones WHERE cod_cancion=$cod_cancion;";
                $resultado = mysqli_query($conexion, $consulta);
                    $fila_cancion = mysqli_fetch_array($resultado);
                            $consultar_albumes = "SELECT cod_album, titulo FROM albumes ORDER BY titulo;";
                            $resultado_albumes  = mysqli_query($conexion, $consultar_albumes);
                            if (mysqli_errno($conexion) != 0) {
                                echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                                echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                            } else {
                                $cod_cancion = $fila_cancion['cod_cancion'];
                                $titulo = $fila_cancion['titulo'];
                                $duracion = $fila_cancion['duracion'];
                                $num_pista = $fila_cancion['num_pista'];
                                echo "<section class='cuerpo-formulario'>
                                <div class='prueba'>
            <form id='formulario' class='columna' method='post' action='editar_cancion.php' name='formulario' enctype='multipart/form-data'>
            <input type='hidden' name='cod_cancion' value='$cod_cancion' required>
            <label>Titulo:</label>
            <input type='text' name='titulo' value='$titulo' required>
            <label>Duracion:</label>
            <input type='text' name='duracion' value='$duracion' required>
            <label>Número Pista:</label>
            <input type='number' name='num_pista' value='$num_pista' required>
            <label>Elige un album:</label>
            <select name='cod_album'>
            <option value=''>Elige un album</option>";
                                while ($fila = mysqli_fetch_array($resultado_albumes)) {
                                    echo "<option value='$fila[cod_album]'>$fila[titulo]</option>";
                                }
                                echo "</select>
                       <section class='seccion-btn'>                            
            <input type='submit' name='editar' value='Enviar'>
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
            }
        ?>
    </section>
</body>

</html>