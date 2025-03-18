<?php 
/* Crea dos páginas PHP:

preferencias.php: Permite elegir una canción favorita, ciudad favorita y hobby, y almacenarlas en la sesión.
mostrar.php: Muestra los valores almacenados con opción de eliminarlos. */

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar'])){
    $_SESSION['cancion'] = htmlspecialchars($_POST['cancion']);
    $_SESSION['ciudad'] = htmlspecialchars($_POST['ciudad']);
    $_SESSION['hobby'] = htmlspecialchars($_POST['hobby']);
    echo "Preferencias guardadas";
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
    <form action="preferencias.php" method='POST'>
        <input type="text" name="cancion">
        <input type="text" name="ciudad">
        <input type="text" name="hobby">

        <button type="submit" name="guardar">Guardar Preferencias</button>
    </form>

    <a href="mostrar.php">Mostrar Preferencias</a>
</body>
</html>