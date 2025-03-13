<?php
session_start();

// Comprobamos si hay sesion activa
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Asignamos variables
    $usuario = $_SESSION['usuario'];
    $rol = $_SESSION['rol'];
    $titulo = "Bienvenido, $usuario";

// Contenido segun el rol
    if ($rol === 'usuario') {
        $contenido = '<p>Tu Membresia: Basica</p><a href="clases.php">Ver Clases</a>';
    } elseif ($rol === 'profesor') {
        $contenido = '<p>Clases y Usuarios</p>';
    } elseif ($rol === 'admin') {
        $contenido = '<p>Gestion Completa</p>';
    } else {
        $contenido = '<p>Rol no reconocido</p>';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <a href="logout.php">Cerrar Sesion</a>
    <div>
        <?php echo $contenido; ?>
    </div>
</body>
</html>
<!-- 
    PHP:
    Manejamos la sesion y validamos que el usuario este logueado. Si no, lo mandamos al login.
    Dependiendo del rol, definimos el contenido que luego se muestra.

    HTML:
    Solo usamos echo para mostrar las variables ya preparadas en el php.
-->