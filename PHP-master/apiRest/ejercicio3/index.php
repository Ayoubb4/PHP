<?php
include 'empresadb.php';

// Método GET: Obtener empleados
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $conn->query("SELECT * FROM empleados");
    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Email: " . $fila['email'] . " - Teléfono: " . $fila['telefono'] . "<br>";
    }
}

// Método POST: Insertar nuevo empleado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre'], $_POST['email'], $_POST['telefono'])) {
        $sql = "INSERT INTO empleados (nombre, email, telefono) VALUES (:nombre, :email, :telefono)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':telefono', $_POST['telefono']);

        if ($stmt->execute()) {
            echo "Empleado agregado correctamente.";
        } else {
            echo "Error al agregar el empleado.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>
