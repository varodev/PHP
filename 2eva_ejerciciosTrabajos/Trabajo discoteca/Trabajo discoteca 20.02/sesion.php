<?php
session_start();

if (!$_SESSION['logueado']) {
    session_destroy();
    header("location:index_sesiones.php");
    exit(); //arregla el problema de caducidad pinchando
}
if ($_SESSION['hora'] + 1800 < time()) {
    session_destroy();
    header("location:index_sesiones.php?mensaje=caducada");
}

if (isset($_SESSION['timeout'])) {
    $vida_session = time() - $_SESSION['timeout'];
    if ($vida_session > 1200) {
        session_destroy();
        header("location:index_sesiones.php?mensaje=inactividad");
    }
}
$_SESSION['timeout'] = time();
