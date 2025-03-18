<?php
$nombres = ["Ana", "Luis", "Carlos", "mario"];
$nombre_a_mostrar = null;

foreach ($nombres as $nombre) {
    if ($nombre == "Carlos") { 
        $nombre_a_mostrar = $nombre;
        break; 
    }
}

if ($nombre_a_mostrar !== null) {
    echo "El nombre es: $nombre_a_mostrar\n";
}
?>
