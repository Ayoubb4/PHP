<?php
function saludoPersonalizado($hora = null) {
    if ($hora === null) {
        return "Hola";
    } elseif ($hora < 12) {
        return "Buenos dias";
    } elseif ($hora < 18) {
        return "Buenas tardes";
    } else {
        return "Buenas noches";
    }
}

echo saludoPersonalizado() . "\n";
echo saludoPersonalizado(9) . "\n";
echo saludoPersonalizado(15) . "\n";
echo saludoPersonalizado(20) . "\n";
?>
