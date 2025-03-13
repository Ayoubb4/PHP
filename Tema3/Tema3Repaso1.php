<?php
$numero = array();
$cuadrado = array();
$cubo = array();

for ($i = 0; $i < 20; $i++) {
    $numero[$i] = rand(0, 100);

    $cuadrado[$i] = $numero[$i] ** 2; 
    
    $cubo[$i] = $numero[$i] ** 3; 
}

echo "Numeros: " . implode(", ", $numero) . "\n"; 
echo "Cuadrados: " . implode(", ", $cuadrado) . "\n"; 
echo "Cubos: " . implode(", ", $cubo) . "\n"; 
?>
