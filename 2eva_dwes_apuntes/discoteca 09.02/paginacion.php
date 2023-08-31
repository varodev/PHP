<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_discoteca.css">
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
        
        <?php
        require("conexion_discoteca.php");
        $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
        
        if ($conexion) {
            mysqli_query($conexion, "SET NAMES 'UTF8'");

            if (mysqli_select_db($conexion, $bbdd)) {
                $resultado_por_pagina=100;
                if (isset($_GET['pagina'])) {//el resto, como existe pág, la usamos para la operacion
                    $pagina = $_GET['pagina'];                      //dentro de la query no hace operaciones
                    $consulta  = "SELECT * FROM canciones ORDER BY titulo LIMIT ".($pagina-1)*$resultado_por_pagina.",$resultado_por_pagina;";                        
                }else{//pag 1, como no existe pág, ponemos la quiery original
                    $consulta  = "SELECT * FROM canciones ORDER BY titulo LIMIT 1,$resultado_por_pagina;";
                }

                $resultado  = mysqli_query($conexion, $consulta);
                $tuplas = mysqli_num_rows($resultado);
                echo"<p>las canciones que hay son $tuplas</p><br>";

                if (mysqli_errno($conexion) != 0) {
                    echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                    echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                } else {
                    while ($fila = mysqli_fetch_array($resultado)) {
                        $titulo = $fila['titulo'];
                        echo "
                        <section class='seccion_canciones'>  
                             <p>$titulo</p>
                        </section>";
                    }
                }
                //Paginacion (con enlace)
                $consulta  = "SELECT * FROM canciones;";
            }

                $resultado  = mysqli_query($conexion, $consulta);
                $tuplas = mysqli_num_rows($resultado);
                $total_pag = ceil($tuplas/$resultado_por_pagina);
                $separador=" | ";

                for($i=1; $i<=$total_pag;$i++){
                    if($i==$total_pag){
                        $separador = "";
                    }
                    echo "<a href='paginacion.php?pagina=$i'>$i</a>".$separador;
                }

                mysqli_close($conexion);
            
        }
        ?>
    </section>
</body>

</html>