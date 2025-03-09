<?php
session_start();

$_SESSION['nombre'] = 'George';

echo 'El nombre guardado es: ' . $_SESSION['nombre'];
?>
