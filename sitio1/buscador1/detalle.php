<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del perro</title>
    <script src="js/motorBuscador.js"></script>
    <link rel="stylesheet" href="css/styleBuscador.css">
    <script src="js/all.js"></script>
</head>
<body id="detalle1">
<header>
        <section>
            <div class="icon">
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </section>

        <section class="row">
            <div class="col-4">
                <img src="img/logo.jpg" alt="">
            </div>

            <nav class="col-8">
                <a href="buscador.html">HOME</a>
                <a href="#">CONÓZCANOS</a>
                <a href="#">ADOPTA</a>
                <a href="#">SERVICIOS</a>
            </nav>
        </section>
</header>
    <h1 class="h1php">Información del perro seleccionado</h1>
    <div id="contenedor1 h1php">
        <?php
            //lectura del fichero JSON
            $json = file_get_contents('json/databaseBuscador.json');
            //Descodificación del fichero JSON y volcado de una matriz
            $json_data = json_decode($json,true);
            //recorrido de los datos de JSON
            foreach($json_data['datos'] as $item){
                if($item['ide']==$_GET['ide']){
                echo "<div class='raza1'>" . $item['raza'] . "</div>";
                echo "<div class='peso1'>" . $item['peso'] . "</div>";
                echo "<div class='flex'><img src='" . $item['ruta'] . "'></div>";
                }
            }
            ?>
    </div>
 
</body>
</html>