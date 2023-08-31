<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_discoteca.css">
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
        <?php
        require("conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

        if($conexion) {
            mysqli_query($conexion, "SET NAMES 'UTF8'");

            if(mysqli_select_db($conexion, $bbdd)) {

                $consulta   = "SELECT * FROM grupos ORDER BY nombre;";
                $resultado  = mysqli_query($conexion, $consulta);

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
                                <div>
                                    <img class='redondeado-parcial' src='media/img/grupos/$fila[foto]'>
                                    <p>$fila[nombre]</p>
                                </div>
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