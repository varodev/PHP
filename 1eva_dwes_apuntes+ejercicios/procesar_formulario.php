<?php

	echo "¡El botón enviar funciona!";

	if(isset($_GET['enviar1'])){
		echo "<p>El nombre es: $nombre</p>";
		$nombre = $_GET['nombre'];
		echo "<p>¡El <b>isset</b> para enviar funciona!</p>";
		$apellido = $_GET['apellido'];
		echo "<p>Los apellidos son: $apellido</p>";
		$nota = $_GET['nota'];
		echo "<p>La nota es: $nota</p>";
		$mes = $_GET['mes'];
		echo "<p>El mes es: $mes</p>";
		echo "<p>Se ha enviado el formulario GET";
	}else if(isset($_POST['enviar2'])){
		echo "<p>El nombre es: $nombre</p>";
		$nombre = $_POST['nombre'];
		echo "<p>¡El <b>isset</b> para enviar funciona!</p>";
		$apellido = $_POST['apellido'];
		echo "<p>Los apellidos son: $apellido</p>";
		$nota = $_POST['nota'];
		echo "<p>La nota es: $nota</p>";
		echo "<p>Se ha enviado el formulario GET";
	}else if(isset($_GET['edad'])){
		$edad = $_GET['edad'];
	}else {
		header('Location:formularios.php?error=1');
	}

	/*$_GET=[‘’] se utiliza para ‘capturar’ qué dato o botón queremos manejar que esté viajando en el formulario por el método.*/

	/*isset: se utiliza junto con variables para comprobar que algo ‘existe’ en el formulario. ‘isset($_GET['enviar'])’ por ejemplo, sirve para comprobar si se ha pulsado el botón cuyo ‘name’ es ‘enviar’.*/

	// SI DA ERROR DEBEMOS REDIRIGIRLO AL FORMULARIO PARA NO ACCEDER A ESTE ARCHIVO PARA NADA

	// se puede usar header("Location:formularios.php"), que sirve para redireccionar y enviar variables

	// Le enviamos un "mensaje" por la URL añadiendo '?error' al location:direccion
	// Es una especie de variable que viaja por el método GET



?>
