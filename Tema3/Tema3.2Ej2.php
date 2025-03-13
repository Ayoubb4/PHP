<?php
    $contraseñaCorrecta = 1234;
    $intentos = 0;
    $introducida = 1234;

    while ( $intentos != 3) {
        if ( $contraseñaCorrecta == $introducida) {
            echo"Contraseña es buena <br>";
            $intentos = 3;
        }else{
            echo "la contraseña es mala <br>";
            $intentos ++;
            echo $intentos ." intentos <br> <br>";

        }
    }
?>