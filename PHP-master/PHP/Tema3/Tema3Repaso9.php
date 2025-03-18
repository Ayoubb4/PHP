<?php
/* Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una nota
numérica y muestre un mensaje indicando la calificación obtenida teniendo en cuenta
los siguientes rangos: • Insuficiente: [0, 5) • Suficiente: [5, 6) • Bien: [6, 7) • Notable: [7,
9) • Sobresaliente: [9, 10] */
                                   
    $nota= rand(0,10);
    $mensaje = "";

    if ($nota < 5) {
        $mensaje = "Insuficiente";
    } elseif ($nota < 6) {
        $mensaje = "Suficiente";
    } elseif ($nota < 7) {
        $mensaje = "Bien";
    } elseif ($nota < 9) {
        $mensaje = "Notable";
    } else if ($nota <= 10) {
        $mensaje = "Sobresaliente";
    }else{
        echo "Nota no compatible";

    }

    echo"Has sacado un: $nota equivalente a $mensaje\n.";


?>