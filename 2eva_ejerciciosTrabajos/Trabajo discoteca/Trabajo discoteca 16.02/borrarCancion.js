function borrarCancion(cod_cancion, titulo) {
    if (confirm("¿Desea borrar la cancion " + titulo + " ?")) {
        window.location = "borrar_cancion.php?cod_cancion=" + cod_cancion;
    }
}