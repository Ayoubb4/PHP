<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $telefono = sanitizeInput($_POST["telefono"]);
    $email = sanitizeInput($_POST["email"]);
    $edad = sanitizeInput($_POST["edad"]);

    if (validatePhone($telefono) && validateEmail($email) && validateAge($edad)) {
        echo "Datos correctos. ¡Gracias!";
    } else {
        echo "Datos inválidos. Por favor, verifica la información.";
    }
}

function sanitizeInput($input) {
    return htmlspecialchars(trim($input));
}

function validatePhone($phone) {
    return preg_match("/^\d{9,}$/", $phone);
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateAge($age) {
    return filter_var($age, FILTER_VALIDATE_INT) && $age > 0;
}
?>

<form method="post" action="">
    Teléfono: <input type="text" name="telefono" required><br>
    Correo Electrónico: <input type="email" name="email" required><br>
    Edad: <input type="number" name="edad" required><br>
    <button type="submit">Validar</button>
</form>