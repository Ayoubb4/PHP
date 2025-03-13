<?php
include 'institutodb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
    $id = $_POST['id'];

    if ($id) {
        $sql = "DELETE FROM alumnos WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Alumno eliminado correctamente.";
        } else {
            echo "Error al eliminar alumno: " . mysqli_error($conn);
        }
    } else {
        echo "ID no válido.";
    }
}

mysqli_close($conn);
?>
