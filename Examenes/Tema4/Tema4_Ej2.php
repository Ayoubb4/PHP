<?php
/* Crea el código PHP que dé respuesta al siguiente planteamiento:
Queremos sanear y validar los datos ingresados (teléfono, correo electrónico y una edad) en un formulario para comprobar que los datos son correctos (“Datos correctos”) o inválidos (“Datos inválidos. Verifica la información”).
El teléfono contiene solo números y tiene al menos 9 dígitos ( "/^\d{9,}$/" ), el correo tendrá un formato válido y la edad será un numero entero positivo. 
 */

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $telefono = sanitizeInput($_POST['telefono']);
    $correo = sanitizeInput($_POST['correo']);
    $edad = sanitizeInput($_POST['edad']);

    if(validatePhone($telefono) && validateEmail($correo) && validateAge($edad)) {
        echo "Datos correctos";
    }else{
        echo "Datos invalidos. Verifica la informacion";
    }
}


function sanitizeInput($input){
    return htmlspecialchars(trim($input));
}

function validatePhone($phone){
    return preg_match("/^\d{9,}$/", $phone);
}

function validateEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateAge($age){
    return filter_var($age, FILTER_VALIDATE_INT) && $age > 0;
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
    <form action="Tema4_Ej2.php" method="POST">
        Teléfono: <input type="text" name="telefono" required><br>
        Correo Electrónico: <input type="correo" name="correo" required><br>
        Edad: <input type="number" name="edad" required><br>
        <button type="submit">Validar</button>
    </form>
</body>
</html>