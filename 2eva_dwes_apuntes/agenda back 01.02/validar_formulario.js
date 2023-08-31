

function validar() {

	let nombre 	 = document.getElementById("nombre").value;
	let apellidos = document.getElementById("apellidos").value;
	let formulario = document.getElementById("formulario");

	if(nombre.length == 0 && apellidos.length == 0) {
		alert("Debes rellenar al menos un campo.");
	} else {
		formulario.submit();
	}

}