<?php
include 'tiendadb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
    
    /*if (isset($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['descripcion'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];*/
    
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    if ($id && $nombre && $precio && $descripcion) {
    $stmt = $conn->prepare("UPDATE productos SET nombre = ?, precio = ?, descripcion = ? WHERE id = ?");
    $stmt->bind_param("sdsi", $nombre, $precio, $descripcion, $id);

    if ($stmt->execute()) {
        echo "Producto actualizado correctamente.";
    } else {
        echo "Error al actualizar el producto.";
    }
} else {
    echo "Datos incompletos.";
} 

    $stmt->close();
}

?>
