<?php 
$servidor = "localhost";
$usuario = "root";
$contraseña = "";

$conexion = new mysqli($servidor, $usuario, $contraseña);

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}
    
$sql = 'CREATE DATABASE IF NOT EXISTS tienda';
if($conexion -> query ($sql) === TRUE){
    echo "Base de datos creada correctamente<br>";
}else{
    echo "Error: " . $conexion -> error;
}

$conexion -> select_db("tienda");

$sql = 'CREATE TABLE IF NOT EXISTS productos (id INT (4) unsigned AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR (20) NOT NULL,
precio DECIMAL (4,2),
descripcion VARCHAR(200) NOT NULL)';

if($conexion->query($sql)===TRUE){
    echo "Tabla creada correctamente<br>";
}else{
    echo "Error" . $conexion->error;
}


/* $sql = 'INSERT INTO productos (nombre,precio,descripcion) VALUES ("HUevo",5.00,"Huevo al KG"), ("Pan",6.50,"Pan al KG")';

if($conexion->query($sql) ===TRUE){
    echo "Datos introducidos correctamente<br>";
}else{
    echo "Error" . $conexion->error;
} */
/* $sql = 'DROP TABLE IF EXISTS productos';
$conexion->query($sql); */



?>