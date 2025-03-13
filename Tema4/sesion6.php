<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usuario_valido = "usuario";
    $contrasena_valida = "1234";

    if ($username === $usuario_valido && $password === $contrasena_valida) {
        $_SESSION['nombre'] = $username;
        echo "Bienvenido, " . htmlspecialchars($username) . "!";
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}

if (isset($_POST['logout'])) {
    session_unset();  
    session_destroy();
    echo "Sesion cerrada correctamente.";
}
?>
s
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
</head>
<body>

<?php 
    if (isset($_SESSION['nombre'])): ?>
    <form method="post">
        <input type="submit" name="logout" value="Cerrar Sesión">
    </form>
    
<?php else: ?>
    <h2>Iniciar Sesion</h2>
    <form method="post">
        <label for="username">Nombre de Usuario:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="login" value="Iniciar Sesión">
    </form>
<?php endif; ?>

</body>
</html>
