<?php
function minMaxArray($array) {
    if (empty($array)) {
        return null;
    }

    return array('min' => min($array), 'max' => max($array));
}

    $resultado = minMaxArray(array(5, 3, 9, 1, 8));
    echo "Min: " . $resultado['min'] . ", Max: " . $resultado['max']; 

?>
