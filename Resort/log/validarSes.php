<?php
// session_start();
// if (!isset($_SESSION['usuario'])) {
//     header('location: ../login.php');
// }

session_start();

// Establecer tiempo de vida de la sesión en segundos

$inactividad = 1800;


// Comprobar si $_SESSION["timeout"] está establecida
if(isset($_SESSION["timeout"])){
    // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
    $sessionTTL = time() - $_SESSION["timeout"];
    if($sessionTTL > $inactividad){
        session_unset();
        session_destroy();
        header("Location: ../index.php");
    }else{
    // Si a habido actividad en la pagina, se reinicia la sesión
        $_SESSION["timeout"] = time();
    }
}else{
    // Si el usuario no se logea correctamente, se destruye la sesion y se manda a que se loguee de nuevo
    session_destroy();
    header("Location: ../index.php");
}



?>