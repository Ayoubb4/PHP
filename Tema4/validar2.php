<?php
/*     $nombre = $edad = $email = "";
    $errores = [];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = filter_var(trim($_POST["nombre"]), FILTER_SANITIZE_STRING);
        $edad = filter_var($_POST["edad"], FILTER_VALIDATE_INT);
        $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

        if (!$nombre) {
            $errores[] = "Mete un nombre";
        }

        if (!$edad) {
            $errores[] = "Pon tu edad";
        }

        if (!$email) {
            $errores[] = "Pon tu email";
        }

        if (empty($errores)) {
            echo "Formulario enviado con exito<br>";
            echo "Nombre: $nombre<br>";
            echo "Edad: $edad<br>";
            echo "Email: $email<br>";
        }
    } */

    function sanitizeInput($input){
        return htmlspecialchars(trim($input));
    }

    function validateName($nombre){
        return preg_match("/[a-z A-Z]{2,}$/", $nombre);
    }

    function validateEdad($edad){
        return filter_var($edad, FILTER_VALIDATE_INT);
    }

    function validateEmail($email) {
        return filter_var($email, filter: FILTER_VALIDATE_EMAIL);
    }
    
    $nombre = "";
    $edad = "";
    $email = "";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = sanitizeInput($_POST["nombre"]);
        if (!validateName($nombre)) {
            $errores[] = "introduce tu nombre";
        }
    
        $edad = sanitizeInput($_POST["edad"]);
        if (!validateEdad($edad)) {
            $errores[] = "edad valida porfa";
        }
    
        $email = validateEmail($_POST["email"]);
        if (!$email) {
            $errores[] = "El email no es valido";
        }
        
        if (empty($errores)) {
            echo "Formulario enviado perfecto<br>";
            echo "Nombre: $nombre<br>";
            echo "Edad: $edad<br>";
            echo "Email: $email<br>";
        } else {
            echo "MAL PLAN <br>";
            foreach ($errores as $error) {
                echo $error;
            }
        }
    }
    ?>