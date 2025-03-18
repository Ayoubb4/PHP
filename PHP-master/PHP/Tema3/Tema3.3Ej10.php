<?php
    $nombres = ["Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa"];
    
    $numeroElementos = count($nombres);
    echo "El array contiene $numeroElementos elementos.\n";


    echo "<ul>";
    foreach ($nombres as $nombre) {
        echo "<li>$nombre</li>";
    }
    echo "</ul>";
?>