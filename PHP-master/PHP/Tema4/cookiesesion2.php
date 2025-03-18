<?php

session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0; 
}
    $_SESSION['contador']++;
    
echo 'Has ingresado ' . $_SESSION['contador'] . ' veces';

?>