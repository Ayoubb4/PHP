
<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";

try {
    $conn = new PDO("mysql:host=$servidor", $usuario, $contraseña);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
        echo "Conexión establecida.<br>";
    
    $conn->exec("CREATE DATABASE IF NOT EXISTS Empresa");
    echo "Base de datos creada.<br>";

    $conn->exec("USE Empresa");

    $sql = "CREATE TABLE IF NOT EXISTS empleados (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        email VARCHAR(100) NOT NULL,
        telefono VARCHAR(20) NOT NULL
    )";
    $conn->exec($sql);
    echo "Tabla creada.<br>";

    $sql = "INSERT INTO empleados (nombre, email, telefono) VALUES
            ('Juan Perez', 'juan@example.com', '123456789'),
            ('Ana Gomez', 'ana@example.com', '987654321')";
         
    $conn->exec($sql);
    echo "Empleados insertados correctamente.<br>";

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>




