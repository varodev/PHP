<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ficha de grupos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos_discoteca.css">
</head>

<body>
    <section id="contenedor">
        <header>
            <a href="mostrar_grupos.php" title="Ir a contactos"><img src="media/img/cabecera.jpg"></a>
        </header>

        <main>
            <?php
            if (isset($_GET['codigo'])) {
                $codigo = $_GET['codigo'];
                $nombre = $_GET['nombre'];
                                
                require("conexion_discoteca.php");
                //Paso 1. Conexión
                if ($conexion = mysqli_connect($servidor, $usuario, $password, $bbdd)) {
                    mysqli_query($conexion, "SET NAMES 'UTF8'");
                    //Paso 2. Seleccionamos la BBDD.
                    if (mysqli_select_db($conexion, $bbdd)) {
                        //Paso 3. Definimos la consulta que queramos ejecutar.
                        $consulta = "SELECT * FROM albumes WHERE cod_grupo=$codigo ORDER BY fecha;";
                        //Paso 4. Ejecutamos la consulta.
                        $resultado = mysqli_query($conexion, $consulta);
                        //Paso 5. Cuidado con omitir los errores. Comprobamos si OK.

                        if (mysqli_errno($conexion) != 0) {
                            //Distinto de todo OK, hay algun error
                            echo "<p>Nº error: " . mysqli_errno($conexion) . "</p>";
                            echo "<p>Mensaje: " . mysqli_error($conexion) . "</p>";
                        } else {
                            //OK
                            //Paso 6. Mostramos datos por pantalla (si es una query de tipo SELECT)
                            //Convertir cada parte de la fila de la consulta en un Array

                                echo "<h1>Albumes del grupo:  $nombre  </h1>";
                                while ($fila = mysqli_fetch_array($resultado)) {//fila de albumes
                                echo "<section class = 'seccion_albumes'><img src='media/img/albumes/$fila[portada]'>
                                    <p><span class='negrita'>Titulo: </span>$fila[titulo]</p>
                                    <p><span class='negrita'>Fecha</span> ($fila[fecha])</p>
                                    </section>
                                    ";
                                }
                                echo "<p><a href='mostrar_grupos_albumes.php'>Volver a mostrar grupos albumes</a></p>";
                            }
                        }
                    }
                    //Paso 7. Cerramos la conexion 
                    mysqli_close($conexion);
                
            } else {
                echo "<p>todo mal</p>";
            }

            ?>
        </main>

        <aside>

        </aside>

        <footer>

        </footer>
    </section>
</body>

</html>