<?php
/* Escribe un script PHP que permita ordenar el siguiente array asociativo: 1
array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27") • De forma
ascendente ordenado por valor. • De forma ascendente ordenado por clave. • De forma
descendente ordenado por valor. • De forma descendente ordenado por clave. */

$personas = array("Antonio" => "31", "María" => "28", "Juan" => "29", "Pepe" => "27");


    asort($personas);
    echo "Orden ascendiente  por valor:\n";
    foreach ($personas as $nombre => $edad) {
        echo "$nombre: $edad\n";
    }

    ksort($personas);
    echo "\nOrden ascendiente por clave:\n";
    foreach ($personas as $nombre => $edad) {
        echo "$nombre: $edad\n";
    }

    arsort($personas);
    echo "\nOrden descendiente por valor:\n";
    foreach ($personas as $nombre => $edad) {
        echo "$nombre: $edad\n";
    }
    
    krsort($personas);
    echo "\nOrden descendiente por clave:\n";
    foreach ($personas as $nombre => $edad) {
        echo "$nombre: $edad\n";
    }

?>