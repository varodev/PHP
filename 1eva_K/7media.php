<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>7 y media</title>
</head>
<body>
	<?php

		//que va a pasar cuando se envie, 1era vez jugar, sguiente pedir carta
	if(isset($_GET['Jugar'])||isset($_GET['pedir_carta'])){
			if (isset($_GET['nombre']) && isset($_GET['baraja']) && isset($_GET['numero']) && isset($_GET['numero_banca'])){
				$nombre=$_GET['nombre'];
				$baraja=unserialize($_GET['baraja']);
				$numero = $_GET['numero'];
        		$numero_banca = $_GET['numero_banca'];
        	}	
///////////////////procesa///////////////////////////////////
//cojemos posicion un numero aleatorio del array
     	$aleatorio= rand(0, sizeof($baraja) -1);
		//valor del numero aleatorio asociado a la posicion
     	$numero_array=$baraja[$aleatorio];
     	//$numero +=$numero_array;
     	//pedir carta condicion $intento == 1 o pedir crta con el enlace.
/*********************************************/
	//
     	if($_GET['pedir_carta']==1 || $_GET['intento']==1){
	//se suma el valor de las cartas
	$numero += $numero_array;
	//se elimina la carta que has sumado

	//le toca jugar la máquina cuando ['pedir_carta']==0 o $_GET['intento']==0
	   	}else{
	   		while ($numero_banca <5){
	   			$numero_banca += $numero_array;
	   		}
	   	}
		array_splice($baraja, $aleatorio, 1);
	
			$baraja=serialize($baraja);	
		header("Location:7media.php?intento=0&nombre=$nombre&numero=$numero&numero_banca=$numero_banca&baraja=$baraja");
		}//isset($_GET['Jugar'])||isset($_GET['pedir_carta']
//creo el array abajo y lo serializo y cuando le de a jugar lo desserializo
		//el primer for es el valor de las cartas del 1 al 7
		if(isset($_GET['baraja'])){//para que no reinicie el valor cada que pides carta
			$baraja = $_GET['baraja'];
				$baraja=unserialize($baraja);	
		}else{
		for($numero =1; $numero<=7; $numero++){
			//otro for para crear los 4 palos
			for($iteracion =0; $iteracion<4; $iteracion++){
				$baraja[]=$numero; //es lo q vas a añadir
			}
		}
		
		for($numero =0; $numero<12; $numero++){
			$baraja[]=0.5;
		}	

		//añades los 12

		/*foreach ($baraja as $numero) {
			echo("$numero |");
		}*/
		//serializar de manera local
		$baraja=serialize($baraja);	
		
	}
		if(isset($_GET['intento'])){
			$intento=$_GET['intento'];
			$numero=$_GET['numero'];
			$numero_banca=$_GET['numero_banca'];
			$nombre=$_GET['nombre'];
			
		}else{
			$intento=1; // la primera vez
			$numero=0; //reset de $numero
			$numero_banca=0; //reset de $numero
	
		}

		if($intento !=0){// o ==1
		echo "
		<form name='formulario' action='7media.php' method='GET' enctype='application/x-www-form-urlencoded'>
	 			
                    <label for='nombre'>Escriba su nombre</label>
                    <input type='text' name='nombre' required autofocus>
                    <input type='hidden' name='intento' value='$intento' hidden>
                    <input type='hidden' name='numero' value='$numero' hidden>
                    <input type='hidden' name='numero_banca' value='$numero_banca' hidden>
                    <input type='hidden' name='baraja' value='$baraja' hidden>
                    <input type='submit' name='Jugar' value='Jugar'>
                </form>";
        }else if(($numero < 7.5) && $numero_banca ==0){
        	//pedir carta 1 si pides, 0 plantarse
        	$baraja=serialize($baraja);	
        	echo"
        	<a href='7media.php?pedir_carta=1&intento=0&nombre=$nombre&numero=$numero&numero_banca=$numero_banca&baraja=$baraja'>Pedir carta<a>
        	<a href='7media.php?pedir_carta=0&intento=0&nombre=$nombre&numero=$numero&numero_banca=$numero_banca&baraja=$baraja'>Plantarse<a>
        	";
        	//el numero que vas acumulando si pides otra carta
        			
        		echo"<p>Tienes $numero</p>";
        }else{
        	if ($numero_banca==0){
        		while ($numero_banca <5){
        			$aleatorio= rand(0, sizeof($baraja) -1);
					//valor del numero aleatorio asociado a la posicion
     				$numero_array=$baraja[$aleatorio];
	   				$numero_banca += $numero_array;
	   				array_splice($baraja, $aleatorio, 1);
	   			}
        	}
        
        	if(($numero <= 7.5 && $numero_banca >7.5)||($numero > $numero_banca && $numero <= 7.5)){
        		echo"<p>Has ganado, Tienes $numero y el numero de la banca es $numero_banca</p>";
        	}else{
        		echo"<p>Has perdido, Tienes $numero y el numero de la banca es $numero_banca</p>";
        	}
        	//echo"<p><a href='7media.php'>testeo</a></p>";
       }  

	?>
	</body>
	</html>