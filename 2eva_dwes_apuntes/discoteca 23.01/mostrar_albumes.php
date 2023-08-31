<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_discoteca.css">
    <title>Álbumes</title>
</head>
<body>
    <section id="contenedor">
        <header>
            <a href="mostrar_grupos.php"><img src="media/img/cabecera.jpg" alt="cabecera"></a>
        </header>
        <?php
        include('menu.html');
        ?>

        <?php
        require("conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

        if ($conexion) {
            mysqli_query($conexion, "SET NAMES 'UTF8'");

            if (mysqli_select_db($conexion, $bbdd)) {

                if (isset($_GET['cod_grupo'])) {
                    // para entrar desde grupos
                    $cod_grupo = $_GET['cod_grupo'];
                    $nombre = $_GET['nombre'];
                    $consulta = "SELECT * FROM albumes WHERE cod_grupo=$cod_grupo ORDER BY fecha;";
                    echo "<h1>Álbumes de $nombre:</h1>";

                } else {
                    // para entrar por el menu
                    echo "<h1>Todos los álbumes:</h1>";

                    $consulta = "SELECT * FROM albumes ORDER BY ";
                    $consulta_generos = "SELECT * FROM generos ORDER BY genero";

                    if (isset($_GET['orden'])) {
                        $orden = $_GET['orden'];
                    } else {
                        $orden = "titulo";
                    }
                    $consulta .= $orden;

                    echo "<ul>
                    <li><a href='mostrar_albumes.php?orden=titulo'>A-Z</a></li>
                    <li><a href='mostrar_albumes.php?orden=titulo DESC'>Z-A</a></li>
                    <li><a href='mostrar_albumes.php?orden=fecha'>Año (asc.)</a></li>
                    <li><a href='mostrar_albumes.php?orden=fecha DESC'>Año (des.)</a></li>
                    </ul>";
                $resultado_generos = mysqli_query($conexion, $consulta_generos);
                                // CONSULTA PARA DESPLEGABLE DE GÉNEROS ////////////////////////////////////////////////////
                                echo "<select name='genero'>";
                                while ($fila_generos = mysqli_fetch_array($resultado_generos)) {
                                    echo "<option value='$fila_generos[cod_genero]'>$fila_generos[genero]</option>";
                                }
                                
                                echo "<input type='submit' name='enviar_btn' value='Enviar'>
                                </select></br>";

                                
                }
            }

            $resultado = mysqli_query($conexion, $consulta);
            

            if (mysqli_errno($conexion) != 0) {
                echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
            } else {

                ////////////////////////////////////////////////////////////////////////////////////////////

                // CONSULTA PARA MOSTRAR ALBUMES ///////////////////////////////////////////////////////////

                while ($fila = mysqli_fetch_array($resultado)) {
                    $cod_album = $fila['cod_album'];
                    $cod_grupo = $fila['cod_grupo'];
                    $titulo = $fila['titulo'];
                    $imagen = $fila['portada'];
                    $fecha = $fila['fecha'];

                    if(isset($_GET['cod_grupo'])){
                        $enlace = "mostrar_canciones.php?cod_album=$cod_album&nombre=$nombre&titulo=$titulo&cod_grupo=$cod_grupo";
                    } else {
                        $enlace = "mostrar_canciones.php?cod_album=$cod_album&titulo=$titulo&cod_grupo=$cod_grupo";
                    }

                    echo "<section class='seccion_grupo'>
                            <a href=$enlace>
                                <div>
                                    <img class='redondeado-total' src='media/img/albumes/$imagen'>
                                    <p>$titulo ($fecha)</p>
                                </div>
                            </a>
                        </section>";
                }
                //////////////////////////////////////////////////////////////////////////////////////////////
            }
            mysqli_close($conexion);
        }
        
        ?>
    </section>
</body>
</html>