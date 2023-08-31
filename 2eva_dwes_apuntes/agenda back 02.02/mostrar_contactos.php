<!DOCTYPE html>
<html>
	<head>
		<title>Contactos</title>
		<link rel="stylesheet" href="css/estilos_agenda.css">
	</head>

	<body>
		<section id="contenedor">
			<header>
				<a href='mostrar_contactos.php'><img src="media/img/cabecera.jpg"></a>
				
			</header>

			<main>
				<h1>Listado de contactos</h1>
				<?php
				require("conexion_agenda.php");

				// PASO 1. Conexion (mysqli_connect())
				$conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

				if($conexion) {
					mysqli_query($conexion, "SET NAMES 'UTF8'"); // Sirve para declarar la codificacion deseada para los caracteres que se utilizan en la BD

					// PASO 2. Seleccionamos la BD
					if(mysqli_select_db($conexion, $bbdd)){

						// PASO 3. Definimos la consulta deseada
						$consulta = "SELECT * FROM contactos ORDER BY nombre, apellidos;";

						// PASO 4. Ejecutamos la consulta
						$resultado = mysqli_query($conexion, $consulta); // Ejecuta la query almacenada en la variable $consulta y almacena los datos devueltos en la variable $resultado

						// PASO 5. Control de errores - Comprobamos si todo OK
							//mysqli_error() (texto del error que podria aparecer) 
							//mysqli_errno() (numero del error que podria aparecer)
						if(mysqli_errno($conexion)!=0){
							// Quiere decir que ha habido un error (error 0 significa que NO hay error, si !=0, ha habido errore(s))
							echo "<p>Nº Error: ".mysqli_errno($conexion)."</p>";
							echo "<p>Descripción: ".mysqli_error($conexion)."</p>";

						}else {
							// PASO 6. Recorremos los resultados para mostrar la información
							while($fila = mysqli_fetch_array($resultado)){  // mientras haya tuplas 
								$codigo_contacto = $fila[0];
								$nombre = $fila[2];
								$apellidos = $fila[3];
								echo "<p>- "."<a href='mostrar_ficha.php?consulta&cod_contacto=$codigo_contacto&nombre=$nombre&apellidos=$apellidos'>".$fila[2]." ".$fila[3]."</a></p>";
							}
						}
					}
					// PASO 7. Cerramos la conexión
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

