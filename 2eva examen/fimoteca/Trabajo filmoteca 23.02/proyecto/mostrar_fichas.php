<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Filmoteca</title>
    <link rel="stylesheet" href="../css/bootstrap.slate.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
</head>

<body>
  <!--Nav-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index_filmoteca.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Peliculas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Géneros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Productoras</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Roles
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Directores</a></li>
              <li><a class="dropdown-item" href="#">Actores</a></li>
              <li><a class="dropdown-item" href="#">Actrices</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <button type="button" class="btn btn-primary me-2" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Iniciar Sesión
          </button>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <a href="#" class='btn btn-primary'>Buscar</a>
        </form>
      </div>
    </div>
  </nav>

<!--Slider-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../media/webside/slider1.jpg" class="d-block w-100" alt="01">
            </div>
            <div class="carousel-item">
                <img src="../media/webside/slider2.jpg" class="d-block w-100" alt="02">
            </div>
            <div class="carousel-item">
                <img src="../media/webside/slider3.jpg" class="d-block w-100" alt="03">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<h1 class="text-center mt-5">Bienvenido a Filmflix</h1>


<?php
    require("../0.conexion_filmoteca.php");
    $conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);
    
    if($conexion) {
        mysqli_query($conexion, "SET NAMES 'UTF8'");

        if(mysqli_select_db($conexion, $bbdd)){
            if(isset($_GET['cod_pelicula'])){
                $cod_pelicula = $_GET['cod_pelicula'];
                $titulo       = $_GET['titulo'];
                

                $consulta = "SELECT * FROM peliculas WHERE cod_pelicula = $cod_pelicula";
                $resultado  = mysqli_query($conexion, $consulta);
                echo "<h3 class='text-center mt-5'>Información detallada de $titulo</h1>";


                    if(mysqli_errno($conexion)!=0) {
                        echo "<p>Error nº ".mysqli_errno($conexion)."</p>";
                        echo "<p>Descripción: ".mysqli_error($conexion)."</p>";
                    } else {
        //Cuerpo Contenedor
                        echo"<section><div class='row mt-5 mb-5 justify-content-center'>";
                        error_reporting(E_ERROR | E_PARSE);
                        while($fila = mysqli_fetch_array($resultado)){
                            $titulo  = $fila['titulo'];
                            $sinopsis  = $fila['sinopsis'];
                            $fecha        = $fila['fecha'];
                            $duracion        = $fila['duracion'];
                            $trailer        = $fila['trailer'];
                            
                            if (getimagesize("$fila[foto]")) {
                                    $foto = $fila["foto"];
                            } else {
                                    $foto = "../media/img/no_disponible.png";
                            }

                            echo"<div class='col-12 col-md-4 mt-3'>
                            <div class='card'>
                                <img src='$foto' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'>Titulo: $titulo</h5>
                                    <p class='card-text'>Fecha: $fecha</p>
                                    <p class='card-text'>Duración: $duracion</p>
                                    <p class='card-text'>Sipnosis: $sinopsis</p>
                                    <div class='col-12 col-md-12 mt-3 d-flex justify-content-center'>
                                    <a href='$trailer' class='btn btn-primary'>Ir a trailer de $titulo </a>
                                    <a href='index_filmoteca.php' class='btn btn-primary'>Volver a filmoteca</a>
                                    </div>
                                </div>
                            </div>
                           </div>";
                        }
                        echo "</div></section>";          
                    }//else de mysqli_errno
                mysqli_close($conexion);
        }//select_db
    }//conexion
}else{
    echo "error";
}
?>
<!--Footer-->
<footer class="text-center text-lg-start bg-light text-muted">
    <div class="me-5 d-none d-lg-block">
      <div class="col-12 col-md-3 d-flex justify-content-left p-3">
          <a href="https://es-es.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg></a>
          <a href="https://www.instagram.com/"><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg></a>
          <a href="https://es.linkedin.com/"><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
          </svg></a>
          <a href="https://twitter.com/"><svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </svg></a>
      </div>
          <div class="text-center bg-light p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <p class="text-reset fw-bold">Alvaro Moreno Aparicio</p>
          </div>
    </div>
</footer>

</body>
</html>