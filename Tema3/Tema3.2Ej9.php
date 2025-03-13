<?php
$nombres = ["Messi", "VINI", "Anton", "Joao"];

foreach ($nombres as $nombre) {
    if ($nombre == "VINI") {
        continue;
    }
    echo $nombre . "\n";
}
?>
