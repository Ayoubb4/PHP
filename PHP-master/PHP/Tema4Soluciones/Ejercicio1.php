<?php
// Nos envían un color en el formulario
if (isset($_POST['color'])) { 
    $color = $_POST['color'];
    setcookie('color', $color, time() + 3600); // Guardamos el color en una cookie durante 1 hora
} elseif (isset($_POST['borrar'])) {
    // Si el usuario quiere borrar la selección, eliminamos la cookie
    setcookie('color', '', time() - 3600); // Borrar la cookie configurando un tiempo en el pasado
    $color = ''; // Limpiar el valor de color
} else {
    // Si hay cookie, aplicamos el color de la cookie
    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
    } else {
        $color = ''; // Si no se ha seleccionado color, no hay color preferido
    }
}
?>

<html>
        <body>
        <form method="POST" action="ejercicio1.php">
            <label for="color">Seleciona tu color preferido:</label>
            <select name="color">
                <option value="red" <?php if (isset($color) && $color == 'red') echo 'selected'; ?>>Rojo</option>
                <option value="blue" <?php if (isset($color) && $color == 'blue') echo 'selected'; ?>>Azul</option>
                <option value="green" <?php if (isset($color) && $color == 'green') echo 'selected'; ?>>Verde</option>
                <option value="yellow" <?php if (isset($color) && $color == 'yellow') echo 'selected'; ?>>Amarillo</option>
            </select>
            <input type="submit" value="Guardar color" />
        </form>

        <?php if ($color) { ?>
        <!-- Si el usuario tiene un color preferido, mostramos un mensaje en ese color -->
        <p style="color: <?php echo $color ?>;">Tu color preferido es: <?php echo $color ?>.</p>
        <p>Si deseas cambiarlo o borrarlo, puedes hacerlo a continuación.</p>
        
    
        <?php } else { ?>
        <!-- Si no tiene color preferido, mostramos el formulario -->
        <p>Selecciona tu color preferido:</p>
        <?php } ?>

 <!-- Formulario para borrar la selección -->
 <form method="POST" action="ejercicio1.php">
            <input type="submit" name="borrar" value="Borrar selección" />
        </form>

    </body>
</html>

      