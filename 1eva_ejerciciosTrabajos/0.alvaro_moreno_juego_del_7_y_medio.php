<style>
	body {
		height: 100vh;
		justify-content: center;
	}

	#container_numero,
	form,
	body {
		display: flex;
		flex-direction: column;
		align-items: center;
	}
    
    #container_enlaces{
        display: flex;
        justify-content: space-evenly;
    }

    #container_enlaces > a {
        padding: 20px;
        text-decoration: none;
        margin: 10px 15px 0px 15px;
    }

    a{
        color: #ffffff;
    }
    

	input,
	label,
	p,
	h1{
		margin: 20px auto;
		text-align: center;
	}

	h1,
	label,
	p,
	a {
		font-family: sans-serif;
	}

	input,a {
		padding: 1em 5em;
		border-radius: 20px;
		border: 2px solid rgb(166, 158, 158, .9);
		transition: border .5s;
	}

	input[type="submit"],a {
		padding: 1em 2em;
		background-color: rgb(29, 29, 170, 0.9);
		color: white;
		transition: background 1s;
		border: 2px solid rgb(0, 0, 0, .8);
	}


	input[type="submit"]:hover {
		background-color: rgb(85, 78, 199, 0.9);
	}

	.erroneo {
		color: rgb(221, 52, 52, 0.8);
	}

	.correcto {
		color: rgb(17, 201, 13, 0.8);
	}

	a {
		color: rgb(29, 29, 170, 0.7);
	}

	a:hover {
		color: rgb(85, 78, 199, 1);
	}

</style>

<?php
echo "<meta charset='UTF-8'>";
echo "<h1>Juego del 7 y medio</h1>";


// Compruebo que se envia la variable Jugar o pedir carta
if (isset($_GET['Jugar']) || isset($_GET['pedir_carta'])) {

    // Compruebo si exite el nombre, la baraja, el numero del usuario y el numero de la banca
    if (isset($_GET['nombre']) && isset($_GET['baraja']) && isset($_GET['numero']) && isset($_GET['numero_banca'])) 
    {
        // Recojo sus valores
        $nombre = $_GET['nombre'];
        // Se hace un unserialize para poder manipular el array
        $baraja = unserialize($_GET['baraja']);
        $numero = $_GET['numero'];
        $numero_banca = $_GET['numero_banca'];
    }

    // Se genera un numero aleatorio 
    $aleatorio = rand(0, sizeof($baraja));

    // Se coje el valor en la posicion generada
    $numero_array = $baraja[$aleatorio];

    // Entra si el jugador ha solicitado carta o si es el primer intento
    if ($_GET['pedir_carta'] == 1 || $_GET['intento'] == 1) 
    {
        // Sumo el valor obtenido del array al numero del usuario
        $numero += $numero_array;

        // Elimino de $baraja desde la posicion generada, un intento
        array_splice($baraja, $aleatorio, 1);

        // Se hace un Serialize para poder enviar la baraja
        $baraja = serialize($baraja);

        // Reenvio a la pagina con algunos valores cambiados
        header("Location:0.alvaro_moreno_juego_del_7_y_medio.php?nombre=$nombre&intento=0&numero=$numero&numero_banca=$numero_banca&baraja=$baraja");

    } else if ($_GET['pedir_carta'] == 0) // Si entra es porque se ha plantado 
    {
        

        // Cojo el numero de la banca
        $numero_banca = $_GET['numero_banca'];

        // (Funcion) Mientras sea menor a 5 se sumara el numero generado aleatoriamente y se elimina la posicion
        // Devuelve el numeor de la banca
        $numero_banca = generarNumeroBanca($numero_banca,$baraja);

        // Se hace un Serialize para poder enviar la baraja
        $baraja = serialize($baraja);

        // Reenvio a la pagina con algunos valores cambiados
        header("Location:0.alvaro_moreno_juego_del_7_y_medio.php?nombre=$nombre&intento=0&numero=$numero&numero_banca=$numero_banca&baraja=$baraja");
    }
}



// Se crea el array de numeros del 1 al 7
for ($numero = 1; $numero <= 7; $numero++) 
{
    for ($iteracion = 0; $iteracion < 4; $iteracion++) 
    {
        $baraja[] = $numero;
    }
}

// Se crea el array de numeros de 0.5 12 veces
for ($iteracion = 0; $iteracion < 12; $iteracion++) 
{
    $baraja[] = 0.5;
}


if (isset($_GET['intento']) && isset($_GET['numero'])) 
{
    $intento = $_GET['intento'];
    $numero = $_GET['numero'];
} 
else 
{
    $intento = 1;
    $numero = 0;
}

if (isset($_GET['numero_banca'])) 
{
    $numero_banca = $_GET['numero_banca'];
} else {
    $numero_banca = 0;
}

