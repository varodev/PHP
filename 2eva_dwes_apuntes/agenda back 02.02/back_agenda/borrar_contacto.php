<!DOCTYPE html lang='es'>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Borrar contacto</title>
		<link rel="stylesheet" href="css/estilos_agenda.css">
		<script src="js/borrar.js"></script>
	</head>

	<body>
		<section id="contenedor">
			<header>
				<a href='mostrar_contactos.php'><img src="media/img/cabecera.jpg"></a>
			</header>

			<main>
				<?php
				require("conexion_agenda.php");

				$conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

				if($conexion) {
					mysqli_query($conexion, "SET NAMES 'UTF8'"); 

					if(mysqli_select_db($conexion, $bbdd)){
                        $cod_contacto = $_GET['cod_contacto'];
						$consulta = "DELETE FROM contactos WHERE cod_contacto=$cod_contacto;";
						$resultado = mysqli_query($conexion, $consulta); 

						if(mysqli_errno($conexion)!=0){
							echo "<p>Nº Error: ".mysqli_errno($conexion)."</p>";
							echo "<p>Descripción: ".mysqli_error($conexion)."</p>";
						}else {
                            header('Location:mostrar_contactos.php?borrado');
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