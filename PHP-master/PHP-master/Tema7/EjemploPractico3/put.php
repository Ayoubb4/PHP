<?php 
include 'instituto.php';

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT'){
    parse_str(file_get_contents("php://input"), $_PUT);

    $id = $_PUT['id'];
    $nombre = $_PUT['nombre'];
    $nota = $_PUT['nota'];
    $asignatura = $_PUT['asignatura'];


    $sql = "UPDATE alumnos SET nombre = ?, nota = ?, asignatura = ? WHERE id = ?";

    $stmt = mysqli_prepare($conexion,$sql);

    mysqli_stmt_bind_param($stmt, 'sdsi', $nombre, $nota, $asignatura, $id);

    if(mysqli_stmt_execute($stmt)){
        echo"Datos actualizados";
    }else{
        echo"Error" . mysqli_stmt_error($stmt);
    }
}
?>