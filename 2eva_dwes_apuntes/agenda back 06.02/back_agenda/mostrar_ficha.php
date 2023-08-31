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
				
				<?php				
					if(isset($_GET['consulta'])) {

						if(isset($_GET['cod_contacto'])){
							$codigo = $_GET['cod_contacto'];
							$nombre = $_GET['nombre'];
							$apellidos = $_GET['apellidos'];
							$consulta = "SELECT * FROM contactos WHERE cod_contacto = $codigo";
							$cabecera = "<h1>Información detallada de $nombre $apellidos</h1>";

						} else if (isset($_GET['datos'])){
							$datos = $_GET['datos'];
							$array_codigo = explode("/", $datos);
							$codigo = $array_codigo[0];
							$nombre= $array_codigo[1];
							$apellidos = $array_codigo[2];
							$consulta = "SELECT * FROM contactos WHERE cod_contacto = $codigo";
							$cabecera = "<h1>Información detallada de $nombre $apellidos</h1>";

						} else if (isset($_GET['apellidos'])) {
							$nombre = $_GET['nombre'];
							$apellidos = $_GET['apellidos'];
							$consulta = "SELECT * FROM contactos WHERE nombre LIKE '%$nombre%' AND apellidos LIKE '%$apellidos%'";
							$cabecera = "<h1>Resultados con '$nombre $apellidos':</h1>";
						}

						require("conexion_agenda.php");
						$conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

						if($conexion) {
							mysqli_query($conexion, "SET NAMES 'UTF8'");

							if(mysqli_select_db($conexion, $bbdd)){
								
								$resultado = mysqli_query($conexion, $consulta);

								if(mysqli_errno($conexion)!=0){
									echo "<p>Nº Error: ".mysqli_errno($conexion)."</p>";
									echo "<p>Descripción: ".mysqli_error($conexion)."</p>";
								}else {

									echo $cabecera;

									while($fila = mysqli_fetch_array($resultado)){
										echo "<p> <span class='negrita'> - Nombre:</span> ".$fila[2]."</p>";
										echo "<p> <span class='negrita'> - Apellidos:</span> ".$fila[3]."</p>";
										echo "<p> <span class='negrita'> - Correo:</span> ".$fila[4]."</p>";
										echo "<p> <span class='negrita'> - Sueldo:</span> ".$fila[1]."</p>";
										echo "<p> <span class='negrita'> - Teléfono:</span> ".$fila[5]."</p>";
										echo "<p> <span class='negrita'> - Observaciones:</span> ".$fila[6]."</p>";
									}
									echo "<a href='mostrar_contactos.php'>Volver a lista de contactos</a><br>";
									echo "<a href='mostrar_desplegable.php'>Volver al desplegable de contactos</a><br>";
									echo "<a href='mostrar_cajas_2.php'>Volver a la búsqueda manual de contactos</a>";
								}
							}
						}
						mysqli_close($conexion);
					}else {
						//mensaje de error
						echo "<p>Error</p>";
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
