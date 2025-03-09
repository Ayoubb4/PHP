<?php
$ciudades = ["Barcelona", "Madrid", "Valencia", "Sevilla", "Bilbao"];
$encontrada = false; 

foreach ($ciudades as $ciudad) {
    if ($ciudad === "Madrid") { 
        $encontrada = true;
        break; 
    }
}


if ($encontrada) {
    echo "Madrid esta en la lista.\n";
} else {
    echo "Madrid no esta en la lista.\n";
}
?>
