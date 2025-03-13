<?php 
    session_start();


//funciones para sanear y validar los input en el que se mira que no haya ataques por inyeccion y no haya espacios en blanco
    function sanitizeInput($input){
        return htmlspecialchars(trim($input));
    }

    function validateName($name){
        return preg_match("/^[a-z A-Z]{2,}$/", $name);
    }

    function validateEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
//si detecta que se le ha enviado informacion la valida y posteriormente la almacena en sus correspondientes sesiones para que no se pierdan, y se te redirige a la pagina de acceso que puedes ver las reservas que tienes realizadas
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre = sanitizeInput($_POST['nombre']);
        $correo = sanitizeInput($_POST['correo']);
        if(validateName($nombre) && validateEmail($correo) && isset($_POST['entrar'])){
            echo "Datos correctos";
            $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
            $_SESSION['correo'] = htmlspecialchars($_POST['correo']);
            header("Location: acceso.php");
            exit;
        }else{
            echo "Datos invalidos. verifica tu informacion";
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
    <h1>Reservas de Eventos</h1>
        <h2>Iniciar Sesion</h2>

    <form action="" method="POST">
        Nombre: <input type="text" name="nombre" id="nombre" required>
        Correo: <input type="email" name="correo" id="correo" required>
        
        <input type="submit" name="entrar" value="entrar">
    </form>
</body>
</html>