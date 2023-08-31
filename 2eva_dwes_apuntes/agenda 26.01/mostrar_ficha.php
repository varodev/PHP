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
		<main>
			
			<?php
			if(isset($_GET['codigo']) || isset($_GET['datos']) || isset($_GET['busqueda'])){
				$continuar=true;
			}else{
				echo "<p>Has hecho bien en intentarlo porque podia haber sido que si, pero va a ser que no.</p>";
			}

			if($continuar){
				require('conexion_agenda.php');
				if($conexion=mysqli_connect($servidor,$usuario,$password, $bbdd)){

					if(isset($_GET['datos'])){
						$cadenas=explode("/", $_GET['datos']);
						$codigo=$cadenas[0];
						$nombre=$cadenas[1];
						$apellidos=$cadenas[2];
						
						$consulta="SELECT * FROM contactos WHERE cod_contacto=$codigo";

					}else if(isset($_GET['codigo'])){
						$codigo=$_GET['codigo'];
						$nombre=$_GET['nombre'];
						$apellidos=$_GET['apellidos'];
						
						$consulta="SELECT * FROM contactos WHERE cod_contacto=$codigo";

					}else if(isset($_GET['busqueda'])){
						$nombre=$_GET['nombre'];
						$apellidos=$_GET['apellidos'];

						if(strlen($nombre)>0 && strlen($apellidos)==0){
							$consulta="SELECT * FROM contactos WHERE nombre LIKE '%$nombre%' ORDER BY nombre, apellidos;";
						}elseif (strlen($apellidos>0) && strlen($nombre)==0) {
							$consulta="SELECT * FROM contactos WHERE apellidos LIKE '%$apellidos%' ORDER BY nombre, apellidos;";
						}else{
							$consulta="SELECT * FROM contactos WHERE nombre LIKE '%$nombre%' AND apellidos LIKE '%$apellidos%' ORDER BY nombre, apellidos;";
						}

					}
					echo "<h1>Datos de $nombre $apellidos</h1>";
						
					mysqli_query($conexion, "SET NAMES 'UTF8'");

					if(mysqli_select_db($conexion, $bbdd)){ 
						

						$resultado=mysqli_query($conexion, $consulta);
						
						if(mysqli_errno($conexion)!=0){			
							echo "<p>Numero de error: ".mysqli_errno($conexion)."</p>";
							echo "<p>Mensaje: ".mysqli_error($conexion)."</p>";
						}else{			
							while($fila=mysqli_fetch_array($resultado)){
								
								echo "<p><span class='negrita'>Nombre:</span> $fila[nombre]</p>";
								echo "<p><span class='negrita'>Apellidos:</span> $fila[apellidos]</p>";
								echo "<p><span class='negrita'>Telefono:</span> $fila[telefono]</p>";
								echo "<p><span class='negrita'>Mail:</span> $fila[mail]</p>";
								echo "<p><span class='negrita'>Sueldo:</span> $fila[sueldo]</p>";
								echo "<p><span class='negrita'>Observaciones:</span> $fila[observaciones]</p>";
								echo "<p>---------------------------</p>";

							}
							echo "<p><a href='busqueda_contacto.php'>Volver a busqueda contacto</a></p>";
							echo "<p><a href='mostrar_contactos.php'>Volver a mostrar contacto</a></p>";
							
						}
					}
					mysqli_close($conexion);	
				}			
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

