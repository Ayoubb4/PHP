<?php
$edad = 20; 
$rol = 'usuario'; 

    if ($edad >= 18) {

        if ($rol == 'admin') {
            echo "El usuario es administrador.";
        } elseif ($rol == 'editor') {
            echo "El usuario es editor.";
        } elseif ($rol == 'usuario') {
            echo "El usuario es estándar.";
        } else {
            echo "no conocido.";
        }
    } else {
        echo "El usuario es menor";
    }
?>
