<!-- Enunciado:
Crea un formulario en HTML para registrar usuarios con los siguientes campos:

Nombre de usuario
Contraseña
Confirmar contraseña
Correo electrónico
En el archivo PHP que procese el formulario:

Verifica que:
El nombre de usuario tenga al menos 5 caracteres.
La contraseña y su confirmación coincidan.
El correo electrónico sea válido.
Si todos los datos son correctos, muestra un mensaje de éxito.
Si hay errores, lista cada uno de ellos.
Pista: Usa funciones para validar contraseñas y correos. -->


<?php 
    $errores = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"]);
        $contraseña = $_POST["contraseña"];
        $confirmarcontraseña = $_POST["confirmarcontraseña"];
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

        if(strlen($nombre)<5){
            $errores[] = "El nombre tiene menos de 5 caracteres";
        }

        if($contraseña !== $confirmarcontraseña){
            $errores[]= "Las contrasñas no coinciden";
        }

        if (!$email) {
            $errores[]= "El email esta mal";
        }

        if (empty($errores)) {
            echo "Formulario enviado con éxito:<br>";
            echo "Nombre de usuario: $nombre<br>";
            echo "Correo electrónico: $email<br>";
        }else{
            foreach($errores as $error){
                echo "- $error <br>";
            }
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
    <form action="Ejercicio5.php" method="POST">
        <label for="name">Nombre</label>
            <input type="text" name="nombre" id="nombre">

        <label for="password">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña">
        <label for="password">Confirma Contraseña</label>
            <input type="password" name="confirmarcontraseña" id="confimarcontraseña">

        <label for="email">EMAIL</label>
            <input type="email" name="email" id="email">

        <button type="submit">Registrar</button>

    </form>
   
    
</body>
</html>