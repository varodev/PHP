<!DOCTYPE html>
<html lang="es">

<head>
    <title>Contactos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos_agenda.css">
</head>

<body>
    <section id="contenedor">
        <header>
            <a href="mostrar_contactos.php" title="Ir a contactos"><img src="media//img/cabecera.jpg"></a>
        </header>

        <main>
            <?php
            if (isset($_GET['codigo'])) {///////////////////////////////////////////////
                $codigo = $_GET['codigo'];

                require("conexion_agenda.php");
                //Paso 1. Conexión
                if ($conexion = mysqli_connect($servidor, $usuario, $password, $bbdd)) {
                    mysqli_query($conexion, "SET NAMES 'UTF8'");
                    //Paso 2. Seleccionamos la BBDD.
                    if (mysqli_select_db($conexion, $bbdd)) {
                        //Paso 3. Definimos la consulta que queramos ejecutar.
                        $consulta = "SELECT * FROM contactos WHERE cod_contacto=$codigo;";
                        //Paso 4. Ejecutamos la consulta.
                        $resultado = mysqli_query($conexion, $consulta);
                        //Paso 5. Cuidado con omitir los errores. Comprobamos si OK.

                        if (mysqli_errno($conexion) != 0) {
                            //Distinto de todo OK, hay algun error
                            echo "<p>Nº error: " . mysqli_errno($conexion) . "</p>";
                            echo "<p>Mensaje: " . mysqli_error($conexion) . "</p>";
                        } else {
                            //OK
                            // Paso 6. Mostramos datos por pantalla (si es una query de tipo SELECT)
                            //Convertir cada parte de la fila de la consulta en un Array

                            if (isset($_GET['nombre']) && isset($_GET['apellidos'])) { //si por la url sale nombre y apellidos (porque vienes de monstrar_contactos)
                                $nombre = $_GET['nombre'];
                                $apellido = $_GET['apellidos'];
                                echo "<h1>Nombre:  $nombre  $apellido</h1>";
                                while ($fila = mysqli_fetch_array($resultado)) {//Si vienes de mostrar contactos
                                    echo "<p><span class='negrita'>Nombre: </span>$fila[nombre]</p>";
                                    echo "<p><span class='negrita'>Apellidos:</span> $fila[apellidos]</p>";
                                    echo "<p><span class='negrita'>Telefono: </span>$fila[telefono]</p>";
                                    echo "<p><span class='negrita'>Mail: </span>$fila[mail]</p>";
                                    echo "<p><span class='negrita'>Sueldo: </span>$fila[sueldo]</p>";
                                    echo "<p><span class='negrita'>Observaciones: </span>$fila[observaciones]</p>";
                                }
                                echo "<p><a href='mostrar_contactos.php'>Volver a mostrar contactos</a></p>";
                            } else { //si vienes de desplegable
                                while ($fila = mysqli_fetch_array($resultado)) {
                                    echo "<h1>Nombre: $fila[nombre] $fila[apellidos]</h1>";
                                    echo "<p><span class='negrita'>Nombre: </span>$fila[nombre]</p>";
                                    echo "<p><span class='negrita'>Apellidos:</span> $fila[apellidos]</p>";
                                    echo "<p><span class='negrita'>Telefono: </span>$fila[telefono]</p>";
                                    echo "<p><span class='negrita'>Mail: </span>$fila[mail]</p>";
                                    echo "<p><span class='negrita'>Sueldo: </span>$fila[sueldo]</p>";
                                    echo "<p><span class='negrita'>Observaciones: </span>$fila[observaciones]</p>";
                                }
                                echo "<p><a href='mostrar_desplegable.php'>Volver a mostrar desplegable</a></p>";
                            }
                        }
                    }
                    //Paso 7. Cerramos la conexion 
                    mysqli_close($conexion);
                }
            }

            if (isset($_GET['nombre']) && isset($_GET['apellidos'])) {////////////////////
                $nombre = $_GET['nombre'];
                $apellidos = $_GET['apellidos'];

                require("conexion_agenda.php");
                //Paso 1. Conexión
                if ($conexion = mysqli_connect($servidor, $usuario, $password, $bbdd)) {
                    mysqli_query($conexion, "SET NAMES 'UTF8'");
                    //Paso 2. Seleccionamos la BBDD.
                    if (mysqli_select_db($conexion, $bbdd)) {
                        //Paso 3. Definimos la consulta que queramos ejecutar.
                        $consulta = "SELECT * FROM contactos WHERE nombre='$nombre' AND apellidos='$apellidos';";
                        //Paso 4. Ejecutamos la consulta.
                        $resultado = mysqli_query($conexion, $consulta);
                        //Paso 5. Cuidado con omitir los errores. Comprobamos si OK.

                        if (mysqli_errno($conexion) != 0) {
                            //Distinto de todo OK, hay algun error
                            echo "<p>Nº error: " . mysqli_errno($conexion) . "</p>";
                            echo "<p>Mensaje: " . mysqli_error($conexion) . "</p>";
                        } else {
                            //OK
                            // Paso 6. Mostramos datos por pantalla (si es una query de tipo SELECT)
                            //Convertir cada parte de la fila de la consulta en un Array

                            if (isset($_GET['nombre']) && isset($_GET['apellidos'])) { //si por la url sale nombre y apellidos (porque vienes de monstrar_contactos)
                                $nombre = $_GET['nombre'];
                                $apellido = $_GET['apellidos'];
                                echo "<h1>Nombre:  $nombre  $apellido</h1>";
                                while ($fila = mysqli_fetch_array($resultado)) {//si vienes de buscador
                                    echo "<p><span class='negrita'>Nombre: </span>$fila[nombre]</p>";
                                    echo "<p><span class='negrita'>Apellidos:</span> $fila[apellidos]</p>";
                                    echo "<p><span class='negrita'>Telefono: </span>$fila[telefono]</p>";
                                    echo "<p><span class='negrita'>Mail: </span>$fila[mail]</p>";
                                    echo "<p><span class='negrita'>Sueldo: </span>$fila[sueldo]</p>";
                                    echo "<p><span class='negrita'>Observaciones: </span>$fila[observaciones]</p>";
                                }
                                echo "<p><a href='mostrar_buscador.php'>Volver a mostrar buscador</a></p>";
                            }
                        }
                    }
                    //Paso 7. Cerramos la conexion 
                    mysqli_close($conexion);
                }
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