<!-- GET y POST -->
<?php 

include 'instituto.php';

if($_SERVER['REQUEST_METHOD'] === 'GET'){

    $sql = "SELECT * FROM alumnos";
    $resultado = mysqli_query($conexion,$sql);
        if(mysqli_num_rows($resultado) > 0){
            while($fila = mysqli_fetch_assoc($resultado)){
                echo "Id: {$fila['id']}, Nombre: {$fila['nombre']}, Nota: {$fila['nota']}, Asignatura: {$fila['asignatura']} <br>";
            }
        }
}


/* POST */

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $nota= $_POST['nota'];
    $asignatura = $_POST['asignatura'];

    $sql = "INSERT INTO alumnos (nombre,nota,asignatura) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conexion,$sql);

    mysqli_stmt_bind_param($stmt,'sds', $nombre,$nota,$asignatura);

    if(mysqli_stmt_execute($stmt)){
        echo"Datos insertados";
    }else{
        echo"Error" . mysqli_stmt_error($stmt);
    }
}

mysqli_close($conexion);

?>