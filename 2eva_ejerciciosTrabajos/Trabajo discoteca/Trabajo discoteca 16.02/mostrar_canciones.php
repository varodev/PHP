<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_discoteca.css">
    <script src="borrarCancion.js" defer></script>

    <title>Canciones</title>
</head>

<body>
    <section id="contenedor-canciones">
        <header>
            <a href="mostrar_grupos.php"><img src="media/img/cabecera.jpg" alt="cabecera"></a>
        </header>
        <?php
        include('menu.html');
        ?>
        <h1>Canciones:</h1>
        <ul class='ul-albumes'>
            <li><a href='alta_cancion.php'>Dar de alta una cancion nueva</a></li>
        </ul>
        <?php
          if(isset($_GET['borrado'])){
            echo"<p>Se ha borrado correctamente</p>";
        }
        require("0.conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

        if ($conexion) {
            mysqli_query($conexion, "SET NAMES 'UTF8'");

            if (mysqli_select_db($conexion, $bbdd)) {
               
                if (isset($_GET['buscador'])) {
                    $busqueda = $_GET['buscador'];
                    $consulta = "SELECT * FROM canciones WHERE titulo LIKE '%$busqueda%' ORDER BY cod_cancion;";
                    echo "<h1>Resultados con '$busqueda':</h1>";
                } else if (isset($_GET['cod_album'])) {
                    $cod_album = $_GET['cod_album'];
                    $consulta = "SELECT * FROM canciones WHERE cod_album=$cod_album ORDER BY cod_cancion;";
                } else {
                    $resultado_por_pagina=100;
                    if (isset($_GET['pagina'])) {//el resto, como existe pág, la usamos para la operacion
                        $pagina = $_GET['pagina'];                      //dentro de la query no hace operaciones
                        $consulta  = "SELECT * FROM canciones ORDER BY titulo LIMIT ".($pagina-1)*$resultado_por_pagina.",$resultado_por_pagina;";                        
                    }else{//pag 1, como no existe pág, ponemos la quiery original
                        $consulta  = "SELECT * FROM canciones ORDER BY titulo LIMIT 1,$resultado_por_pagina;";
                    }
                }

                // Barra de busqueda manual de albumes
                echo "<form action='mostrar_canciones.php' method='get'>
                <input type='text' name='buscador' placeholder='buscar por título'>
                <input type='submit' value='Buscar'>
                </select></form></br>";

                $resultado  = mysqli_query($conexion, $consulta);
                $coincidencias = mysqli_num_rows($resultado);
                echo "<p>En listado de canciones hay $coincidencias elementos.</p>";

                if (mysqli_errno($conexion) != 0) {
                    echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                    echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                } else {
                    echo "<h4>||Iconos||Título||Duración||Num Pista||</h4>";
                    while ($fila = mysqli_fetch_array($resultado)) {
                        $cod_cancion = $fila['cod_cancion'];
                        $titulo = $fila['titulo'];
                        $duracion = $fila['duracion'];
                        $num_pista = $fila['num_pista'];
                        
                        echo "
                        <section class='seccion_canciones'>
                            <section class='iconos'> 
                                <a href='#'>
                                    <img src='media/img/editar.png' alt='Editar' title='Editar a $titulo $duracion $num_pista'>
                                </a>
                            </section>
                            <section class='iconos'>
								<a onclick='borrarCancion($cod_cancion,\"$titulo\");'>
									<img src='media/img/borrar.png' alt='Borrar' title='Borrar a $titulo $duracion $num_pista'>
								</a>
							</section>
                             <p>$titulo $duracion $num_pista</p>
                        </section>";
                    }
                    //Paginacion (con enlace)
                    $consulta  = "SELECT * FROM canciones;";
                }

                    if (isset($_GET['cod_album'])) {
                    echo "<a href='mostrar_albumes.php'>Volver a mostrar albumes</a>";
                    }else{
                    $resultado_por_pagina=100;
                    $resultado  = mysqli_query($conexion, $consulta);
                    $tuplas = mysqli_num_rows($resultado);
                    $total_pag = ceil($tuplas/$resultado_por_pagina);
                    $separador=" | ";

                        for($i=1; $i<=$total_pag;$i++){
                            if($i==$total_pag){
                            $separador = "";
                        }
                    echo "<a href='mostrar_canciones.php?pagina=$i'>$i</a>".$separador;
                }
            }




                mysqli_close($conexion);
            }
        }
        
        ?>
    </section>
</body>

</html>