function borrarAlbum(cod_album, titulo) {
    if (confirm("¿Desea borrar el album " + titulo + " ?")) {
        window.location = "borrar_album.php?cod_album=" + cod_album;
    }
}