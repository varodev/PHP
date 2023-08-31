<style>
    body{
        display: flex;
        height: 100vh;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #container{
        width: 80%;
    }

    #container,form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }


    label{
        font-family: sans-serif;
        font-size: 20px;
    }

    input,a{
        border-radius: 20px;
        border: 2px solid #000000;
        padding: 1em 2em;
        margin-top: 1em;
        text-decoration: none;
        color: #ffffff;
    }

    input[type="submit"],a{
        background-color: rgb(50,50,255,0.9);
    }

    .erroneo {
		color: rgb(221, 52, 52, 0.8);
	}

	.correcto {
		color: rgb(17, 201, 13, 0.8);
	}

  
</style>
<?php

    function generarBombo()
    {
        // Bucle del 1 al 100 para rellenar el array bombo
        for($numero= 1; $numero <= 100; $numero++){
            // posicion s la misma que $numero pero menos 1
            $bombo[$numero-1] = $numero;
        }

        // Devuelvo el array $bombo con los numeros ya dentro
        return $bombo;
    }

    function generarCarton()
    {
        // Hago un array con los numeros del 1 al 100 usando la funcion generarBombo()
        $array_numeros = generarBombo();

        //Cre el carton con un for 15 veces
        for($numero = 0; $numero < 15; $numero++)
        {
            // Se genera un numero aleatorio del 0 al tamaño del array
            $numero_aleatorio = rand(0,sizeof($array_numeros)-1);
            // Se añade el valor del array_numeros con el indice generado al array $carton con el indice de $numero
            $carton[$numero] = $array_numeros[$numero_aleatorio];
            // Borro el elemento que ha salido del array para que no se repita
            array_splice($array_numeros, $numero_aleatorio, 1);
        }

        // ordeno el carton de forma ascendente
        sort($carton);

        //Devuelvo el carton
        return $carton;
    }
//procesa/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function jugarBingo($bombo,$carton,$nombre){

        // Se genera un numero aleatorio del 0 al tamaño del array
        $numero_aleatorio = rand(0,sizeof($bombo)-1);
        // Cojo el valor en esa posicion
        $numero_bombo = $bombo[$numero_aleatorio];

        // Se comprueba que el numero que se ha generado esta en el carton 
        if(in_array($numero_bombo,$carton) == 1){//numero que vas comprobar y el array dnd lo vas a comprobar
            $resultado = 1;//si esta en array
             $encontrado = false;

                // Recorro el array hasta que encuentre el numero
                for($index = 0; $index < sizeof($carton) && !$encontrado; $index++)
                {
                    // Si es igual $encontrado sera la finalizacion del bucle
                    if($carton[$index] == $numero_bombo)
                    {
                        $encontrado = true;
                    }
                }
    
                array_splice($carton, $index-1, 1);
     
        } else {
            $resultado = 0;
        }

        // Borro el elemento que ha salido del array para que no se repita(siempre se quita)
        array_splice($bombo, $numero_aleatorio, 1);// sale la boal si o no
        
       if(sizeof($carton) == 0)
       {
            // $intentos sera el total (100) menos el tamaño actual del bombo
            $intentos = 100 - sizeof($bombo);
            header("Location:kevin_rodriguez_examen.php?fin&intentos=$intentos&nombre=$nombre");
       } else 
       {
        // Serializo $bombo y $carton
        $bombo = serialize($bombo);
        $carton = serialize($carton);

        // Redirigo a la pagina con los parametros
        header("Location:kevin_rodriguez_examen.php?jugando&resultado=$resultado&numero_bombo=$numero_bombo&nombre=$nombre&bombo=$bombo&carton=$carton");
       }
    }/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    // Se comprueba si esta bombo en la url
    if(isset($_GET['bombo'])){
        $bombo = unserialize($_GET['bombo']);
    } else if (!isset($_GET['fin'])){ 
        // Sino se genera si no esta definido fin
        $bombo = generarBombo();
    }

    // Se comprueba si no esta carton en la url
    if(isset($_GET['carton'])){
        $carton = unserialize($_GET['carton']);
    } else if (!isset($_GET['fin'])){ 
        // Sino se genera si no esta definido fin
        $carton = generarCarton();
    }

    if(isset($_GET['pedir_numero'])){
        // Se coge el nombre
        if(isset($_GET['nombre']))
        {
            $nombre = $_GET['nombre'];
        }

        jugarBingo($bombo,$carton,$nombre);
    }

    // Se entrara solo la primera vez y que sera cuando no esta definido nada
    if(!isset($_GET['enviar']) && !isset($_GET['jugando']) && !isset($_GET['fin']))
    {
        echo "<meta charset='UTF-8'>";
        echo "
        <div id='container'>
            <form name='form_examen' action='kevin_rodriguez_examen.php' method='GET'>
                <label>Escriba su nombre:</label>
                <input type='text' name='nombre' autofocus required>
                <input type='submit' name='enviar' value='Enviar'>
            </form>
        </div>
        ";
    } else if((isset($_GET['jugando'])) || isset($_GET['enviar'])) 
    { // Entrara si esta definido jugando o enviar
        echo "<meta charset='UTF-8'>";

        // Se coge el nombre
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre'];
        }
        
        // Se muestra el nombre
        echo "<div id='container'>
            <p>Hola $nombre, tus numeros restantes son:</p>
        </div>";
        
        // Recorro el array de carton
        foreach($carton as $numero){
            echo " $numero |";
        }

        // Muestro el tamaño de $bombo y $carton
        echo "<p>Numeros de carton restantes: " . sizeof($carton) . "</p>";
        echo "<p>Numeros en el bombo restantes: " . sizeof($bombo) . "</p>";

        //Se comprueba que este definido $resultado
        if(isset($_GET['resultado']))
        {
            // Se coge el valor de $reusltado y $numero del bombo
            $resultado = $_GET['resultado'];// 1 estq y 0 no esta
            $numero_bombo = $_GET['numero_bombo'];

            // Si es uno es que han coincidido
            if($resultado == 1)
            {
                echo "<p class='correcto'>Ha salido el numero $numero_bombo. Has acertado y lo tacho del cartón</p>";
               
            } else 
            { // Sino es que los numeros no han coincidido
                echo "<p class='erroneo'>Ha salido el numero $numero_bombo. No está en el cartón</p>";
            }
        }

        // Serializo $bombo y $carton
        $bombo = serialize($bombo);
        $carton = serialize($carton);

        echo "<a href='kevin_rodriguez_examen.php?jugando&pedir_numero&nombre=$nombre&bombo=$bombo&carton=$carton'>Pedir numero</a>";

    } else if(isset($_GET['fin']))
    {// Entrara si esta definido fin
        // Compruebo si nombre esta en la url
        if(isset($_GET['nombre'])){
            // Cojo su valor
            $nombre = $_GET['nombre'];
        }

        // Compruebo si intentos esta en la url
        if(isset($_GET['intentos'])){
            // Cojo su valor
            $intentos = $_GET['intentos'];
        }
        echo "<div id='container'>
            <p>Enhorabuena $nombre, has cantado bingo con $intentos extracciones de bolas</p>
            <a href='kevin_rodriguez_examen.php' title='Volver a jugar'>Volver a jugar</a>
        </div>";
    }


?>

