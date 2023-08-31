<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos_discoteca.css">
   
</head>

<body class="gris">


    <?php
    if(isset($_GET['mensaje'])){
        if($_GET['mensaje']=="error"){
            echo "<h2 class='h2-error'>Credenciales incorrectos.</h2>";
        } else if($_GET['mensaje']=="caducada"){
            echo "<h2 class='h2-error'>Sesion caducada. Han pasado los 15 minutos</h2>";
        } else if($_GET['mensaje']=="inactividad"){
            echo "<h2 class='h2-error'>Sesion caducada. Inactividad. </h2>";
        } else if($_GET['mensaje']=="destruido"){
            echo "<h2 class='h2-error'>Hasta la vista baby.🐱‍🐉</h2>";

        }
    }
    ?>
<section class="index_sesiones">
<fieldset>
    <div class="formulario">
    <h1>Login app Discoteca</h1>
        <form action="validacion.php" name="formulario" method="post" enctype="application/x-www-form-urlencoded">
        
        <label>Usuario:</label>
        <input type="text" name="usuario" size="30" autofocus required><br>

        <br><label>Contraseña:</label><br>
        <input type="password" name="pass" size="49" required>

        <div class="index-btn">
            <input type="submit" name="enviar" value="Enviar">
            <input type="reset" value="Borrar">
        </div>

        </form>
    </div>
</fieldset>
</section>
</body>

</html>