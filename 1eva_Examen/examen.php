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

    function generarCarton(){
        $carton = array();
        //Mientras el tamaño del array sea menor a 15 entra:
        while(sizeof($carton) < 15){
            // Se genera un num aleatorio
            $aleatorio = rand(1,100);
            //Si no esta en el array, lo introduzco
            if(!in_array($aleatorio,$carton)){
                // Lo introduce al final del array
                $carton[]=$aleatorio;
            }
        }

        sort($carton);

        return $carton;
    }

    function jugarBingo(){
        $bombo=generarBombo();
        $carton=generarCarton();
        echo"<h2>Numeros del cartón</h2>";
        foreach($carton as $numero){
            echo $numero. " || ";
        }

        $aciertos=0;
 
        while($aciertos<15){

            $aleatorio = rand(0,sizeof($bombo)-1);

            $bola=$bombo[$aleatorio];

            array_splice($bombo,$aleatorio,1);

            if(in_array($bola,$carton)){
                $aciertos++;
                echo "<p>Ha salido el numero $bola. Has acertado y lo tacho del cartón</p>";
            }
        }
        
        echo "<p>Enhorabuena, has cantado bingo ".(100 - sizeof($bombo))." </p>";
    }

    jugarBingo();
?>