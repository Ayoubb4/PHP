<?php 
/* Crear el código PHP que dé respuesta al siguiente planteamiento:
Queremos gestionar una serie de preferencias del usuario.
En una página (preferencias.php) se permite al usuario elegir sus preferencias y las almacenara en la sesión del usuario. Estas serán: Película, Grupo musical, Equipo de Futbol. Tendrá un botón con el texto “Guardar preferencias”, que almacenara las preferencias en la sesión del usuario y volverá a cargar esta misma página en la que se mostrara el texto “Información guardada en la sesión”.
Y un enlace que ponga “Mostrar preferencias” que llevara a otra página (mostrar.php) en la que se debe mostrar un texto con las preferencias que se encuentran almacenadas en la sesión de usuario. 
Debajo de estas habrá un botón con el texto “Borrar preferencias” y se mostrará el texto “Información de la sesión eliminada” y otro con el texto “Cerrar sesión”.
 */
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['borrar'])){
        unset($_SESSION['pelicula']);
        unset($_SESSION['grupo']);
        unset($_SESSION['equipo']);
        echo "Preferencias eliminadas";
    }elseif (isset($_POST['cerrar'])) {
        session_destroy();
        header("Location: preferencias.php");
        exit;
    }else{
        echo "Nada de nada";
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
        if(isset($_SESSION['pelicula']) && isset($_SESSION['grupo']) && isset($_SESSION['equipo'])){
            echo "<p><strong>Pelicula Favorita:</strong> ". htmlspecialchars($_SESSION['pelicula']). "</p>";
            echo "<p><strong>Grupo Favorito:</strong> ". htmlspecialchars($_SESSION['grupo']). "</p>" ;
            echo "<p><strong>Equipo Favorito:</strong> ". htmlspecialchars($_SESSION['equipo']). "</p>";
        }else{
            echo "<p>No se han encontrado preferencias en la sesion</p>";
        }
    ?>

    <form action="mostrar.php" method="post">
        <input type="submit" name="borrar">Borrar preferencias</input>
        <input type="submit" name="cerrar">Cerrar Sesion</input>
    </form>
</body>
</html>