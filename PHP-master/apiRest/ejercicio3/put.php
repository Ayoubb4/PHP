<?php
include 'empresadb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

    if (isset($_POST['id'], $_POST['nombre'], $_POST['email'], $_POST['telefono'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];


            $sql = "UPDATE empleados SET nombre = :nombre, email = :email, telefono = :telefono WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo "Empleado actualizado correctamente.";
            } else {
                echo "Error al actualizar el empleado: " ;
            }
        } else {
            echo "ID no válido.";
        }
    } else {
        echo "Datos incompletos.";
    }
?>



