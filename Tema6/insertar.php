<?php 
//INSERTAR DATOS DE FORMA NORMAL

$conn = new mysqli($servidor, $usuario, $contrasena, $base_datos);

$sql = "INSERT INTO miTabla (nombre, apellido, email) 
        VALUES ('Pablo', 'Martin', 'pablo@gmail.com')";

if (mysqli_query($conn, $sql)) {

    echo "Correcto";
} else {

    echo "Error" . $sql . mysqli_error($conn);
}





//INSERTAR DATOS ORIENTADO A OBJETOS

$conn = new mysqli($servidor, $usuario, $contrasena, $base_datos);


$sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Pablo', 'Perez','pablo@gmail.com')";

if ($conn->query($sql === TRUE)) {

    echo "Registro exitoso";
} else {
    echo "Error al registrar" . $sql . $conn->error;
}





//INSERTAR DATOS EN PDO


try {

    $conn = new mysqli($servidor, $usuario, $contrasena, $base_datos);


    $sql = "INSERT INTO miTabla(nombre,apellido,email)

    VALUES ('Pablo', 'Perez','pablo@gmail.com')";

    $conn -> query($sql);
    
    echo "Nuevo registro";
} catch (PDOException $e) {
    echo "Error ". $sql . $e -> getMessage();
}

/* Como insertar varios */

$sql = "INSERT INTO miTabla(nombre,apellido,email)

VALUES ('Pablo', 'Perez','pablo@gmail.com');";

$sql = "INSERT INTO miTabla(nombre,apellido,email)

VALUES ('Pedro', 'Guti','pedro@gmail.com');";

$sql = "INSERT INTO miTabla(nombre,apellido,email)

VALUES ('Luis', 'Gomez','luis@gmail.com');";
?>