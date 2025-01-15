<!-- Ejercicio: Formulario con Validación, Cookies y Sesiones
Enunciado:
Crea un sistema de inicio de sesión simple con las siguientes características:

Formulario de inicio de sesión:

Campos: Nombre de usuario y contraseña.
Validaciones:
Ambos campos deben ser obligatorios.
El nombre de usuario debe tener al menos 5 caracteres.
Si las validaciones fallan, muestra los errores correspondientes.

Uso de Sesiones:

Si el usuario inicia sesión correctamente, almacena su nombre de usuario en una sesión para recordarlo mientras esté en la aplicación.
Muestra un mensaje de bienvenida usando la sesión.

Uso de Cookies:

Si el usuario marca la opción "Recordar usuario", guarda su nombre de usuario en una cookie durante 7 días.
Al regresar a la página, el nombre de usuario debe aparecer automáticamente en el campo correspondiente.
Opciones adicionales:

Opción para cerrar sesión, lo cual elimina la sesión y la cookie si existiera. -->
<?php 
session_start();

    $errores = [];
    $nombre_usuario ="";
    $password = "";

    if (isset($_COOKIE["nombre_usuario"])) {
        $nombre_usuario = $_COOKIE["nombre_usuario"];
    }

//Validaciones

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre_usuario = trim($_POST["nombre_usuario"]);
        $password = trim($_POST["password"]);
        $recordar = $_POST["recordar"];
    }

    if(strlen($nombre_usuario) < 5){
        $errores[]=  "El nombre tiene que tener mas de 5 caracteres";
    }

    if(empty($password)){
        $errores[] = "La contraseña esta vacia";
    }

    if(empty($errores) && $nombre_usuario == "admin" && $password == "admin"){
        $_SESSION["nombre_usuario"]= $nombre_usuario;

        echo"Bienvenido $nombre_usuario";

        if($recordar){
            setcookie('nombre_usuario', $nombre_usuario, time() + (7 * 24 * 60 * 60), "/");
        }
    }






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="EjercicioCompleto.php" method="POST">
        
        <label for="nombre_usuario">Nombre de usuario:</label>
            <input type="text" id="nombre_usuario" name="nombre_usuario" value="<?= htmlspecialchars($nombre_usuario) ?>">

        <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">

        <label>
            <input type="checkbox" name="recordar" <?= isset($_POST['recordar']) ? 'checked' : '' ?>>
            Recordar usuario
        </label>

        
        <button type="submit">Iniciar Sesión</button>

    </form>
</body>
</html>
<?php 




?>