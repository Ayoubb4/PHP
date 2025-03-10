<?php
session_start();

// Si ya estas logueado, te mando al perfil
if (isset($_SESSION['usuario'])) {
    header("Location: perfil.php");
    exit();
}

// Nada mas aqui, solo la pagina de inicio
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido al Gym</h1>
    <a href="registro.php">Registrarse</a>
    <br>
    <a href="login.php">Iniciar Sesion</a>
</body>
</html>

<!--
    PHP: Primero controlo si estas logueado. Si lo estas, fuera de aqui, directo a perfil.php.
    HTML: Nada de historias raras, dos links para registrarse o iniciar sesion. Limpio y directo.
    Sesion activa: Con session_start() siempre controlamos si alguien esta conectado. 
-->