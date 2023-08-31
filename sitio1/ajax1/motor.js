function cargarFichero() {

    var ajax1 = new XMLHttpRequest();
    ajax1.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("d1").innerHTML = this.responseText;
        }
    }

    ajax1.open("GET", "fichero1.html", true);
    ajax1.send();

}