<?php 

include 'empresa.php';

try {
    /* Forma sin BIND */
/*     if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT'){
        parse_str(file_get_contents("php://input"), $_PUT);
    
        $id = $_PUT['id'];
        $nombre = $_PUT['nombre'];
        $email = $_PUT['email'];
        $telefono = $_PUT['telefono'];
    
        $sql = "UPDATE clientes SET nombre = ?, email = ?, telefono = ? WHERE id = ?";
        $resultado = $conexion -> prepare($sql);
        $resultado->execute([$nombre, $email, $telefono, $id]);

        if ($resultado->rowCount() > 0) {            
            while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                echo "ID: {$fila['id']}, Nombre: {$fila['nombre']}, Email: {$fila['email']}, Telefono: {$fila['telefono']}";
            }
            echo"Datos actualizados";
        }
    } */

    /* Forma con BIND */

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT'){
            parse_str(file_get_contents("php://input"), $_PUT);


            if (isset($_PUT['id'], $_PUT['nombre'], $_PUT['email'], $_PUT['telefono'])) {
                $sql = "UPDATE clientes SET nombre = :nombre, email = :email, telefono = :telefono WHERE id = :id";
                $stmt = $conexion->prepare($sql);
                
                $stmt->bindParam(':id', $_PUT['id']);
                $stmt->bindParam(':nombre', $_PUT['nombre']);
                $stmt->bindParam(':email', $_PUT['email']);
                $stmt->bindParam(':telefono', $_PUT['telefono']);
        
                if ($stmt->execute()) {
                    echo "Cliente actualizado correctamente.";
                } else {
                    echo "Error al actualizar el cliente.";
                }
            } else {
                echo "Todos los campos son obligatorios.";
            }
    }
} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
}

?>