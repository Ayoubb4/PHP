<?php
    function unirArrays($array1, $array2) {
        return array_merge($array1, $array2);
    }

    $array1 = array(1, 2, 3);
    $array2 = array(4, 5, 6);
    $resultado = unirArrays($array1, $array2);

    echo implode(", ", $resultado);


?>
