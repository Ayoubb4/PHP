<?php
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("color", $color, time() + 4000);  
} else {
    $color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white';  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Color de Fondo</title>
</head>

<body style="background-color: <?php echo $color; ?>;">
    <h1>Selecciona color:</h1>
    <form action="index.php" method="post">
        <label for="color">Selecciona Color</label>
        <select name="color" id="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="orange">Orange</option>
        </select>
        <input type="submit" value="Cambiar Color">
    </form> 
</body>
</html>