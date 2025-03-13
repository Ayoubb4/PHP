<?php 
include 'api.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
    parse_str(file_get_contents("php://input"), $_PUT);

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $stmt = $conexion->prepare("UPDATE Usuarios SET nombre = ?, email = ? WHERE id = ?");
    $stmt->bind_param('ssi', $nombre, $email, $id);

        if ($stmt->execute()) {
            echo "Usuario actualizado exitosamente.";
        } else {
            echo "Error al actualizar usuario: " . $stmt->error;
        }
}
?>