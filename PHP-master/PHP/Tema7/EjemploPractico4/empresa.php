<!-- id,nombre,email,telefono tabla clientes -->
<?php

$servidor = "localhost";
$usuario = "root";
$contraseña ="";

try {
    
    $conexion = new PDO("mysql:host = $servidor", $usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="CREATE DATABASE IF NOT EXISTS empresa";
    $conexion->exec($sql);
    echo"base de datos creada<br>";

    $conexion->exec("USE empresa");

    $sql="CREATE TABLE IF NOT EXISTS clientes (id INT (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR (20), email VARCHAR (30), telefono INT (9))";
    $conexion->exec($sql);
    echo"Tabla creada correctamente<br>";

/*     $sql = "INSERT INTO clientes (nombre,email,telefono) VALUES ('Pedro','pedro@email.com',654789123), ('Daniel','daniel@email.com', 623321987)";
    $conexion->exec($sql);
    echo "Datos introducidos correctamente<br>"; */

} catch (PDOException $e) {
    echo"Error " . $e->getMessage(). "Consulta" . $sql;
}
 ?>