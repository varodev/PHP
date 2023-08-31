<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteca</title>
</head>

<body>

        <header>
        </header>
             
        <main>
                <h2>Las ultimas novedades sobre peliculas</h2>
                     
                    <?php
                    require("../0.conexion_filmoteca.php");
                    //Paso 1. Conexión
                    $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
                    if ($conexion) {
                        //Entramos por aquí y seguimos el próximo día...
                        mysqli_query($conexion, "SET NAMES 'UTF8'"); // Sirve para declarar la codificacion deseada para los caracteres que se utilizan en la BD

                        // PASO 2. Seleccionamos la BD
                        if (mysqli_select_db($conexion, $bbdd)) {
                            $consulta_canciones =
                                "SELECT * FROM peliculas ORDER BY titulo;";
                            $resultado_canciones = mysqli_query($conexion, $consulta_canciones);
                            if (mysqli_errno($conexion) != 0) {
                                // Quiere decir que hay un problema
                                echo "<p>Nº error: " . mysqli_errno($conexion) . "</p>";
                                echo "<p>Mensaje: " . mysqli_error($conexion) . "</p>";
                            } else {
                                // Para que solo muestre errores se los tipos que haya dentro
                                // Se quita el E_WARNING para que no salgan los warning 
                                error_reporting(E_ERROR | E_PARSE);

                                while ($fila = mysqli_fetch_array($resultado_canciones)) {
                                    if (getimagesize("$fila[foto]")) {
                                        $foto = $fila["foto"];
                                    } else {
                                        $foto = "../media/img/no_disponible.png";
                                    }

                                    echo "
                                            <section>
                                                <img src='$foto' loading='lazy'>
                                                <p class='titulo'>$fila[titulo]</p>
                                            </section>         
                                    ";
                                }
                            }
                        }
                    }
                ?>
              
          
        </main>
  
</body>

</html>

</body>

</html>