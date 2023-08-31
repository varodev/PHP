<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
        * {
            font-family: "Calibri";

        }

        label {
            display: block;
            margin-top: 0.8em;
        }

        .botones {
            margin-top: 1em;

        }

        .h2-error{
            color: red;
        }
    </style>
</head>

<body>
    <h1>Sesiones</h1>

    <?php
    if(isset($_GET['mensaje'])){
        if($_GET['mensaje']=="error"){
            echo "<h2 class='h2-error'>Credenciales incorrectos.</h2>";
        } else if($_GET['mensaje']=="caducada"){
            echo "<h2 class='h2-error'>Sesion caducada. Han pasado los 15 segundos</h2>";
        } else if($_GET['mensaje']=="inactividad"){
            echo "<h2 class='h2-error'>Sesion caducada. Inactividad. </h2>";
        } else if($_GET['mensaje']=="destruido"){
            echo "<h2 class='h2-error'>Hasta la vista baby.🐱‍🐉</h2>";
        }
    }
    ?>

    <form action="validacion.php" name="formulario" method="post" enctype="application/x-www-form-urlencoded">
        <label>Usuario</label>
        <input type="text" name="usuario" autofocus required>

        <label>Contraseña</label>
        <input type="password" name="pass" required>

        <div class="botones">
            <input type="submit" name="enviar" value="Enviar">
            <input type="reset" value="Borrar">
        </div>

    </form>
</body>

</html>