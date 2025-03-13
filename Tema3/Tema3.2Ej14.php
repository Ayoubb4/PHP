<?php
$suma = 0; 
$i = 1; 

while ($i <= 20) { 
    if ($i % 2 != 0) { 
        $suma += $i; 
    }
    $i++; 
}

echo "La suma es: $suma\n"; 
?>
