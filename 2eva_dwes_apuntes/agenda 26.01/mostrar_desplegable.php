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
			<h1>Listado de contactos:</h1>
			<?php
				
				require('conexion_agenda.php'); //con el acceso al archivo ya tengo acceso a las variables declaradas en el.

				if($conexion=mysqli_connect($servidor,$usuario,$password, $bbdd)){
					mysqli_query($conexion, "SET NAMES 'UTF8'");//para ejecutar una query y como parametros la variable de la conexion	

					
					if(mysqli_select_db($conexion, $bbdd)){ 

						$consulta="SELECT * FROM contactos ORDER BY nombre, apellidos;";
						$resultado=mysqli_query($conexion, $consulta);
						

						if(mysqli_errno($conexion)!=0){
							
							echo "<p>Numero de error: ".mysqli_errno($conexion)."</p>";
							echo "<p>Mensaje: ".mysqli_error($conexion)."</p>";
						}else{
							echo "<form action='mostrar_ficha.php' method='GET' enctype='application/x-www-form-urlencoded'>
										<select name='datos' required>
										<option value=''>Seleccione un contacto</option>";
										while($fila=mysqli_fetch_array($resultado)){
											echo "<option value='$fila[cod_contacto]/$fila[nombre]/$fila[apellidos]'>$fila[nombre] $fila[apellidos]</option>";
										}

							echo "		</select>
									<input type='submit' name='enviar_GET' value='enviar'>
									</form>";
						}
					}
				}					
					mysqli_close($conexion);
			?>
		</main>
		<aside>
			
		</aside>
		<footer>
			
		</footer>	
	</section>
</body>
</html>