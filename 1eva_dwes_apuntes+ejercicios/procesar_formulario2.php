<?php
    if(isset($_GET['enviar_btn'])){

        if(isset($_GET['turno'])){
            $turno = $_GET['turno'];
            
            comprobarTurno($turno);
        }

        if(isset($_GET['dia'])){
            $dia = $_GET['dia'];

            echo "<p> Has elegido el $_GET[dia] </p>";
        }

        // Entrara si no hay ningun checkbox marcado
        if(!(isset($_GET['aficiones']))){
            header('Location:formulario2.php?mensaje');
        } else {
             // Recogo su valor, el cual sera un contenido de un array
             $aficiones = $_GET['aficiones'];

             echo "<p>Has seleccionado las siguientes aficiones:</p>";
 
             foreach($_GET['aficiones'] as $aficion){
                 echo "<p>$aficion</p>";
             }
        }
       

        //var_dump($aficiones);

        

    } 

    function comprobarTurno($turno){
        switch($turno){
            case "t1":
                echo "Has seleccionado el turno de mañana";
                break;
            case "t2":
                echo "Has seleccionado el turno de tarde";
                break;
            default:
                echo "Has seleccionado el turno de noche";
                break;
        }
    }


?>