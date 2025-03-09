<?php 

include 'tienda.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $stmt = $conexion->prepare("UPDATE productos SET nombre = ?, precio = ?, descripcion = ? WHERE id = ?");
    $stmt->bind_param('sdsi', $nombre, $precio, $descripcion, $id);

        if ($stmt->execute()) {
            echo "Producto actualizado exitosamente.";
        } else {
            echo "Error al actualizar" . $stmt->error;
        }
}
?>