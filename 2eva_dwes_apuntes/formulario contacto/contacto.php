<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1>Formulario de contacto</h1>

    <?php
    if(isset($_GET['error'])){
        $error=$_GET['error'];
        if($error==0){
            echo "<p class='azul'>Hemos recibido su consulta, ASAP</p>";
        }else if($error==1){
            echo "<p class='rojo'>NO hemos recibido su consulta</p>"; 
        }
    }
    ?>


    <form name="formulario" action="enviar_mail.php" method="post" enctype="application/x-www-form-urlencoded">
        <label>Nombre:</label>
        <input type="text" name="nombre" autofocus required>

        <label>Telefono:</label>
        <input type="text" name="telefono" required>

        <label>E-mail:</label>
        <input type="email" name="mail" required>

        <label>Asunto:</label>
        <input type="text" name="asunto" required>

        <label>Mensaje:</label>
        <textarea name="mensaje" placeholder="escriba su consulta" required></textarea><br>

        <div class="botones">
            <input type="submit" name="enviar_btn" value="Enviar">
            <input type="reset" value="Limpiar">
        </div>
    </form>
</body>

</html>