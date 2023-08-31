<?php
	echo "<meta charset='UTF-8'>";
	echo "<h1>Validar DNI</h1>";
				
				//clickeo el botón
				if(isset($_GET['enviar'])){
					if(isset($_GET['nombre'])){
						$nombre=$_GET['nombre'];
						$intento = $_GET['intento'];
						$intento--;
					}
				}	

                    if(isset($_GET['dni'])){
                    	$dni_user=$_GET['dni'];
                    	$resultado=0;
                    	//Parte de la letra del dni
                    	//array con las letras
						$letras_dni = array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
						//tamaño del array
						$long_array = sizeof($letras_dni);
						//tamaño del dni
						$long_dni = strlen($dni_user);
						//se inicia la variable para saber si la letra final 
						$letra_econtrada = false;
						//extraigo la letra del dni
						$letra_dni = substr($dni_user, -1);
						
						//se recorre el array
						for($i=0; $i<$long_array && !$letra_econtrada; $i++){
							if($letras_dni[$i]==$letras_dni){
								$letra_econtrada = true;
							}
						}
						//Parte numerica
						// ***meter lo del ejercicio***
						$numeroDNI=substr($dni_user, 0, $long_dni - 1);
						$operar=$numeroDNI%23;

						$letra_DNI_verificar=$letras_dni[$operar];
						if($letra_DNI_verificar !=$letras_dni){
							$resultado=1;
						}else{
							$resultado=0;
						}
						header("Location:alvaro_moreno_validar_dni.php?nombre=$nombre&dni=$dni_user&intento=$intento&resultado=$resultado");
                    }

                    if(isset($_GET['resultado'])){
                    	if (isset($_GET['nombre']) && isset($_GET['dni'])) {
                    		$nombre_usuario = $_GET['nombre'];
							$dni_user = $_GET['dni'];
                    	}

                    	$long_dni = strlen($dni_user);
                    	if($long_dni==9){
                    		$dni_user="0".$dni_user;
                    	}

                    	//se evaluan las tres posibilidades, 1)acierto 2) fallas y aciertas a la segunda 3)fallas a la segunda

                    	if($resultado == 0 && $intento<=0){
                    		echo "<p>Hola $nombre. tu dni $dni_user es correcto</p>";
                    	}else if ($resultado==1 && $intento==0){
                    		echo "<p>Hola $nombre. tu dni $dni_user es incorrecto</p>";
                    		echo "<p>Tienes otro intento</p>";
                    	}else{
							echo "<p>Hola $nombre. tu dni $dni_user es incorrecto</p>";
							echo "<p>Debes ponerte en contacto soporte</p>";
							echo "<a href='alvaro_moreno_validar_dni.php'>Volver al formulario</a>";
                    	}
                    }

                    if(isset($_GET['$intento'])&&($_GET['resultado'])){
                    	$intento = $_GET['intento'];
						$resultado = $_GET['resultado'];
                    }else{
                    	$intento=1;
                    	$resultado=2;
                    }

					//se va a ver si es mayor o igual y cero y el resultado distinto de cero
					if ($intento >= 0 && $resultado != 0) {
					echo "<form name='formulario' method='GET' action='alvaro_moreno_validar_dni.php'>
                    <label for='nombre'>Escriba su nombre</label>
                    <input type='text' name='nombre' required autofocus>

                    <label>Por favor, ponga aqui su DNI</label>
                    <input type='text' name='dni' minlength='9' maxlength='10' required>

                    <input type='hidden' name='intento' value='$intento'>
                    <input type='submit' name='enviar' value='Enviar'>
                </form>";
            }
?>