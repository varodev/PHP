<!DOCTYPE html>
<html>
	<head>
		<title>Alta nuevo contacto</title>
		<link rel="stylesheet" href="css/estilos_agenda.css">
	</head>

	<body>
		<section id="contenedor">
			<header>
				<a href='mostrar_contactos.php'><img src="media/img/cabecera.jpg"></a>
			</header>

			<main class='main-editar'>
				<h1>Alta nuevo contacto</h1>

				<?php
				require("conexion_agenda.php");

				$conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

				if($conexion) {
					mysqli_query($conexion, "SET NAMES 'UTF8'"); 

					if(mysqli_select_db($conexion, $bbdd)){
                 

						if(mysqli_errno($conexion)!=0){
							echo "<p>Nº Error: ".mysqli_errno($conexion)."</p>";
							echo "<p>Descripción: ".mysqli_error($conexion)."</p>";

                        } else {
                            if (isset($_GET['alta'])) {
                                $sueldo = $_GET['sueldo'];
                                $nombre = $_GET['nombre'];
                                $apellidos = $_GET['apellidos'];
                                $mail = $_GET['mail'];
                                $telefono = $_GET['telefono'];
                                $observaciones = $_GET['observaciones'];

                                $consulta = "INSERT INTO contactos (nombre, apellidos, mail, sueldo, telefono, observaciones ) VALUES ('$nombre', '$apellidos', '$mail', '$sueldo', '$telefono', '$observaciones')";
                                mysqli_query($conexion, $consulta);

                                header('Location:mostrar_contactos.php?alta');

                            } else {
                                echo "
                                <section id='formulario'><div class='columna'>
								<form method='get' action='alta_contactos.php' id='formulario'>
                                    <label for='nombre'>Nombre:</label>
                                    <input type='text' name='nombre'>
                                    <label for='apellidos'>Apellidos:</label>
                                    <input type='text' name='apellidos'>
                                    <label for='mail'>Correo electrónico:</label>
                                    <input type='mail' name='mail'>
                                    <label for='telefono'>Teléfono:</label>
                                    <input type='tel' name='telefono'>
                                    <label for='sueldo'>Sueldo</label>
                                    <input type='text' name='sueldo'>
                                    <label for='observaciones'>Observaciones:</label>
                                    <input type='text' name='observaciones'>
                                
                                    <input type='submit' name='alta' value='Enviar'>
                                    <input type='reset' value='Limpiar'>
									<a href='mostrar_contactos.php'>Volver a Mostrar contactos</a>
                                </form>
								</div>
                                </section>
                                ";
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