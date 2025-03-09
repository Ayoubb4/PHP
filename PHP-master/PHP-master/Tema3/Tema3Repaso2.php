<?php
/* Escribe un programa que pida 10 números por teclado y que luego muestre los números
introducidos junto con las palabras "máximo" y "mínimo" al lado del máximo y del mínimo
respectivamente. */
$numeros = array();

for ($i = 0; $i < 10; $i++) {
    echo "Mete el num " . ($i + 1) . ": ";
    $numero = (int)trim(fgets(STDIN));
    $numeros[] = $numero;

}

$maximo = max($numeros);
$minimo = min($numeros);

echo "Los números introducidos son:\n";

foreach ($numeros as $numero) {
    if ($numero == $maximo) {
        echo "$numero (máximo)\n";
    } elseif ($numero == $minimo) {
        echo "$numero (mínimo)\n";
    } else {
        echo "$numero\n";
    }
}
?>
