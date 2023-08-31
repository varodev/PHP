<!DOCTYPE html>
<html>

<head>
    <title>Subir archivos</title>
</head>

<body>
    <form method="post" action="subir_archivos.php" name="formulario" enctype="multipart/form-data">

        <label for='nombre'>Ficheros:</label>
        <input type="file" name="archivo_fls">

        <input type="submit" name="enviar_btn" value="Subir archivo">

    </form>
    <?php
    if (isset($_POST['enviar_btn'])) {
        $archivo = $_FILES['archivo_fls']['tmp_name'];
        $destino = "media/img/" . $_FILES['archivo_fls']['name'];//se ponia la carpeta en el escritorio
        $tipo = $_FILES['archivo_fls']['type'];
        $size = $_FILES['archivo_fls']['size'];
        //se saca las 5 propiedades del archivo: nombre, tipo, nombre temporal, error y tamaño PRODUCCION SE COMENTA
        foreach ($_FILES['archivo_fls'] as $propiedad => $valor) {
            echo "<p>Propiedad: " . $propiedad . " - Valor: " . $valor . "</p>";
        }

        //Solo permitimos txt hasta 300KB, jpg 400KB y pdf/docx 2MB
        if (($tipo == "image/jpeg" && $size <= 409600) 
        || ((($tipo == "application/pdf")||($tipo == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")) && $size <= 2097152) 
        || ($tipo == "text/plain" && $size <= 307200)) {
            // cumple con ambas condiciones. es un archivo permitido
            if (move_uploaded_file($archivo, $destino)) {
                echo "<p>Subido archivo de tipo permitido</p>";
            } else {
                echo "<p>Error</p>";
            }
        } else {
            echo "Solo permitimos txt hasta 300KB, jpg 400KB y pdf/docx 2MB";
        }
    }
    ?>

</body>
<html>