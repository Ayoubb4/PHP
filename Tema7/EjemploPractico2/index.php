<?php

include 'tienda.php';

if($_SERVER['REQUEST_METHOD'] ==='GET'){
    
    $sql = 'SELECT * FROM productos';
    $resultado= $conexion -> query($sql);
    if($resultado->num_rows>0){
        while($fila = $resultado->fetch_assoc()){
            echo "ID{$fila ['id']}<br> Nombre:{$fila ['nombre']}, Precio:{$fila ['precio']}, Descripcion:{$fila ['descripcion']}<br>";
        };
    }
}

/* Metodo POST para el formulario */
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $stmt = $conexion->prepare('INSERT INTO productos(nombre, precio, descripcion) VALUES (?,?,?)');
    $stmt->bind_param('sds', $nombre, $precio, $descripcion);

    if($stmt -> execute()){
        echo"Producto nuevo";
    }else{
        echo "Error". $conexion->error;
    }
}
?>