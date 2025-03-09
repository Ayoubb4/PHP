<?php 

include 'empresa.php';

try {
    /* Sin el BIND */
/*     if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
        parse_str(file_get_contents("php://input"), $_DELETE);
    
        $id = $_DELETE['id'];

        $sql = "DELETE FROM clientes WHERE id = ?";
        
        $resultado = $conexion->prepare($sql);
        $resultado->execute([$id]);

        if ($resultado->rowCount() > 0) {            
            echo "Datos eliminados";
        } else {
            echo "No se encontro nada";
        }
    } */

    /* Con Bind */
/*  && isset($_POST['_method']) && $_POST['_method'] === 'DELETE' Siempre hay que poner esto por la entrada de datos da igual el numero de inputs*/
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE'){
        parse_str(file_get_contents("php://input"), result: $_DELETE);

        if (isset($_DELETE['id'])) {

            $sql = "DELETE FROM clientes WHERE id = :id";
            $stmt = $conexion->prepare($sql);
            
            $stmt->bindParam(':id', $_DELETE['id']);
    
            if ($stmt->execute()) {
                echo "Cliente eliminado correctamente.";
            } else {
                echo "Error al eliminar el cliente.";
            }
        } else {
            echo "Todos los campos son obligatorios.";
        }
}
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
