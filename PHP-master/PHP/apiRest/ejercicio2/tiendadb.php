
<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";


$conn = new mysqli($servidor, $usuario, $contraseña);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS Tienda";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada.<br>";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

$conn->select_db('Tienda');

$sql = "CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    descripcion TEXT
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla creada.<br>";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

$sql = "INSERT INTO productos (nombre, precio, descripcion) VALUES
    ('Carpeta', 5.2 , 'Clasificadora'),
    ('Mochila', 2, 'Azul, con ruedas')";

if ($conn->query($sql) === TRUE) {
    echo "Productos insertadas correctamente.<br>";
} else {
    echo "Error al insertar productos: " . $conn->error . "<br>";
}

?>