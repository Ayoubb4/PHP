<?php
include 'empresadb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
   
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM empleados WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Empleado eliminado correctamente.";
        } else {
            echo "Error al eliminar el empleado: ";
        }
    } else {
        echo "ID no válido.";
    }
} else {
    echo "Método no permitido.";
}
?>

