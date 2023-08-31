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

        <h1>Editar Grupos:</h1>
        <ul class='ul-albumes'>
            <li><a href='#'>Dar de alta un grupo nuevo</a></li>
        </ul>
        <?php
        require("0.conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

        if ($conexion) {
            mysqli_query($conexion, "SET NAMES 'UTF8'");

            if (mysqli_select_db($conexion, $bbdd)) {

                $cod_album = $_GET['cod_album'];
                $consulta = "SELECT * FROM albumes WHERE cod_album=$cod_album;";
                $resultado = mysqli_query($conexion, $consulta);

                if (mysqli_errno($conexion) != 0) {
                    echo "<p>Nº Error: " . mysqli_errno($conexion) . "</p>";
                    echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                }
            } else {
                if (isset($_POST['editar'])) {
                    $cod_grupo = $_POST['cod_grupo'];
                    $titulo = $_POST['titulo'];
                    $fecha = $_POST['fecha'];
                    $cod_album = $_POST['cod_album'];
                    $nombreArchivo = $_FILES['archivo_fls']['name'];

                    foreach ($_FILES['archivo_fls'] as $propiedad => $valor) {
                        echo "<p>Propiedad: " . $propiedad . " - Valor: " . $valor . "</p>";
                    }

                    $archivo = $_FILES['archivo_fls']['tmp_name'];
                    $destino = "media/img/grupos/" . $_FILES['archivo_fls']['name']; //se ponia la carpeta en el escritorio
                    $tipo = $_FILES['archivo_fls']['type'];
                    $size = $_FILES['archivo_fls']['size'];

                    //Solo permitimos jpg 400KB
                    if (($tipo == "image/jpeg" && $size <= 409600)) {
                        // cumple con ambas condiciones. es un archivo permitido
                        if (move_uploaded_file($archivo, $destino)) {
                            echo "<p>Subido archivo de tipo permitido</p>";

                            if ($conexion) {
                                mysqli_query($conexion, "SET NAMES 'UTF8'");

                                if (mysqli_select_db($conexion, $bbdd)) {

                                    $consulta = "UPDATE albumes SET titulo='$titulo', fecha='$fecha', 
                        portada='$nombreArchivo' WHERE cod_album=$cod_album;";
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
                                $cod_album = $_GET['cod_album'];
                                echo "
            <form id='formulario' class='columna' method='post' action='editar_album.php' name='formulario' enctype='multipart/form-data'>
            <input type='hidden' name='cod_grupo' value='$cod_album' required>
            <label>Titulo:</label>
            <input type='text' name='titulo' value='$titulo' required>
            <label>Fecha:</label>
            <input type='text' name='fecha' value='$fecha' required>
            <select name='cod_grupo'>
            <option>Elige un grupo</option>";
                                while ($fila = mysqli_fetch_array($resultado)) {
                                    echo "<option value='$fila[cod_grupo]'>$fila[nombre]</option>";
                                }
                                echo "</select>
            <label for='nombre'>Ficheros:</label>
            <input type='file' name='archivo_fls' >

            <section class='seccion_canciones'>                            
            <input type='submit' name='alta' value='Enviar'>
            <input type='reset' value='Limpiar'>
            </section>
             </form>
            ";
                            }
                            mysqli_close($conexion);
                        }
                    }
                }
            }
        }

        ?>
    </section>
</body>

</html>