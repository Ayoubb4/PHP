<?php
$numerospares = array();

for ($i = 1; $i <= 10; $i++) {
    $numerospares[] = $i * 2;
}

foreach ($numerospares as $numero) {
    echo $numero . "<br>";
}
?>
