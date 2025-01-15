<?php
$numeros = [2, 4, 11, 12, 8, 9, 3, 5, 7];
$cont = 0; 

foreach ($numeros as $numero) {
    if ($numero > 10 || $numero % 2 == 0) {
        continue; 
    }
    
    echo $numero . "\n"; 
    $cont++; 

    if ($cont >= 3) { 
        break; 
    }
}
?> 
