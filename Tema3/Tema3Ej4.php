<?php

    $edad = 30;
    $permiso = false;

    if ($edad >= 18) {
        if ($permiso = true) {
            echo "Tiene permisos y es mayor de edad";
        }
    }else {
        echo "No tiene permiso y es menor de edad ";
    }

?>