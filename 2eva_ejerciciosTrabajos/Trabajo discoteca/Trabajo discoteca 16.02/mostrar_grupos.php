<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_discoteca.css">
    <script src="borrarGrupo.js" defer></script>
    <title>Grupos</title>
</head>
<body>
    <section id="contenedor">
        <header>
            <a href="mostrar_grupos.php"><img src="media/img/cabecera.jpg" alt="cabecera"></a>
        </header>
        <?php
        include('menu.html');
        ?>

        <h1>Grupos:</h1>

        <ul class='ul-albumes'>
            <li><a href='alta_grupo.php'>Dar de alta un grupo nuevo</a></li>
        </ul>
        <?php
        if(isset($_GET['borrado'])){
            echo"<p>Se ha borrado correctamente</p>";
        }
        require("0.conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

        if($conexion) {
            mysqli_query($conexion, "SET NAMES 'UTF8'");

            if(mysqli_select_db($conexion, $bbdd)) {

                $consulta   = "SELECT * FROM grupos ORDER BY nombre;";
                $resultado  = mysqli_query($conexion, $consulta);
                $coincidencias = mysqli_num_rows($resultado);
				echo "<p>En listado de grupos hay $coincidencias elementos.</p>";

                if(mysqli_errno($conexion)!=0) {
                    echo "<p>Error nº ".mysqli_errno($conexion)."</p>";
                    echo "<p>Descripción: ".mysqli_error($conexion)."</p>";
                } else {

                    while($fila = mysqli_fetch_array($resultado)) {
                        $cod_grupo  = $fila['cod_grupo'];
                        $nombre     = $fila['nombre'];
                        $imagen     = $fila['foto'];

                        echo "<section class='seccion_grupo'>
                            <a href='mostrar_albumes.php?cod_grupo=$cod_grupo&nombre=$nombre'>
                                <section>
                                    <img class='redondeado-parcial' src='media/img/grupos/$imagen'/>
                                    <p>$nombre</p>
                                <section class='iconos'> 
                                    <a href='editar_grupo.php?cod_grupo=$cod_grupo'>
                                    <img src='media/img/editar.png' alt='Editar' title='Editar a $cod_grupo $nombre $imagen'>
                                     </a>
                                </section>
                                <section class='iconos'>
								    <a onclick='borrarGrupo($cod_grupo, \"$nombre\");'>
									<img src='media/img/borrar.png' alt='Borrar' title='Borrar a $cod_grupo $nombre $imagen'>
								    </a>
							    </section>
                                </section>
                            </a>
                        </section>";
                    }
                }  
                mysqli_close($conexion);
            }
        }
        ?>
    </section>
</body>
</html>