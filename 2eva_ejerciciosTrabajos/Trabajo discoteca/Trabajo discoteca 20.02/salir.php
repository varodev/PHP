    <?php
        session_start();
        session_destroy();
        header("location:index_sesiones.php?mensaje=destruido");
    ?>