<?php 
/* Solicitud de teoria1 */

include 'api.php';

if($_SERVER['REQUEST_METHOD'] ==='GET'){
    
    $sql = 'SELECT * FROM usuarios';
    $resultado= $conexion -> query($sql);
    if($resultado->num_rows>0){
        while($fila = $resultado->fetch_assoc()){
            echo "ID{$fila ['id']}<br> Nombre:{$fila ['nombre']}, Email:{$fila ['email']}<br>";
        };
    }
}

/* Metodo POST para el formulario */
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    /* Primero inserta y ya despues si se solicita se muestra */

    /* El prepare lo que realiza es un filtrado para evitar los ataques */
    $stmt = $conexion->prepare('INSERT INTO usuarios(nombre,email) VALUES (?,?)');
    /* Secuencia preparada actualizamos el registro del nombre y email */
    $stmt -> bind_param('ss',$nombre,$email);/* la ss significa que son strings */
    if($stmt -> execute()){
        echo"Usuario agregado";
    }else{
        echo "Error". $conexion->error;
    }
    
}
/* Actualiza */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
    parse_str(file_get_contents('php://input'), $_PUT);

    $nombre = $_PUT['nombre'];
    $email = $_PUT['email'];

    $stmt = $conexion->prepare('UPDATE usuarios SET nombre = ?, email = ? WHERE id = 1');
    $stmt->bind_param('ss', $nombre, $email);

    if ($stmt->execute()) {
        echo "Usuario actualizado";
    } else {
        echo "Error: " . $conexion->error;
    }
}else {
    echo "Metodo no permitido";
}


?>