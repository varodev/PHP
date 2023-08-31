<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_discoteca.css">
    <title>Editar Grupos</title>
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
            <li><a href='#'>Dar de alta un grupo nuevo</a></li>
        </ul>
        <?php

        if (isset($_GET['cod_grupo'])) {
            $cod_grupo = $_GET['cod_grupo'];
            
                require("0.conexion_discoteca.php");
                $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
                if ($conexion) {
                    mysqli_query($conexion, "SET NAMES 'UTF8'");
        
                    if (mysqli_select_db($conexion, $bbdd)) {
        
                        $consulta = "DELETE FROM grupos WHERE cod_grupo=$cod_grupo;";
                        mysqli_query($conexion, $consulta);


                        if (mysqli_errno($conexion) != 0) {
                            echo "<p>Error nº " . mysqli_errno($conexion) . "</p>";
                            echo "<p>Descripción: " . mysqli_error($conexion) . "</p>";
                        } else {
                            header('Location:mostrar_grupos.php?borrado');
                        }
                        mysqli_close($conexion);
                    }
                }
            } else {
                echo "<p>Error</p>";
            }
     
        

        




        
        ?>
    </section>
</body>

</html>