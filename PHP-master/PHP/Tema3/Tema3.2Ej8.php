<?php
$i = 1;

while ($i <= 10) {
    if ($i % 2 == 0) {
        $i++;
        continue;
    }
    echo $i . "\n";
    $i++;
}
?>
