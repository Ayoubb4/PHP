<?php
include 'tiendadb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
    /*if (isset($_POST['id'])) {
        $id = $_POST['id'];*/
    
    $id = $_POST['id'];

    if ($id) {
    $stmt = $conn->prepare("DELETE FROM productos WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error al eliminar el producto.";
    }
} else {
    echo "ID del producto no proporcionado.";
}

    $stmt->close();
}

?>
