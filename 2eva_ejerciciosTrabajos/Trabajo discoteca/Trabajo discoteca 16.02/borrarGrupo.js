function borrarGrupo(cod_grupo, nombre) {
    if (confirm("¿Desea borrar el grupo " + nombre + " ?")) {
        window.location = "borrar_grupo.php?cod_grupo=" + cod_grupo;
    }

}