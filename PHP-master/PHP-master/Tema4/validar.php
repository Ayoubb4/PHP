<?php 
/*     $email = "sergio@gmail.com";
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);

    if (!filter_var($email,FILTER_SANITIZE_EMAIL) === false) {

        echo"El email es correcto";
    }else{
        echo"El email es incorrecto";
    }*/

    
?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP con Filtros</title>
</head>
<body>
    

    <form action= validar2.php method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
