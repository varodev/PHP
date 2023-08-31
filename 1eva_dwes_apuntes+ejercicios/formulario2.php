<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .rojo{
            color: #FF0000;
        }
    </style>
</head>
<body>
    <h1>Otros elementos de formularios</h1>
    <form name="formulario" action="procesar_formulario2.php" method="GET" enctype="application/x-www-form-urlencoded">
        <label>Turno</label>
        <br>
        <input type="radio" name="turno" value="t1">Mañana
        <br>
        <input type="radio" name="turno" value="t2" required >Tarde
        <br>
        <input type="radio" name="turno" value="t3">Noche
        <br>
        <br>
        <select name="dia" required>
            <option value="">Seleccione uno</option>
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miércoles">Miércoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sábado">Sábado</option>
            <option value="Domingo">Domingo</option>
        </select>
        <br>
        <br>
        <!-- Si no le damos un value al checkbox, viaja con "on" al marcarlo 
        <input type="checkbox" name="condiciones" value="marcado" required >Acepte los términos -->
        <?php
            if(isset($_GET['mensaje'])){
                echo "<p class='rojo'>Debe marcar alguna aficion</p>";
            }
        ?>
        
        <input type="checkbox" name="aficiones[]" value="BBDD">BBDD
        <input type="checkbox" name="aficiones[]" value="Programación">Programación
        <input type="checkbox" name="aficiones[]" value="Baloncesto">Baloncesto
        <br>
        <br>
        <input type='submit' name='enviar_btn' value='Enviar'>
		<input type='reset' value='Restablecer'>
    </form>
</body>
</html>