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
        <h1>Álbumes:</h1>
        <ul class='ul-albumes'>
                    <li><a href='#'>Dar de alta un album nuevo</a></li>
        </ul>

        <?php
        require("0.conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

        if ($conexion) {
            mysqli_query($conexion, "SET NAMES 'UTF8'");

            if (mysqli_select_db($conexion, $bbdd)) {

                // 1. Si se entra haciendo clic en un grupo
                if (isset($_GET['cod_grupo'])) {
                    $cod_grupo = $_GET['cod_grupo'];
                    $nombre = $_GET['nombre'];
                    $consulta = "SELECT * FROM albumes WHERE cod_grupo=$cod_grupo ORDER BY fecha;";
                    echo "<h1>Álbumes de $nombre:</h1>";
                
                // 2. Si se entra desde el desplegable
                } else if(isset($_GET['cod_genero'])){
                    $cod_genero = $_GET['cod_genero'];
                    $consulta = "SELECT * FROM albumes, albumes_generos WHERE albumes.cod_album=albumes_generos.cod_album AND cod_genero=$cod_genero ORDER BY titulo";
                    echo "<h1>Búsqueda por género</h1>";

                // 3. Si se entra desde la caja de texto
                } else if(isset($_GET['buscador'])){
                    $busqueda = $_GET['buscador'];
                    $consulta = "SELECT * FROM albumes WHERE titulo LIKE '%$busqueda%' ORDER BY titulo;";
                    echo "<h1>Resultados con '$busqueda':</h1>";
                
                // 4. Si entra desde la caja de texto 2 (albumes y grupos)
                } else if(isset($_GET['buscador2'])){
                    $busqueda = $_GET['buscador2'];
                    $categoria = $_GET['categoria'];
                    if($categoria==1){
                        $consulta = "SELECT * FROM grupos WHERE nombre LIKE '%$busqueda%' ORDER BY nombre;";
                    }else {
                        $consulta = "SELECT * FROM albumes WHERE titulo LIKE '%$busqueda%' ORDER BY titulo;";
                    }
                    
                    echo "<h1>Resultados con '$busqueda':</h1>";
                
                // 5. Si se entra desde el enlace del nav
                } else{
                    

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
                    echo "<ul class='ul-albumes'>
                    <li><a href='mostrar_albumes.php?orden=titulo'>||A-Z|</a></li>
                    <li><a href='mostrar_albumes.php?orden=titulo DESC'>|Z-A|</a></li>
                    <li><a href='mostrar_albumes.php?orden=fecha'>|Año (asc.)|</a>|</li>
                    <li><a href='mostrar_albumes.php?orden=fecha DESC'>Año (des.)||</a></li>
                    </ul>";
                    $resultado_generos = mysqli_query($conexion, $consulta_generos);

                    // Desplegable de GENEROS
                    echo "<form action='mostrar_albumes.php' method='get'>
                            <select name='cod_genero'>";
                                while ($fila_generos = mysqli_fetch_array($resultado_generos)) {
                                    echo "<option value='$fila_generos[cod_genero]'>$fila_generos[genero]</option>";
                                }
                    echo "<input type='submit' value='Filtrar'>
                    </select></form></br>";

                    // Barra de busqueda manual de albumes
                    echo "<form action='mostrar_albumes.php' method='get'>
                                <input type='text' name='buscador' placeholder='Álbumes'>
                                <input type='submit' value='Buscar'>
                        </select></form></br>";

                    // Barra de busqueda manual grupos/albumes
                    echo "<form action='mostrar_albumes.php' method='get'>
                                <input type='text' name='buscador2' placeholder='Grupos o álbumes'>
                                <label>Grupos</label>
                                <input type='radio' name='categoria' value='1'>
                                <label>Álbumes</label>
                                <input type='radio' name='categoria' value='2'>
                                <input type='submit' value='Buscar'>
                        </select></form></br>";
                }
            }

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////// RECOLECCION DE DATOS Y MUESTRA DE RESULTADOS /////////////////////////////////////////////////////////////////////////////////
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            $resultado = mysqli_query($conexion, $consulta);
            
            if (mysqli_errno($conexion) != 0) {
                echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
            } else {

                // CONSULTA PARA MOSTRAR ALBUMES ///////////////////////////////////////////////////////////
                
                $coincidencias = mysqli_num_rows($resultado);
				echo "<p>En Listado de albumes hay $coincidencias elementos.</p>";

                

                while ($fila = mysqli_fetch_array($resultado)) {

                    if(isset($_GET['buscador2'])){
                        if($_GET['categoria']==1){
                            $cod_grupo  = $fila['cod_grupo'];
                            $nombre     = $fila['nombre'];
                            $imagen     = $fila['foto'];
                            
                            echo "<section class='seccion_grupo'>
                                <a href='mostrar_albumes.php?cod_grupo=$cod_grupo&nombre=$nombre'>
                                    <section>
                                        <img class='redondeado-parcial' src='media/img/grupos/$imagen'>
                                        <p>$fila[nombre]</p>
                                        <section class='iconos'> 
                                        <a href='#'>
                                        <img src='media/img/editar.png' alt='Editar' title='Editar a $cod_grupo $nombre $imagen'>
                                         </a>
                                    </section>
                                    <section class='iconos'>
                                        <a onclick='borrar($cod_grupo, \"$nombre\",$imagen);'>
                                        <img src='media/img/borrar.png' alt='Borrar' title='Borrar a $cod_album $titulo $imagen $cod_grupo'>
                                        </a>
                                    </section>
                                    </section>
                                </a>
                            </section>";
                        } else {
                            $cod_album = $fila['cod_album'];
                            $cod_grupo = $fila['cod_grupo'];
                            $titulo = $fila['titulo'];
                            $imagen = $fila['portada'];
                            $fecha = $fila['fecha'];
    
                            if (isset($_GET['cod_grupo'])) {
                                $enlace = "mostrar_canciones.php?cod_album=$cod_album&nombre=$nombre&titulo=$titulo&cod_grupo=$cod_grupo";
                            } else {
                                $enlace = "mostrar_canciones.php?cod_album=$cod_album&titulo=$titulo&cod_grupo=$cod_grupo&coincidencias=$coincidencias";
                            }
    
                            echo "<section class='seccion_grupo'>
                                    <a href=$enlace>
                                        <section>
                                            <img class='redondeado-total' src='media/img/albumes/$imagen'>
                                            <p>$titulo ($fecha)</p>
                                            <section class='iconos'> 
                                            <a href='#'>
                                            <img src='media/img/editar.png' alt='Editar' title='Editar a $cod_album $titulo $imagen $cod_grupo'>
                                             </a>
                                        </section>
                                        <section class='iconos'>
                                            <a onclick='borrar($cod_grupo, $cod_album\"$titulo\",$imagen);'>
                                            <img src='media/img/borrar.png' alt='Borrar' title='Borrar a $cod_album $titulo $imagen $cod_grupo'>
                                            </a>
                                        </section>
                                        </section>
                                    </a>
                                </section>";
                        }
                    } else {
                        $cod_album = $fila['cod_album'];
                        $cod_grupo = $fila['cod_grupo'];
                        $titulo = $fila['titulo'];
                        $imagen = $fila['portada'];
                        $fecha = $fila['fecha'];

                        if (isset($_GET['cod_grupo'])) {
                            $enlace = "mostrar_canciones.php?cod_album=$cod_album&nombre=$nombre&titulo=$titulo&cod_grupo=$cod_grupo";
                        } else {
                            $enlace = "mostrar_canciones.php?cod_album=$cod_album&titulo=$titulo&cod_grupo=$cod_grupo&coincidencias=$coincidencias";
                        }

                        echo "<section class='seccion_grupo'>
                                <a href=$enlace>
                                    <section>
                                        <img class='redondeado-total' src='media/img/albumes/$imagen'>
                                        <p>$titulo ($fecha)</p>
                                        <section class='iconos'> 
                                            <a href='#'>
                                            <img src='media/img/editar.png' alt='Editar' title='Editar a $cod_album $titulo $imagen $cod_grupo'>
                                             </a>
                                        </section>
                                        <section class='iconos'>
                                            <a onclick='borrar($cod_grupo, $cod_album\"$titulo\",$imagen);'>
                                            <img src='media/img/borrar.png' alt='Borrar' title='Borrar a $cod_album $titulo $imagen $cod_grupo'>
                                            </a>
                                        </section>
                                    </section>
                                </a>
                            </section>";
                    }
                }
                //////////////////////////////////////////////////////////////////////////////////////////////
            }
            mysqli_close($conexion);
        }
        
        ?>
    </section>
</body>
</html>