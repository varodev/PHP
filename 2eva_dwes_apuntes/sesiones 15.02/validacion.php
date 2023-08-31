<?php
//vamos a "validar" por código
if(isset($_POST['enviar'])){
    
    if($_POST['usuario']=="Pepe" && $_POST['pass']== "1234"){
        //Simulamos identificacion contra BBDD. 
        //Existe el usuario, por lo tanto ABRIMOS UNA SESION
        session_start();
        //Vamos a crear 3 variables de sesión:
        $_SESSION['logueado']=true;//Saber si la sesión sigue vigente.
        $_SESSION['usuario']=$usuario;
        $_SESSION['hora']=time();
        header("location:archivo_protegido1.php");

    }else{
        header("location:index_sesiones.php?mensaje=error");
    }
}else{
    header("location:index_sesiones.php");
}

?>