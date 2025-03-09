<?php 
 $servidor = "localhost";
 $usuario = "root";
 $contraseña = "";
 
 $conexion = new mysqli($servidor, $usuario, $contraseña);
 
 if ($conexion->connect_error) {
     die("Error: " . $conexion->connect_error);
 }
     
 $sql = 'CREATE DATABASE IF NOT EXISTS api';
 if($conexion -> query ($sql) === TRUE){
     echo "Base de datos creada correctamente<br>";
 }else{
     echo "Error: " . $conexion -> error;
 }
 
 $conexion -> select_db("api");

 $sql = 'CREATE TABLE IF NOT EXISTS usuarios (id INT (4) unsigned AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR (20) NOT NULL,
 email VARCHAR (30))';
 
 if($conexion->query($sql)===TRUE){
     echo "Tabla creada correctamente<br>";
 }else{
     echo "Error" . $conexion->error;
 }

 $sql = 'INSERT INTO usuarios (nombre,email) VALUES ("Pablo","pablo@gmail.com"), ("Messi","messi@gmail.com")';
 if($conexion->query($sql) ===TRUE){
     echo "Datos introducidos correctamente<br>";
 }else{
     echo "Error" . $conexion->error;
 }

?>