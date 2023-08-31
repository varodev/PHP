window.onload = function() { //funcion anonima, que se recargar al cargar el js
    const body1 = document.body;



    if (body1.id == "index1") {
        const resultado1 = document.querySelector("#resultado1");
        cargarJSON1(resultado1);
    } else if (body1.id == "detalle1") {
        //alert("Estas en Detalle");//php
    }
}

window.addEventListener('load', () => { //slider


    // initial slide
    let slide = 1;

    // total slides
    let slides = document.querySelectorAll(".slider ul li");
    total = slides.length;

    // show first side
    showSlide(1);

    next = document.querySelector(".next");
    prev = document.querySelector(".prev")

    /**
     * event next button
     */
    next.addEventListener('click', (evt) => {
        evt.preventDefault();
        slide++;
        if (slide > total) { slide = 1; }
        showSlide(slide);
    })

    /** 
     * event prev button
     */
    prev.addEventListener("click", (evt) => {
        evt.preventDefault();
        slide--;
        if (slide < 1) { slide = total; }
        showSlide(slide);
    })

    /**
     * show slides
     * 
     * @param {number} n 
     * @return {null}
     * 
     */
    function showSlide(n) {
        n--; // decrement 1
        for (i = 0; i < slides.length; i++) {
            (i == n) ? slides[n].style.display = "block": slides[i].style.display = "none";
        }
    }

})

function cargarJSON1(resultado1) {

    var ajax1 = new XMLHttpRequest();

    ajax1.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            var obj0 = this.responseText; //devuelve un DOMString que contiene la respuesta a la consulta como un texto o null si la consulta no tuvo exito o aun no ha sido completada. la propiedad responseText tendra una respuesta parcial como retorno aunque la consulta no haya sido completada. si responseType contiene algo que no sea un string vacio o un "text", el acceso a responseText sera throw InvalidStateError exception.
            var obj1 = JSON.parse(obj0); //Se parsea obj0 a JSON
            var obj2 = obj1["datos"]; //Se guarda los datos[] de JSON en la variable

            var resultado = "";
            for (var i = 0; i < obj2.length; i++) { //bucle para recorrer los datos[] JSON
                resultado += "<div class='cuadro'><a href='detalle.php?ide=" + obj2[i].ide + "'><div class='img'><img src='" + obj2[i].ruta + "'></div><div class='raza'>" + obj2[i].raza + "</div><div class='peso'>" + obj2[i].peso + "</div></a></div>";
            }
            document.getElementById(resultado1.id).innerHTML = resultado; //se imprime en el div id="resultado"
        }
    };
    ajax1.open("GET", "json/databaseBuscador.json"); //GET: operaciones que impliquen consulta/recuperación de datos
    ajax1.send();
}

window.addEventListener("load", function(event) { //cargarJSON1(resultado1);
    const campo1 = this.document.getElementById("campo11");
    const resultado1 = this.document.getElementById("resultado1");

    if (campo1) {

        campo1.addEventListener("click", function(event) { //mouse event click
            event.preventDefault();
            cargarJSON1(resultado1);
        });
    }
});

function buscarJSON1(resultado1) {
    var campo1 = document.getElementById("campo1").value = document.getElementById("campo1").value.toLowerCase(); //controlar mayusculas
    var ajax2 = new XMLHttpRequest();


    ajax2.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            var obj3 = this.responseText; //devuelve un DOMString que contiene la respuesta a la consulta como un texto o null si la consulta no tuvo exito o aun no ha sido completada. la propiedad responseText tendra una respuesta parcial como retorno aunque la consulta no haya sido completada. si responseType contiene algo que no sea un string vacio o un "text", el acceso a responseText sera throw InvalidStateError exception.
            var obj4 = JSON.parse(obj3); //Se parsea obj0 a JSON
            var obj5 = obj4["datos"]; //Se guarda los datos[] de JSON en la variable

            var result = "";

            for (var i = 0; i < obj5.length; i++) { //bucle para recorrer los datos[] JSON
                if ((obj5[i].raza).includes(campo1) || (obj5[i].peso).includes(campo1)) {
                    result += "<div class='cuadro'><a href='detalle.php?ide=" + obj5[i].ide + "'><div class='img'><img src='" + obj5[i].ruta + "'></div><div class='raza'>" + obj5[i].raza + "</div><div class='peso'>" + obj5[i].peso + "</div></a></div>";
                }
                /*if ((obj5[i].peso).includes(campo1)) {
                    result += "<div class='cuadro'><a href='detalle.php?ide=" + obj5[i].ide + "'><div class='img'><img src='" + obj5[i].ruta + "'></div><div class='raza'>" + obj5[i].raza + "</div><div class='peso'>" + obj5[i].peso + "</div></a></div>";
                }*/

            }
            if (result == "") { //controlar lo que se escribe por el formulario no se adapte al criterio
                result += "<p class='pjs'>RESULTADO NO SE ADAPTA A SU CRITERIO</p>"
            }

            document.getElementById(resultado1.id).innerHTML = result; //se imprime en el div id="resultado"
        }
    };
    ajax2.open("GET", "json/databaseBuscador.json"); //GET: operaciones que impliquen consulta/recuperación de datos
    ajax2.send();
}

window.addEventListener("load", function(event) { //cargarJSON1(resultado1);
    const campo1 = this.document.getElementById("campo1");
    const resultado1 = this.document.getElementById("resultado1");

    if (campo1) {

        campo1.addEventListener("keyup", function(event) { //mouse event click
            event.preventDefault();
            buscarJSON1(resultado1);


        });
    }
});