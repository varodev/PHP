<!DOCTYPE html>
<html lang="es">

<head>
	<title>Contactos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilos_agenda.css">
</head>

<body>
	<section id="contenedor">
		<header>
			<a href="mostrar_contactos.php"><img src="media/img/cabecera.jpg"></a>
		</header>
		<?php
		//include('menu.html');
		?>
		<main>
			<h1>Listado de contactos:</h1>
			<?php
			//accedo al archivo donde tenemos la info para la conexion
			require('conexion_agenda.php'); //con el acceso al archivo ya tengo acceso a las variables declaradas en el.

			//PASO 1. Conexión 
			//si realizamos una conexion ($conexion utilizamos la funcion pasandole los parametros que hemos recogido del archivo con el require)
			if ($conexion = mysqli_connect($servidor, $usuario, $password, $bbdd)) {
				mysqli_query($conexion, "SET NAMES 'UTF8'"); //para ejecutar una query y como parametros la variable de la conexion	

				//PASO 2. SELECCIONAMOS LA BBDD
				if (mysqli_select_db($conexion, $bbdd)) { //con la funcion accedemos a la base de datos y le pasamos como parametro la conexion y la bbdd que queremos acceder, en este caso utilizamos la variable $bbdd que definimos anteriormente en el otro archivo

					//PASO 3. Definimos la consulta que queramos ejecutar.
					$consulta = "SELECT * FROM contactos ORDER BY nombre, apellidos;";

					//PASO 4. ejecutamos la query y la asociaremos a una variable porque en caso de que nos devuelva resultado lo guardaremos en una variable
					$resultado = mysqli_query($conexion, $consulta);

					//PASO 5. Control de errores. Comprobamos si ha habido algun error en la consulta, para ello podemos utilizar mysqli_error() que devuelve la descripcion del error o mysqli_errno() que devuelve el numero del error.
					if (mysqli_errno($conexion) != 0) { //primero vamos a controlar que tenga error
						//Quiere decir que hay algun error.
						echo "<p>Numero de error: " . mysqli_errno($conexion) . "</p>";
						echo "<p>Mensaje: " . mysqli_error($conexion) . "</p>";
					} else {
						//PASO 6. Mostramos la info por pantalla (si es una query de tipo select)
						while ($fila = mysqli_fetch_array($resultado)) { //mientras que tenga filas en el resultado
							echo "
							<section class='contacto'>
								<section class='iconos'>
									<a href='editar_contacto.php?codigo=$fila[cod_contacto]&editar'>
									<img src='media/img/lapiz.png' alt='Editar' title='Editar'>
									</a>
								</section>

								<section class='iconos'>
									<a href='gestionar_contacto.php?codigo=$fila[cod_contacto]&borrar'>
									<img src='media/img/papelera.png' alt='Borrar' title='Borrar contacto'>
									</a>
								</section>

								<section class='detalle_contacto'>
									<a href='mostrar_ficha.php?codigo=$fila[cod_contacto]&nombre=$fila[nombre]&apellidos=$fila[apellidos]'>$fila[nombre] $fila[apellidos]</a>
								</section>
							</section>
							";
						}
					}
				}
				//PASO 7. CERRAMOS LA CONEXION
				mysqli_close($conexion);
			}

			?>
		</main>
		<aside>

		</aside>
		<footer>

		</footer>
	</section>
</body>

</html>