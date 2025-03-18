<?php 
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

$clases = ['Yoga', 'Pilates', 'Spinning'];

// Generamos el contenido de la lista como un string
$listaClases = '';
foreach ($clases as $clase) {
    $listaClases .= "<li>$clase</li>";
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clases</title>
</head>
<body>
    <h1>Clases Disponibles</h1>
    <ul>
        <?php echo $listaClases; ?>
    </ul>
</body>
</html>