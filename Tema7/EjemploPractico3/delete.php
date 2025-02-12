<?php 
include 'instituto.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);


    $id = $_DELETE['id'];

    $sql= "DELETE FROM alumnos WHERE id = ?";

    $stmt = mysqli_prepare($conexion,$sql);

    mysqli_stmt_bind_param($stmt,'i', $id);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "Alumno eliminado";
    } else {
        echo "Error " . mysqli_stmt_error($stmt);
    }
} 

?>