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
                     // 1. Si se entra haciendo clic en un grupo
                    $cod_grupo = $_GET['cod_grupo'];
                    $nombre = $_GET['nombre'];
                    $consulta = "SELECT * FROM albumes WHERE cod_grupo=$cod_grupo ORDER BY fecha;";
                    echo "<h1>Álbumes de $nombre:</h1>";
                    
                    
                } else if (isset($_GET['genero'])) {
                    // 2. Si se entra desde el desplegable
                    $genero = $_GET['genero'];
                    $consulta = "SELECT * FROM albumes, albumes_generos WHERE albumes.cod_album=albumes_generos.cod_album AND cod_genero=$genero ORDER BY titulo";
                    echo "<h1>Búsqueda por género</h1>";
                    echo "<a href='mostrar_albumes.php'>Volver a mostrar albumes</a>";

                } else if (isset($_GET['buscador'])) {
                    // 3. Si se entra desde la caja de texto
                    $busqueda = $_GET['buscador'];
                    $consulta = "SELECT * FROM albumes WHERE titulo LIKE '%$busqueda%' ORDER BY titulo;";
                    echo "<h1>Resultados con '$busqueda':</h1>";
                    echo "<a href='mostrar_albumes.php'>Volver a mostrar albumes</a>";
                   
                }else if(isset($_GET['buscador2'])){
                     // 4. Si entra desde la caja de texto 2 (albumes y grupos) 
                    $busqueda = $_GET['buscador2'];
                    $categoria = $_GET['categoria'];
                    if($categoria==1){
                        $consulta = "SELECT * FROM grupos WHERE nombre LIKE '%$busqueda%' ORDER BY nombre;";
                    }else {
                        $consulta = "SELECT * FROM albumes WHERE titulo LIKE '%$busqueda%' ORDER BY titulo;";
                    }
                    echo "<h1>Resultados con '$busqueda':</h1>";
                    echo "<a href='mostrar_albumes.php'>Volver a mostrar albumes</a>";
                }else {
                      // 5. Si se entra desde el enlace del nav
                    echo "<h1>Todos los álbumes:</h1>";

                    $consulta = "SELECT * FROM albumes ORDER BY ";
                    $consulta_generos = "SELECT * FROM generos ORDER BY genero";

                    // La query $consulta se completa añadiendo el ORDER BY traido desde la URL
                    if (isset($_GET['orden'])) {
                        $orden = $_GET['orden'];
                    } else {
                        $orden = "titulo";
                    }
                    $consulta .= $orden;

                    // Sección de ORDENACION
                    echo "<ul>
                    <li><a href='mostrar_albumes.php?orden=titulo'>A-Z</a></li>
                    <li><a href='mostrar_albumes.php?orden=titulo DESC'>Z-A</a></liclass=>
                    <li><a href='mostrar_albumes.php?orden=fecha'>Año (asc.)</a></li>
                    <li><a href='mostrar_albumes.php?orden=fecha DESC'>Año (des.)</a></li>
                    </ul><br>";

                    $resultado_generos = mysqli_query($conexion, $consulta_generos);
                    ///////////////////DESPLEGABLE DE GÉNEROS //////////////////////////
                    echo "<form action='mostrar_albumes.php' method='GET'>
                    <label>Elige género de albumes en el desplegable</label><br>
                    <select name='genero'>";
                    while ($fila_generos = mysqli_fetch_array($resultado_generos)) {
                        echo "<option value='$fila_generos[cod_genero]'>$fila_generos[genero]</option>";
                    }
                    echo "<input type='submit' name='enviar_btn' value='Enviar'>
                    </select></form></br>";

                    ////////////////////////busqueda manual de albumes//////////////////////////////////
                    echo "<form action='mostrar_albumes.php' method='GET'>
                    <label>Introduce en el buscador un álbum a buscar</label><br>
                    <input type='text' name='buscador' placeholder='Álbumes'>
                    <input type='submit' value='Buscar'>
                    </form></br>";
                
                    ////////////////////////busqueda manual grupos/albumes///////////////////////////////
                    echo "<form action='mostrar_albumes.php' method='GET'>
                    <label>Introduce en el buscador pudiendo elegir entre grupo o albumes con el radiobutton</label><br>
                        <input type='text' name='buscador2' autofocus required>
                        <label>Grupos</label>
                        <input type='radio' name='categoria' value='1'>
                        <label>Albumes</label>
                        <input type='radio' name='categoria' value='2'>
                        <input type='submit' name='enviar_btn' value='Enviar'>
                        </form><br>";
                }
            }

            $resultado = mysqli_query($conexion, $consulta);
            $coincidencias = mysqli_num_rows($resultado);
            echo "<p>Se han encontrado $coincidencias coincidencias.</p>";

            if (mysqli_errno($conexion) != 0) {
                echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
            } else {

                ////////// CONSULTA PARA MOSTRAR ALBUMES ///////////////////////////////////////////////////////////

                while ($fila = mysqli_fetch_array($resultado)) {
                    $cod_album = $fila['cod_album'];
                    $cod_grupo = $fila['cod_grupo'];
                    $titulo = $fila['titulo'];
                    $imagen = $fila['portada'];
                    $fecha = $fila['fecha'];

                    if (isset($_GET['cod_grupo'])) {
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