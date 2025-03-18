<?php
// Iniciar sesión y destruirla
session_start();
session_destroy();

// Redirigir al login
header("Location: login.php");
exit();
?>
