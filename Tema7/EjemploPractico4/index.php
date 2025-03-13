<?php 
include 'empresa.php';

try{
    
if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $sql="SELECT * FROM clientes";
    $resultado = $conexion->prepare($sql);
    $resultado->execute();

    if($resultado->rowCount()>0){
        while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
            echo "ID: {$fila['id']}, Nombre: {$fila['nombre']}, Email: {$fila['email']}, Telefono: {$fila['telefono']}<br>";
        }
    }
}

/* Forma sin BIND */
/* if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO clientes (nombre, email, telefono) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    if ($stmt->execute([$nombre, $email, $telefono])) {
        echo "Datos insertados";
    } else {
        echo "Error al insertar los datos";
    }
} */
/* Forma con el BIND */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['nombre'], $_POST['email'], $_POST['telefono'])) {
        $sql = "INSERT INTO clientes (nombre, email, telefono) VALUES (:nombre, :email, :telefono)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':telefono', $_POST['telefono']);

        if ($stmt->execute()) {
            echo "Cliente agregado correctamente.";
        } else {
            echo "Error al agregar el cliente.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
}catch(PDOException $e){
    echo"Error " . $e->getMessage();
}


?>