<!-- tabla alumnos y id, nombre, nota y asignatura, 1 forma -->
<?php 

$servidor = "localhost";
$usuario = "root";
$contraseña = "";

$conexion = mysqli_connect($servidor,$usuario,$contraseña);
if(!$conexion){
    die("Error " . mysqli_connect_error());
}
echo "Conectado correctamente<br>"; 

$sql = "CREATE DATABASE IF NOT EXISTS instituto";
if(mysqli_query($conexion,$sql)){
    echo"BBDD creada correctamente<br>";
}else{
    echo"Error" . mysqli_error($conexion);
}
mysqli_select_db($conexion,"instituto");

$sql = "CREATE TABLE IF NOT EXISTS alumnos (id INT (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(20), nota DECIMAL(4,2), asignatura VARCHAR (30))";
if(mysqli_query($conexion,$sql)){
    echo"Tabla creada correctamente<br>";
}else{
    echo"Error" . mysqli_error($conexion);
}

/* $sql = "INSERT INTO alumnos (nombre,nota,asignatura) VALUES 
('Pedro',5.5,'Matematicas'), 
('Luis',7.7,'Lengua y Literatura')";
if(mysqli_query($conexion,$sql)){
    echo"Datos insertada correctamente <br>";
}else{
    echo"Error" . mysqli_error($conexion);
} */




 
 ?>