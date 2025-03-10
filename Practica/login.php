<?php
session_start();

// Si se envia el formulario, procesamos los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    // Comprobamos usuario y contraseña (simulado con la cookie)
    if (isset($_COOKIE['ultimo_usuario']) && $nombre === $_COOKIE['ultimo_usuario'] && strlen($contrasena) == 6) {
        $_SESSION['usuario'] = $nombre;
        $_SESSION['rol'] = $_POST['rol'];
        header("Location: perfil.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sesion</h1>
    <form method="post">
        <input type="text" name="nombre" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Entrar</button>
    </form>
    <!-- Mostramos error si existe -->
    <?php if (!empty($error)) echo "<p>$error</p>"; ?>
</body>
</html>
<!-- 
    PHP:
    Si se manda el formulario (POST), comprobamos que el usuario y contraseña sean correctos.
    Comparamos el nombre con la cookie ultimo_usuario.
    Si todo OK, guardamos los datos en la sesion y te mando al perfil.php.

    HTML:
    Formulario para login.
    Si hay un error, se muestra debajo del formulario.
    La variable $error solo aparece si algo no cuadra, asi no ensuciamos el HTML.
-->