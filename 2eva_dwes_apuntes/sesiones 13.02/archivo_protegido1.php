<?php
    require_once('sesion.php');//requiere una vez lo de sesion.php
    //Caduca a los 15 segundos (si o si)
    if(($_SESSION['hora']+15)<time()){
        //Habría caducado la sesion
        session_destroy();
        header("location:index_sesiones.php?mensaje=caducada");
        
    }/*else{
        echo "<a href='archivo_protegido2.php'>Archivo 2</a>";
    }*/

    //Caduca a los 5 segundos de inactividad(mover ratón no vale)
    
    if(isset($_SESSION['timeout'])){
        $vida_sesion = time()-$_SESSION['timeout'];
        if($vida_sesion>5){
            //La sesion habría caducado por inactividad
            session_destroy();
            header("location:index_sesiones.php?mensaje=inactividad");
        }
    }
    
    echo "<a href='archivo_protegido2.php'>Archivo 2</a></br>";
    echo "<a href='salir.php'>¿desea cerrar sesión de la app?</a>";   
    

    $_SESSION['timeout']=time();
    ?>