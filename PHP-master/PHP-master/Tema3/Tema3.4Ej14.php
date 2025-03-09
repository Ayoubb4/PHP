<?php
function esPrimo($numero) {
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) return false;
    }
    return $numero > 1;
}
echo esPrimo(3) ? 'Es primo' : 'No es primo';

?>
