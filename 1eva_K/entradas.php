<style>
    body {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    #container {
        height: 100vh;
        width: 80%;
    }

    #container,
    form,
    #extras {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    #extras {
        flex-direction: row;
    }

    label,
    p,
    a {
        font-family: sans-serif;
        font-size: 20px;
    }

    input {
        border: 2px solid #000000;
        border-radius: 20px;
        margin: 1em;
        padding: 1em 2em;
    }

    input[type="submit"] {
        background-color: rgb(55, 50, 255, 0.9);
        color: #ffffff;
    }

    input[type="submit"]:hover {
        background-color: rgb(90, 90, 255, 0.9);
    }
</style>
<?php
// Entra si no esta definido enviar (sera solo la primera vez)
if (!isset($_GET['enviar'])) {

    echo "<div id='container'>
            <p><h1>Venta de Entradas</h1></p>";

    echo "<form name='form_entradas' action='entradas.php' method='GET' enctype='application/x-www-form-urlencoded'>
            <label>Cantidad de entradas normales</label>    
            <input type='number' name='ent_norm' value='0' autofocus>
            <label>Cantidad de entradas especiales</label>
            <input type='number' name='ent_esp' value='0'>
            <label>Cantidad de entradas super especiales</label>
            <input type='number' name='ent_sup_esp' value='0'>

            <div id='extras'> 
            <input type='checkbox' name='extras[]' value='palomitas'>Añadir palomitas por 2€

            <input type='checkbox' name='extras[]' value='bebida'>Añadir una bebida por 3€

            <input type='checkbox' name='extras[]' value='nachos'>Añadir nachos por 4€
            </div>

            <select name='tipo_socio'>
                <option value='4'>Tipo de socio</option>
                <option value='0'>Normal</option>
                <option value='1'>Oro</option>
                <option value='2'>Platino</option>
            </select>
            <input type='text' name='codigo' placeholder='Codigo Socio'>

            <input type='submit' name='enviar' value='Enviar'>
        </form>
        </div>";
} else {
    // Obtengo el valor de los inputs
    // Sino introducen nada tienen el value de 0 para que no de error
    $ent_norm = $_GET['ent_norm'];
    $ent_esp = $_GET['ent_esp'];
    $ent_super_esp = $_GET['ent_sup_esp'];

    echo "<p><h1>Has escogido:</h1></p>";

    echo "<p>Entradas normales : $ent_norm</p>
        <p>Entradas especilaes : $ent_esp</p>
        <p>Entradas super especiales : $ent_super_esp</p>
    ";

    // Paso a la funcion los parametros que devuelve el total de la suma
    $total_a_pagar = sumarTotal($ent_norm, $ent_esp, $ent_super_esp);

    // Compruebo si esta definido extras
    if (isset($_GET['extras'])) {
        $extras = $_GET['extras'];

        $palomitas = 2;
        $bebida = 3;
        $nachos = 4;

        echo "<p>Has seleccionado como extras: </p>";

        // Recorro el array de extras
        foreach ($extras as $extra) {

            echo "<p>$extra</p>";
            // Compruebo el valor de cada iteracion y sumo segun corresponda
            switch ($extra) {
                case "palomitas":
                    $total_a_pagar += $palomitas;
                    break;
                case "bebida":
                    $total_a_pagar += $bebida;
                    break;
                case "nachos":
                    $total_a_pagar += $nachos;
                    break;
            }
        }
    }

    if (isset($_GET['tipo_socio']) && $_GET['tipo_socio'] != 4) {
        $tipo_socio = $_GET['tipo_socio'];
        $total_a_pagar = comprobarDescuento($tipo_socio, $total_a_pagar);
    }


    echo "<p>El total a pagar es de $total_a_pagar €</p>";
}

function sumarTotal($ent_norm, $ent_esp, $ent_super_esp)
{
    $total_a_pagar = 0;
    $precio_normal = 4.5;
    $precio_esp = 5.5;
    $precio_super_esp = 6.5;

    $total_a_pagar += ($ent_norm * $precio_normal);
    $total_a_pagar += ($ent_esp * $precio_esp);
    $total_a_pagar += ($ent_super_esp * $precio_super_esp);

    return $total_a_pagar;
}

// No completado

function comprobarDescuento($tipo_socio, $total_a_pagar)
{
    //Contraseñas para las membresias
    $array_codigos = array("patata", "altramuz", "bbdd");
    // Quito el isset de codigo ya que siempre se va a mandar aunque no tenga valor 
    $codigo = $_GET['codigo'];
    $longuitud = strlen($codigo);
    if ($longuitud <= 0) {
        echo "<p>No se ha hecho ningun descuento porque no ha introducido un codigo</p>";
    } else {
        if ($codigo == $array_codigos[$tipo_socio]) {
            $descuento = true;
        }
    }

    if ($descuento) {
        $porcentaje_descuento = 0;
        switch ($codigo) {
            case 0:
                $porcentaje_descuento = 5;
                break;
            case 1:
                $porcentaje_descuento = 10;
                break;
            case 2:
                $porcentaje_descuento = 15;
                break;
        }
    }

    return $total_a_pagar;
}
