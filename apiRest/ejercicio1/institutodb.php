<?php
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';

$conn = mysqli_connect($servidor, $usuario, $contrasena);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conectado exitoxamente.<br>";

$sql = "CREATE DATABASE IF NOT EXISTS Instituto";
if (mysqli_query($conn, $sql)) {
    echo "Base de datos creada.<br>";
} else {
    echo "Error al crear la base de datos: " . mysqli_error($conn) . "<br>";
}


mysqli_select_db($conn, 'Instituto');


$sql = "CREATE TABLE IF NOT EXISTS alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla creada.<br>";
} else {
    echo "Error al crear la tabla: " . mysqli_error($conn) . "<br>";
}

$sql = "INSERT INTO alumnos (nombre, email) VALUES
    ('Juan', 'juan@email.com'),
    ('Ana', 'ana@gmail.com;')";

if (mysqli_query($conn, $sql)) {
    echo "Alumnos insertados correctamente.<br>";
} else {
    echo "Error al insertar alumnos: " . mysqli_error($conn) . "<br>";
}


?>