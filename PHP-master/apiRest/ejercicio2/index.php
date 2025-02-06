<?php
include 'tiendadb.php';

// Método GET: Obtener todos los productos
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $resultado = $conn->query("SELECT * FROM productos");

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "ID: " . $fila ['id'] . " - Nombre: " . $fila ['nombre'] . " - Precio: " . $fila ['precio'] . " € - Descripción: " . $fila['descripcion'] . "<br>";
        }
    } else {
        echo "No se encontraron productos.";
    }
}

// Método POST: Insertar un nuevo producto
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    if ($nombre && $precio && $descripcion) {
    $stmt = $conn->prepare("INSERT INTO productos (nombre, precio, descripcion) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $nombre, $precio, $descripcion);

    if ($stmt->execute()) {
        echo "Producto agregado correctamente.";
    } else {
        echo "Error al agregar el producto.";
    }
} else {
        "Datos incompletos.";
    }
}

?>
