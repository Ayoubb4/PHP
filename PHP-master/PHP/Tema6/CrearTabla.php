<!-- CREAR TABLA -->

<?php 
$servidor = "localhost";
$usuario = "usuario";
$constraseña = "contraseña";
$base_datos = "baseDatos"; 

$conn = new mysqli($servidor,$usuario,$constraseña,$base_datos);

$sql = 'CREATE TABLE baseDatos (id INT (4) unsigned AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR (20) NOT NULL,
apellido VARCHAR (20) NOT NULL,
email VARCHAR (30))';

/* 1ºforma  Basica*/
if(mysqli_query($conn,$sql)){
    echo "Tabla creada";
}else{
    echo "Error rabla no creada". mysqli_error($conn);
}

/* 2º forma Orientada a objetos*/
if ($conn -> query ($sql) ===TRUE){
    echo "Tabla creada";
}else{
    echo "error". $conn->error;
}

/* 3º forma PDO */

try{
    $conn = new mysqli($servidor,$usuario,$constraseña,$base_datos);

    $sql = 'CREATE TABLE baseDatos (id INT (4) unsigned AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (20) NOT NULL,
    apellido VARCHAR (20) NOT NULL,
    email VARCHAR (30))';

    echo "Tabla Creada";
}catch(PDOException $e){
    echo "Error al crear tabla:". $e->getMessage();
}