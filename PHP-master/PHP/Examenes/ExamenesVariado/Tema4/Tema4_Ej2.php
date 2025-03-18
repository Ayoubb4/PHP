<?php 
/* Crea un formulario para validar:

Número de teléfono (mínimo 9 dígitos).
Email (formato correcto).
Edad (número positivo).
Muestra "Datos correctos" o "Datos inválidos. Verifica la información". */

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $telefono = sanitizeInput($_POST['telefono']);
    $email = sanitizeInput($_POST['email']);
    $edad = sanitizeInput($_POST['edad']);

    if(validatePhone($telefono) && validateAge($edad) && validateEmail($email)){
        echo"Datos correctos";
    }else{
        echo "Datos invalidos, Verifica";
    }
}

function sanitizeInput($input){
    return htmlspecialchars(trim($input));
}

function validatePhone($phone){
    return preg_match("/^\d{9,}$/",$phone);
}
function validateAge($edad){
    return filter_var($edad, FILTER_VALIDATE_INT) && $edad > 0;
}

function validateEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
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
    <form action="Tema4_Ej2.php" method='POST'>
        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad">

        <input type="submit" value= Guardar >
    </form>
</body>
</html>