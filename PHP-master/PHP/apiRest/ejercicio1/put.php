<?php
include 'institutodb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
   

    if ($id && $nombre && $email) {
        $sql = "UPDATE alumnos SET nombre='$nombre', email='$email' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Alumno actualizado correctamente.";
        } else {
            echo "Error al actualizar alumno: " . mysqli_error($conn);
        }
    } else {
        echo "Datos incompletos.";
    }
}

mysqli_close($conn);
?>
