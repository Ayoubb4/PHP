<?php 


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $rol = $_POST['rol'];

    $error='';

    if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z]).{6,}$/',$nombre)){
        $error="Nombre mal";
    }elseif(!preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{6}$/',$contraseña)){
        $error = "Contraseña mal";
    }else{
        setcookie('ultimo_usuario', $nombre, time() + 3600);
        header("Location: login.php");
        exit();
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
    <h1>Registro</h1>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <select name="rol">
            <option value="usuario">Usuario</option>
            <option value="profesor">Profesor</option>
            <option value="admin">Administrador</option>
        </select>
        <button type="submit">Registrarse</button>
        <?php if(!empty($error)):?>
            <p><?php echo $error; ?></p>
        <?php endif;?>
    </form>
</body>
</html>