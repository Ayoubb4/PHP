<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = htmlspecialchars($_POST['usuario']);
    $contrasena = htmlspecialchars($_POST['contrasena']);
    
    if ($usuario == "admin" && $contrasena == "1234") {
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenido.php");
        exit();
    } else {
        $mensaje = "No son las credenciales correctas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($mensaje)) echo "<p style='color:red;'>$mensaje</p>"; ?>
    <form action="" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        
        <input type="submit" value="Iniciar Sesion">
    </form>
</body>
</html>
