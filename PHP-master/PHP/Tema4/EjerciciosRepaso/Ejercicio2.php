<!-- Trabajando con Sesiones

Tarea 2: Implementa un sistema que:
Inicie una sesión y almacene el nombre de usuario.
Muestre el nombre de usuario mientras la sesión esté activa.
Destruya la sesión al cerrar la aplicación. -->

<?php 

    session_start();

    $_SESSION["usuario"] = "Ayoubb";

    if (isset($_SESSION["usuario"])) {
        echo "La session esta almacenada con el nombre: <br>" . $_SESSION["usuario"];
    }else{
        echo"La session no esta guardada";
    }

    session_destroy();



?>