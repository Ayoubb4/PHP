<?php 
$servidor = "localhost";
$usuario = "root";
$constraseña = "1234";
$base_datos = "mi_base_datos";


$conexion = mysqli_connect($servidor,$usuario,$constraseña,$base_datos);

if(!$conexion){
    die("Conexion fallida " . mysqli_connect_error());
}
echo "Conectado correctamente";


/* App para gestionar datos de viajeros: DNI, Nombre, apellidos y fecha de nacimiento, creamos formulario para añadir cada usuario a la base de datos */

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $dni = $_POST["dni"];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];



}


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Viajeros</h1>
    <form method="POST" action="">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <button type="submit">Añadir</button>
    </form>
</body>
</html>