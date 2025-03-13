<?php
// Iniciar la sesión
session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['borrar'])) {
            // Borrar solo las preferencias
            unset($_SESSION['pelicula']);
            unset($_SESSION['grupo']);
            unset($_SESSION['equipo']);
            echo "Información de la sesión eliminada.";
        } elseif (isset($_POST['cerrar'])) {
            // Cerrar la sesión por completo
            session_destroy();
            header("Location: preferencias.php");
            exit;
        } else {
            echo "No ocuure nada";
        }
    }
    
?>

<body>
    <h1>Tus preferencias</h1>

    <?php
    if (isset($_SESSION['pelicula']) && isset($_SESSION['grupo']) && isset($_SESSION['equipo'])) {
        echo "<p><strong>Película favorita:</strong> " . htmlspecialchars($_SESSION['pelicula']) . "</p>";
        echo "<p><strong>Grupo musical favorito:</strong> " . htmlspecialchars($_SESSION['grupo']) . "</p>";
        echo "<p><strong>Equipo de fútbol favorito:</strong> " . htmlspecialchars($_SESSION['equipo']) . "</p>";
    } else {
        echo "<p>No se han encontrado preferencias en la sesión.</p>";
    }
    ?>

    <form action="mostrar.php" method="post">
        <button type="submit" name="borrar">Borrar preferencias</button>
        <button type="submit" name="cerrar">Cerrar sesión</button>
    </form>

    
</body>
