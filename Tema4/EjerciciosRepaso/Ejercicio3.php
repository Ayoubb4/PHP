<!-- Validación de Formularios

Tarea 3: Crea un formulario en HTML que pida un nombre y un correo. Luego, utiliza PHP para:
Validar que los campos no estén vacíos.
Sanitizar el nombre.
Validar que el correo sea válido. -->

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if (empty($nombre) || empty($email)) {
        echo "Los campos son obligatorios";
    }

    if ($email == false) {
        echo "El email no es valido";
    }else {
        echo "El email es valido, tu nombre es $nombre";
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
    <h1>Introduce los datos</h1>
    <form action="Ejercicio3.php" method="POST">
        <label for="name">Nombre</label>
            <input type="text" name="nombre" placeholder="Introduce tu nombre">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Introduce tu email">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>