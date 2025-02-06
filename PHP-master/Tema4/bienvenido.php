<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header(header: "Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h2>
        Bienvenido, 
        <?php echo htmlspecialchars($_SESSION['usuario']); ?>
    </h2>
    <p>Has iniciado sesion</p>
    <a href="cerrarsesion2.php">Cerrar sesion</a> 
</body>
</html>
