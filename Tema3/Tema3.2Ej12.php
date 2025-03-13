<?php
$suma = 0;

while (true) { 
    $numero_aleatorio = rand(1,10); 
    $suma += $numero_aleatorio; 

    if ($suma >= 50) { 
        break; 
    }

}

echo "La suma es: $suma\n"; 
?>
