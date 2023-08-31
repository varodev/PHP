<!DOCTYPE html>
<html>
	<head>
		<title>Contactos</title>
		<link rel="stylesheet" href="css/estilos_agenda.css">
	</head>

	<body>
		<section id="contenedor">
			<header>
				<a href='mostrar_desplegable.php'><img src="media/img/cabecera.jpg"></a>
				
			</header>

			<main>
				<h1>Listado de contactos</h1>
				<?php
				require("conexion_agenda.php");

				$conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

				if($conexion) {
					mysqli_query($conexion, "SET NAMES 'UTF8'"); // Sirve para declarar la codificacion deseada para los caracteres que se utilizan en la BD

					if(mysqli_select_db($conexion, $bbdd)){

						$consulta = "SELECT * FROM contactos ORDER BY nombre, apellidos;";

						$resultado = mysqli_query($conexion, $consulta); 

						if(mysqli_errno($conexion)!=0){
							echo "<p>Nº Error: ".mysqli_errno($conexion)."</p>";
							echo "<p>Descripción: ".mysqli_error($conexion)."</p>";

						}else {
							echo "<form method='GET' action='mostrar_ficha.php'>";
							echo "<input type='hidden' name='consulta'>";
							echo "<select name='datos'>";
							echo "<option>Elige un contacto</option>";
							while($fila = mysqli_fetch_array($resultado)){ 
								echo "<option value='$fila[cod_contacto]/$fila[nombre]/$fila[apellidos]'>$fila[nombre] $fila[apellidos]</option>";
							}
							echo "</select>";
							echo "<input type='submit' name='mostrar'>";
							echo "</form>";
						}
					}
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

