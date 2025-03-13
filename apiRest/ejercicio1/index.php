<?php
include 'institutodb.php';

// Método GET: Obtener todos los alumnos

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM alumnos";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] .  "<br>";
        }
    } else {
        echo "No hay alumnos registrados.";
    }
}

// Método POST: Insertar un nuevo alumno
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['_method'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
  

    $sql = "INSERT INTO alumnos (nombre, email) VALUES ('$nombre', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Alumno agregado correctamente.";
    } else {
        echo "Error al agregar alumno: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
