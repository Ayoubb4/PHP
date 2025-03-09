<?php
function saludarUsuarios($nombres, $saludo = "Hola") {
    foreach ($nombres as $nombre) {
        echo "$saludo, $nombre\n";
    }
}

$usuarios = ["Messi", "VINI", "LoryMoney"];

saludarUsuarios($usuarios, "Buenos días");
?>
