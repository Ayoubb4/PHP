<?php
function calcularDescuento($precio, $descuento = 10) {
    $cantidadDescuento = ($precio * $descuento) / 100;
    $precioFinal = $precio - $cantidadDescuento;
    
    return $precioFinal;
}

$precio = 100;
$resultado = calcularDescuento($precio);
echo "Precio final: $resultado\n";
?>