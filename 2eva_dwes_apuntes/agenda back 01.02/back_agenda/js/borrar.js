


function borrar(cod_contacto, nombre) {
    if(confirm("¿Desea borrar el contacto "+cod_contacto+" - "+nombre+"?")){
        window.location="borrar_contacto.php?cod_contacto="+cod_contacto;
    }else {

    }
}