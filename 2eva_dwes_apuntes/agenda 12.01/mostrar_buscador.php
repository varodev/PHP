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
            <a href="mostrar_contactos.php" title="Ir a contactos"><img src="media/img/cabecera.jpg"></a>

        </header>

        <main>
            <h1>Listado de Contacto</h1><!--Formulario desplegable-->
            <form name="formulario" action="mostrar_ficha.php" method="GET" enctype="application/x-www-form-urlencoded">
                <label for='nombre'>Elija el código del empleado:</label>
                <input type='number' name='codigo' autofocus required>
                <input type='submit' name='enviar_btn' value='Enviar'>

                    <?php
                    require("conexion_agenda.php");
                    //Paso 1. Conexión
                    if ($conexion = mysqli_connect($servidor, $usuario, $password, $bbdd)) {
                        mysqli_query($conexion, "SET NAMES 'UTF8'");
                        //Paso 2. Seleccionamos la BBDD.
                        if (mysqli_select_db($conexion, $bbdd)) {
                            //Paso 3. Definimos la consulta que queramos ejecutar.
                            $consulta = "SELECT * FROM contactos ORDER BY cod_contacto, nombre, apellidos;";
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
                                //Convertir cada parte de la fila de la consulta en un Array; while para sacar enlaces de TODOS
                                while ($fila = mysqli_fetch_array($resultado)) {
                                    echo "<p>$fila[cod_contacto] $fila[nombre] $fila[apellidos]</p>";
                                }
                            }
                        }
                        //Paso 7. Cerramos la conexion 
                        mysqli_close($conexion);
                    }
                    ?> 
                    
                </select>
            </form>
        </main>

        <aside>

        </aside>

        <footer>

        </footer>
    </section>
</body>

</html>