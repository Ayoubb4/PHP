<?php
if (isset($_POST['color'])) {
    $colorSeleccionado = $_POST['color'];
    
    setcookie("color_fondo", $colorSeleccionado, time() + (86400 * 30));

    header(header: "Location: index.html");
    exit();
}

$colorFondo = isset($_COOKIE["color_fondo"]) ? $_COOKIE["color_fondo"] : "white";


?>
