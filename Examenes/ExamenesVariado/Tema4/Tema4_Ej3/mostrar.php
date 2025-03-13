<?php 
/* Crea dos páginas PHP:

preferencias.php: Permite elegir una canción favorita, ciudad favorita y hobby, y almacenarlas en la sesión.
mostrar.php: Muestra los valores almacenados con opción de eliminarlos. */
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['borrar'])){
        unset($_SESSION['cancion']);
        unset($_SESSION['ciudad']);
        unset($_SESSION['hobby']);
        echo "Preferencias eliminadas";
    }elseif(isset($_POST['cerrar'])){
        session_destroy();
        header("Location: preferencias.php");
        exit;
    }else{
        echo "na na";
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
    <?php 
        if(isset($_SESSION['cancion']) && isset($_SESSION['ciudad']) && isset($_SESSION['hobby'])){
            echo "<p><strong>Cancion fav:</strong> " . htmlspecialchars($_SESSION['cancion']) . "</p>";
            echo "<p><strong>ciudad fav:</strong> " . htmlspecialchars($_SESSION['ciudad']) . "</p>";
            echo "<p><strong>hobby fav:</strong> " . htmlspecialchars($_SESSION['hobby']) . "</p>";
        }else{
            echo "<p>No se ha encontrado preferencias en la sesion</p>";
        }
    ?>

    <form action="mostrar.php" method="POST">
        <input type="submit" name="borrar">Borrar</input>
        <input type="submit" name="cerrar">Cerrar sesion </input>
    </form>
</body>
</html>