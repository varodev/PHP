function validar_campos() {
	let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;

    if(nombre.length==0 && apellidos.length==0){
        alert("Al menos uno de los dos campos debe tener un valor.")
    }else{
        let formulario = document.getElementById('formulario');
        formulario.submit();
    }
}