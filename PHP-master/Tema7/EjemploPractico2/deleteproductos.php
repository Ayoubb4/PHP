<?php 
include 'tienda.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {

    $id=$_POST['id'];

    $stmt = $conexion->prepare('DELETE FROM productos WHERE id = ?');

    $stmt->bind_param('i', $id);
    
    if ($stmt->execute()) {
        echo "producto eliminado";
    } else {
        echo "Error " . $stmt->error;
    }
    

} 


?>