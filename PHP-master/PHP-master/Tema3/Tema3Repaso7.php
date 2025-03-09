<?php
function calcular_media($numeros) {
    $suma = 0;
    $count = count($numeros);

    foreach ($numeros as $numero) {
        $suma += $numero;
    }

    if ($count > 0) {
        return $suma / $count;

    }else{
        return 0;
    }
}

    $valores=[10, 20, 30, 40, 50];
    $media = calcular_media($valores);

    echo "La media es $media";
?>