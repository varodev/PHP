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

        <h1>Grupos:</h1>
        <ul class='ul-albumes'>
            <li><a href='#'>Dar de alta un grupo nuevo</a></li>
        </ul>
        <?php

        if (isset($_POST['editar'])) {
            $cod_grupo = $_POST['cod_grupo'];
            $nombre = $_POST['nombre'];
            $nacionalidad = $_POST['nacionalidad'];
            $biografia = $_POST['biografia'];
            $nombreArchivo = $_FILES['archivo_fls']['name'];
            
           
            foreach ($_FILES['archivo_fls'] as $propiedad => $valor) {
                echo "<p>Propiedad: " . $propiedad . " - Valor: " . $valor . "</p>";
            }

            $archivo = $_FILES['archivo_fls']['tmp_name'];
            $destino = "media/img/grupos/" . $_FILES['archivo_fls']['name'];//se ponia la carpeta en el escritorio
            $tipo = $_FILES['archivo_fls']['type'];
            $size = $_FILES['archivo_fls']['size'];
        
        //Solo permitimos jpg 400KB
        if (($tipo == "image/jpeg" && $size <= 409600)) {
            // cumple con ambas condiciones. es un archivo permitido
            if (move_uploaded_file($archivo, $destino)) {
                echo "<p>Subido archivo de tipo permitido</p>";
                require("0.conexion_discoteca.php");
                $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
                if ($conexion) {
                    mysqli_query($conexion, "SET NAMES 'UTF8'");
        
                    if (mysqli_select_db($conexion, $bbdd)) {
        
                        $consulta = "UPDATE grupos SET nombre='$nombre'
                        , nacionalidad='$nacionalidad', 
                        biografia='$biografia', 
                        foto='$nombreArchivo' WHERE cod_grupo=$cod_grupo;";
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
            $cod_grupo = $_GET['cod_grupo'];
            echo "
            <form id='formulario' class='columna' method='post' action='editar_grupo.php' name='formulario' enctype='multipart/form-data'>
                                    <input type='hidden' name='cod_grupo' value='$cod_grupo' required>
                                    <label>Nombre:</label>
                                    <input type='text' name='nombre' required>
                                    <label>Nacionalidad:</label>
                                    <input type='text' name='nacionalidad' required>
                                    <label>Biografía:</label>
                                    <input type='text' name='biografia' required>
                                    <label for='nombre'>Ficheros:</label>
                                    <input type='file' name='archivo_fls'>

                                     <section class='seccion_canciones'>                            
                                    <input type='submit' name='editar' value='Enviar'>
                                    <input type='reset' value='Limpiar'>
									
                                    </section>
                                     </form>
								";
        }
   
        ?>
    </section>
</body>

</html>