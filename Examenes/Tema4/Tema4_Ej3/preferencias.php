<?php 
/* Crear el código PHP que dé respuesta al siguiente planteamiento:
Queremos gestionar una serie de preferencias del usuario.
En una página (preferencias.php) se permite al usuario elegir sus preferencias y las almacenara en la sesión del usuario. Estas serán: Película, Grupo musical, Equipo de Futbol. Tendrá un botón con el texto “Guardar preferencias”, que almacenara las preferencias en la sesión del usuario y volverá a cargar esta misma página en la que se mostrara el texto “Información guardada en la sesión”.
Y un enlace que ponga “Mostrar preferencias” que llevara a otra página (mostrar.php) en la que se debe mostrar un texto con las preferencias que se encuentran almacenadas en la sesión de usuario. 
Debajo de estas habrá un botón con el texto “Borrar preferencias” y se mostrará el texto “Información de la sesión eliminada” y otro con el texto “Cerrar sesión”.
 */


session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar'])){
    $_SESSION['pelicula']= htmlspecialchars($_POST['pelicula']);
    $_SESSION['grupo'] = htmlspecialchars($_POST['grupo']);
    $_SESSION['equipo'] = htmlspecialchars($_POST['equipo']);
    echo "Preferencias guardadas correctamente";
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
    <form action="preferencias.php" method="POST">
    <label for="pelicula">Película favorita:</label>
        <input type="text" name="pelicula" required><br><br>

        <label for="grupo">Grupo musical favorito:</label>
        <input type="text"  name="grupo" required><br><br>

        <label for="equipo">Equipo de fútbol favorito:</label>
        <input type="text"  name="equipo" required><br><br>

        <button type="submit" name="guardar">Guardar preferencias</button>
    </form>

    <a href="mostrar.php">Mostrar preferencias</a>

</body>
</html>