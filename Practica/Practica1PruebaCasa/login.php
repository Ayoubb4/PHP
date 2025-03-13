<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    

    if(isset($_COOKIE['ultimo_usuario']) && $nombre === $_COOKIE['ultimo_usuario'] && strlen($contraseña)== 6){
        $_SESSION['usuario'] = $nombre;
        $_SESSION['rol'] = $_POST['rol'];
        header("Location: perfil.php");
        exit();
    }else{
        $error = "usuario o contra incorrecta";
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
    <form action="" method="post">
    <input type="text" name="nombre" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Entrar</button>
    </form>
    <?php if (!empty($error)) echo "<p>$error</p>"; ?>
</body>
</html>