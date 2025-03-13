<?php
// Iniciar la sesión
session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar'])) {
        // Guardar las preferencias en la sesión
        $_SESSION['pelicula'] = htmlspecialchars($_POST['pelicula']);
        $_SESSION['grupo'] = htmlspecialchars($_POST['grupo']);
        $_SESSION['equipo'] = htmlspecialchars($_POST['equipo']);
        echo "Preferencias guardadas correctamente.";
    }
    ?>


<body>
    <h1>Selecciona tus preferencias</h1>
    <form action="preferencias.php" method="post">
        <label for="pelicula">Película favorita:</label>
        <input type="text" name="pelicula" required><br><br>

        <label for="grupo">Grupo musical favorito:</label>
        <input type="text"  name="grupo" required><br><br>

        <label for="equipo">Equipo de fútbol favorito:</label>
        <input type="text"  name="equipo" required><br><br>

        <button type="submit" name="guardar">Guardar preferencias</button>
    </form>
    <br>
    <a href="mostrar.php">Mostrar preferencias</a>
