<?php

    $peliculasVistas = [
        "Enero" => 9,
        "Febrero" => 12,
        "Marzo" => 0,
        "Abril" => 17
    ];

    foreach ($peliculasVistas as $mes => $cantidad) {
        if ($cantidad > 0) {
            echo "En $mes se han visto $cantidad\n";
        }
    }

?>