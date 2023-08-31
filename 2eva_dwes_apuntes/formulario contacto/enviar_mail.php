<?php
    if(isset($_POST['enviar_btn'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $mail = $_POST['mail'];
        $asunto_frm = $_POST['asunto'];//asunto q viene del formulario
        $mensaje = $_POST['mensaje'];

        $correo_de_entrega="alvmorapa87@gmail.com";
        $asunto="Consulta enviada desde el formulario web";
        $cuerpo_del_mensaje="Ha recibido una consulta desde la web\n"; 
        $cuerpo_del_mensaje.="____________________________________\n";
        $cuerpo_del_mensaje.="Nombre: ".$nombre."\n";
        $cuerpo_del_mensaje.="Telefono: ".$telefono."\n";
        $cuerpo_del_mensaje.="E-Mail: ".$mail."\n";
        $cuerpo_del_mensaje.="Asunto: ".$asunto_frm."\n";
        $cuerpo_del_mensaje.="Mensaje: ".$mensaje."\n";
        $cuerpo_del_mensaje.="____________________________________\n";

        if(mail($correo_de_entrega, $asunto, $cuerpo_del_mensaje)){
            $error=0;
        }else{
            $error=1;
        }
        header("location:contacto.php?error=$error");
    }else{//si se entra por algo q no sea contacto.php
        header("location:contacto.php");
    }
 ?>    
