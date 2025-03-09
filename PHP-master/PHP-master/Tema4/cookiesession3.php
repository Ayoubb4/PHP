<?php
session_start();
session_destroy();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $usuario_valido = "admin";
        $contraseñavalida = "12345";

        if ($username === $usuario_valido && $password === $contraseñavalida) {
            echo "Bienvenido!";

        } else {
            echo "Incorrecto";
        }
    } else {


        
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <h2>Inicia Sesion</h2>
    <form action= "cookiesession3.php"method="post">
        <label for="username">Nombre de Usuario:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Iniciar Sesión">        
        <input type="submit" value="Cerrar Sesion">

    </form>
</body>
</html>
<?php
}
?>
