<?php
   /*  session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
        $_SESSION['nombre'] = htmlspecialchars($_POST['nombre']);
    }

    if (isset($_SESSION['nombre'])) {
        echo "Bienvenido de nuevo, " . $_SESSION['nombre'] . "!";
    } else { */
?>
       <!--  <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>¿Como te llamas?</title>
        </head>
       <body>
        <h2>Como te llamas</h2>
        <form method="POST">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <input type="submit" value="Guardar nombre">
        </form>
       </body>
        </html>
    } -->
<?php 
session_start();


    if (isset($_SESSION['nombre'])) {
        echo "Bienvenido de nuevo, " . $_SESSION['nombre'] . "!\n";
    } else {
        echo "Como te llamas?\n";
    }
    
session_destroy();
?>