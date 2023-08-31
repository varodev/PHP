<?php
if(isset($_GET['enviar1'])){
	$nombre   = $_GET['nombre'];
	$apellido = $_GET['apellido'];
	$nota     = $_GET['nota'];
	$mes      = $_GET['mes']; //ojo oculto
	echo"<p>Datos de formulario GET</p>";
	echo"<p>Nombre: ".$nombre."</p>";
	echo"<p>Apellido: ".$apellido."</p>";
	echo"<p>Nota: ".$nota."</p>";
		//recuerda que viaja como campo oculto del formulario
	echo"<p>mes: ".$mes."</p>";
}else if(isset($_POST['enviar2'])){
	$nombre   = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$nota     = $_POST['nota'];
	$mes      = $_POST['mes']; //ojo oculto
	echo"<p>Datos de formulario POST</p>";
	echo"<p>Nombre: ".$nombre."</p>";
	echo"<p>Apellido: ".$apellido."</p>";
	echo"<p>Nota: ".$nota."</p>";
		//recuerda que viaja como campo oculto del formulario
	echo"<p>mes: ".$mes."</p>";
}else if(isset($_GET['edad'])){//los pasas por <a>, viene por el enlace, lo ves clickando
	$edad    = $_GET['edad']; 
	echo"<p>Edad: ".$edad."</p>";
}else{
	header('Location:form.php?error=1');
}
?>
