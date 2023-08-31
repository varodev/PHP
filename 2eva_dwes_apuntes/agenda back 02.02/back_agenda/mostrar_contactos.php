<!DOCTYPE html lang='es'>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contactos</title>
		<link rel="stylesheet" href="css/estilos_agenda.css">
		<script src="js/borrar.js"></script>
		
	</head>

	<body>
		<section id="contenedor">
			<header>
				<a href='mostrar_contactos.php'><img src="media/img/cabecera.jpg"></a>
			</header>
			<nav>
				<a href='alta_contactos.php'>Dar de alta un nuevo usuario</a>
			</nav>

			<main>
				<h1>Listado de contactos</h1>
				<?php
				
				// 0. Si se ha borrado o editado un contacto mostramos un alert informando de su éxito
				if(isset($_GET['borrado'])) {
					echo "<script>
					alert('Contacto borrado correctamente.');
					</script>";
				} else if (isset($_GET['modificado'])){
					echo "<script>
					alert('Contacto modificado correctamente.');
					</script>";
				}
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
							$coincidencias = mysqli_num_rows($resultado);
							echo "<p>En Listado de Contactos hay $coincidencias elementos</p>";
							if(mysqli_errno($conexion)!=0){
							// Quiere decir que ha habido un error (error 0 significa que NO hay error, si !=0, ha habido errore(s))
							echo "<p>Nº Error: ".mysqli_errno($conexion)."</p>";
							echo "<p>Descripción: ".mysqli_error($conexion)."</p>";

						}else {
							// PASO 6. Recorremos los resultados para mostrar la información
							while($fila = mysqli_fetch_array($resultado)){  // mientras haya tuplas 
								$codigo_contacto = $fila['cod_contacto'];
								$nombre = $fila['nombre'];
								$apellidos = $fila['apellidos'];
								echo "
								<section class='contacto'>
									<section class='icono'> 
										<a href='editar_contacto.php?consulta&cod_contacto=$codigo_contacto'>
											<img src='media/img/editar.png' alt='Borrar' title='Editar a $nombre $apellidos'>
										</a>
									</section>


									<section class='icono'>
										<a onclick='borrar($codigo_contacto, \"$nombre $apellidos\");'>
											<img src='media/img/borrar.png' alt='Editar' title='Borrar a $nombre $apellidos'>
										</a>
									</section>


									<section class='detalle-contacto'>
										<a href='mostrar_ficha.php?consulta&cod_contacto=$codigo_contacto&nombre=$nombre&apellidos=$apellidos'>$fila[nombre] $fila[apellidos]</a>
									</section>
								
								</section>";
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

