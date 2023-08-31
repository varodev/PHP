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
            <a href="mostrar_grupos.php" title="Home"><img src="media/img/cabecera.jpg"></a>
        </header>

        <main>
            <h1>Listado de Grupo</h1>

        <?php
            require("conexion_discoteca.php");
            //Paso 1. Conexión
            if ($conexion = mysqli_connect($servidor, $usuario, $password, $bbdd)) {
                mysqli_query($conexion, "SET NAMES 'UTF8'");
                //Paso 2. Seleccionamos la BBDD.
                if (mysqli_select_db($conexion, $bbdd)) {
                    //Paso 3. Definimos la consulta que queramos ejecutar.
                    $consulta = "SELECT * FROM grupos ORDER BY nombre;";
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
                            echo "<section class = 'seccion_grupo'>
                                <a href='mostrar_ficha.php?codigo=$fila[cod_grupo]&nombre=$fila[nombre]'>
                                <div>
                                    <img src='media/img/grupos/$fila[foto]'>
                                    <p> $fila[nombre]</p>
                                </div>    
                                </a>
                                </section>
                                ";
                        }
                    }
                }
                //Paso 7. Cerramos la conexion 
                mysqli_close($conexion);
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