if ($intento == 1) {
    $baraja = serialize($baraja);
    echo "
            <div id='container_nombre'>
                <form name='formulario' action='0.alvaro_moreno_juego_del_7_y_medio.php' method='GET' enctype='application/x-www-form-urlencoded'>
                    <label for='nombre'>Escriba su nombre</label>
                    <input type='text' name='nombre' required autofocus>
                    <input type='hidden' name='intento' value='$intento' hidden>
                    <input type='hidden' name='numero' value='$numero' hidden>
                    <input type='hidden' name='numero_banca' value='$numero_banca' hidden>
                    <input type='hidden' name='baraja' value='$baraja' hidden>
                    <input type='submit' name='Jugar' value='Jugar'>
                </form>
            </div>
        ";
} else if ($_GET['numero'] < 7.5 && $_GET['numero_banca'] == 0) {

    // Compruebo si exite el nombre, la baraja, el numero del usuario y el numero de la banca
    if (isset($_GET['nombre']) && isset($_GET['baraja']) && isset($_GET['numero']) && isset($_GET['numero_banca'])) 
    {
        // Recojo sus valores
        $nombre = $_GET['nombre'];
        // Se hace un unserialize para poder manipular el array
        $baraja = unserialize($_GET['baraja']);
        $numero = $_GET['numero'];
        $numero_banca = $_GET['numero_banca'];
    }

    // Se muestra el nombre y el numro obtenido la primera vez
    echo "<p>Hola $nombre tiene un $numero</p>";

    $baraja = serialize($baraja);
    echo "<div id='container_enlaces'>
            <a href='0.alvaro_moreno_juego_del_7_y_medio.php?nombre=$nombre&intento=0&numero=$numero&numero_banca=$numero_banca&pedir_carta=1&baraja=$baraja'>Pedir carta</a>
            <a href='0.alvaro_moreno_juego_del_7_y_medio.php?nombre=$nombre&intento=0&numero=$numero&numero_banca=$numero_banca&pedir_carta=0&baraja=$baraja'>Plantarse</a>
        </div>";
} else {

    // Compruebo si exite el nombre, la baraja, el numero del usuario y el numero de la banca
    if (isset($_GET['nombre']) && isset($_GET['baraja']) && isset($_GET['numero']) && isset($_GET['numero_banca'])) 
    {
        // Recojo sus valores
        $nombre = $_GET['nombre'];
        // Se hace un unserialize para poder manipular el array
        $baraja = unserialize($_GET['baraja']);
        $numero = $_GET['numero'];
        $numero_banca = $_GET['numero_banca'];
    }

    // No se pide que cuando el usuario se pase de 7.5 muestre su numero
    // Por defecto sera 0, pero yo lo genero por se acaso yo lo genero
    // Si se pasa el numero del usuario se mostraria solo, $nombre, te has pasado.
    if($numero_banca == 0)
    {
        // (Funcion) Mientras sea menor a 5 se sumara el numero generado aleatoriamente y se elimina la posicion
        // Devuelve el numeor de la banca
        $numero_banca = generarNumeroBanca($numero_banca,$baraja);

    }
    // Se comprueba los datos recibidos y se muestra el mensaje pertinente
    comprobarResultado($nombre, $numero, $numero_banca);
}

// Se comprueba los datos recibidos y se muestra el mensaje pertinente
function comprobarResultado($nombre, $numero, $numero_banca)
{

    // Si el numero del usuario es menor o igual a 7.5 y la banca se pase, gano
    // O si el numero del usuario es mayor al de la banca pero menor o igual a 7.5
    if ($numero <= 7.5 && $numero_banca > 7.5 || $numero > $numero_banca && $numero <= 7.5) 
    {
        echo "<p class='correcto'>Hola $nombre. Has ganado con un  $numero porque la banca saco un $numero_banca</p>";     
    } 
    else 
    {
        // Entra si el numero del usuario es igual al de la banca 
        // O es menor al de la banca y este es menor o igual a 7.5
        // O el numero del usuario es mayor a 7.5
        echo "<p class='erroneo'>Hola $nombre. Has perdido, tu has sacado un $numero, y la banca saco un $numero_banca </p>";
    }

    // Enlace para volver a jugar
    echo "<a href='0.alvaro_moreno_juego_del_7_y_medio.php' title='Volver a jugar'>Volver a jugar</a>";
}

// (Funcion) Mientras sea menor a 5 se sumara el numero generado aleatoriamente y se elimina la posicion
// Devuelve el numeor de la banca
function generarNumeroBanca($numero_banca,$baraja)
{

    while ($numero_banca < 5) 
    {
        $aleatorio = rand(0, sizeof($baraja));
        $numero_array = $baraja[$aleatorio];
        array_splice($baraja, $aleatorio, 1);
        $numero_banca += $numero_array;     
    }
    
    return $numero_banca;
}