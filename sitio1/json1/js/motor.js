window.onload = function() { //funcion anonima
    const body1 = document.body;

    if (body1.id == "index1") {
        const resultado1 = document.querySelector("#resultado1");
        cargarJSON1(resultado1);
    } else if (body1.id == "detalle1") {
        //alert("Estas en Detalle");
    }
}

function cargarJSON1(resultado1) {

    var ajax1 = new XMLHttpRequest();

    ajax1.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            var obj0 = this.responseText;
            var obj1 = JSON.parse(obj0);
            var obj2 = obj1["datos"];

            var resultado = "";
            for (var i = 0; i < obj2.length; i++) {
                resultado += "<div><a href='detalle.php?ide=" + obj2[i].ide + "'><div><img src='" + obj2[i].ruta + "'></div><div>" + obj2[i].articulo + "</div><div>" + obj2[i].pvp + "</div></a></div>";
            }
            document.getElementById(resultado1.id).innerHTML = resultado;
        }
    };
    ajax1.open("GET", "json/database.json");
    ajax1.send();
}

function buscarJSON1(resultado1) {
    alert("Ahora se iniciaria el motor de busqueda de la pag");
}

window.addEventListener("load", function(event) {
    const boton1 = this.document.getElementById("boton1");
    // const campo1 = this.document.getElementById("campo1");
    const resultado1 = this.document.getElementById("resultado1");

    if (boton1) {

        boton1.addEventListener("click", function(event) {
            event.preventDefault();
            cargarJSON1(resultado1);
        });
    }
});