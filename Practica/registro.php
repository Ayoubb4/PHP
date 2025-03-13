<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $rol = $_POST['rol'];

    // Validar nombre de usuario y contraseña
    $error = '';
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{6,}$/', $nombre)) {
        $error = "El nombre debe tener al menos 6 letras combinando mayusculas y minusculas.";
    } elseif (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{6}$/', $contrasena)) {
        $error = "La contraseña debe tener exactamente 6 caracteres combinando letras y numeros.";
    } else {
        // Guardamos la cookie y redirigimos
        setcookie('ultimo_usuario', $nombre, time() + 3600); // Cookie dura 1 hora
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form method="post">
        <input type="text" name="nombre" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Registrarse</button>
    </form>
    <?php 
    // Mostramos errores si los hay
    if (!empty($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
<!-- Si el nombre o la contraseña no cumplen los requisitos, mostramos mensajes claros y concretos al usuario. -->