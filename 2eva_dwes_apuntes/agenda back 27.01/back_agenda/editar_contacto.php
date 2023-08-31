<!DOCTYPE html>
<html>
	<head>
		<title>Editar contacto</title>
		<link rel="stylesheet" href="css/estilos_agenda.css">
	</head>

	<body>
		<section id="contenedor">
			<header>
				<a href='mostrar_contactos.php'><img src="media/img/cabecera.jpg"></a>
			</header>

			<main class='main-editar'>
				<h1>Editar contacto</h1>

				<?php
				require("conexion_agenda.php");

				$conexion = mysqli_connect($servidor, $usuario, $password, $bbdd);

				if($conexion) {
					mysqli_query($conexion, "SET NAMES 'UTF8'"); 

					if(mysqli_select_db($conexion, $bbdd)){

                        $cod_contacto = $_GET['cod_contacto'];
						$consulta = "SELECT * FROM contactos WHERE cod_contacto=$cod_contacto;";
						$resultado = mysqli_query($conexion, $consulta); 

						if(mysqli_errno($conexion)!=0){
							echo "<p>Nº Error: ".mysqli_errno($conexion)."</p>";
							echo "<p>Descripción: ".mysqli_error($conexion)."</p>";

						}else {

							if(isset($_GET['modificar'])){
								$cod_contacto	= $_GET['cod_contacto'];
								$sueldo         = $_GET['sueldo'];
								$nombre         = $_GET['nombre'];
								$apellidos      = $_GET['apellidos'];
                                $mail           = $_GET['mail'];
                                $telefono       = $_GET['telefono'];
                                $observaciones  = $_GET['observaciones'];

								$consulta = "UPDATE contactos SET nombre='$nombre', apellidos='$apellidos', mail='$mail', sueldo='$sueldo', telefono='$telefono', observaciones='$observaciones' WHERE cod_contacto=$cod_contacto;";
								$resultado = mysqli_query($conexion, $consulta); 

								header('Location:mostrar_contactos.php?modificado');

							}else{
								while($fila = mysqli_fetch_array($resultado)){
                                // CONTENIDO DE LOS CAMPOS
                                $sueldo         = $fila['sueldo'];
								$nombre         = $fila['nombre'];
								$apellidos      = $fila['apellidos'];
                                $mail           = $fila['mail'];
                                $telefono       = $fila['telefono'];
                                $observaciones  = $fila['observaciones'];

								echo "
                                <section id='formulario'><div class='columna'>
								<form method='get' action='editar_contacto.php' id='formulario'>
                                    <input type='hidden' value='$cod_contacto' name='cod_contacto'>
                                    <label for='nombre'>Nombre:</label>
                                    <input type='text' value='$nombre' name='nombre'>
                                    <label for='apellidos'>Apellidos:</label>
                                    <input type='text' value='$apellidos' name='apellidos'>
                                    <label for='mail'>Correo electrónico:</label>
                                    <input type='mail' value='$mail' name='mail'>
                                    <label for='telefono'>Teléfono:</label>
                                    <input type='tel' value='$telefono' name='telefono'>
                                    <label for='sueldo'>Sueldo</label>
                                    <input type='text' value='$sueldo' name='sueldo'>
                                    <label for='observaciones'>Observaciones:</label>
                                    <input type='text' value='$observaciones' name='observaciones'>
                                
                                    <input type='submit' name='modificar' value='Enviar'>
                                    <input type='reset' value='Limpiar'>
									<a href='mostrar_contactos.php'>Volver a Mostrar contactos</a>
                                </form>
								</div>
                                </section>
                                ";
								}
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

