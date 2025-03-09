<?php 
session_start();

if(isset($_SESSION['usuario'])){
    header("Location: perfil.php");
    exit();
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
    <h1>Bienvennido al gym</h1>
    <a href="registro.php">Registrate</a>
    <a href="login.php">Login</a>
</body>
</html>