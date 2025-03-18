<!-- //Crear a una base de datos llamada tienda, crear una tabla productos con id(INT(4) AUTO_INCREMENT PRIMARY KEY), nombre(VARCHAR(50) NOT NULL), precio(DECIMAL(10,2) NOT NULL)

//INSERTAR TRES PRODUCTOS EN LA TABLA E IMPRIMIR LA TABLA -->
<?php
$servidor = "localhost";
$usuario = "root";
$base_datos = "tienda";

$conexion = new mysqli($servidor, $usuario);

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $base_datos";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada<br>";
} else {
    die("Error " . $conexion->error);
}

$conexion->select_db($base_datos);

$sql = "CREATE TABLE IF NOT EXISTS productos (
    id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
)";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla creada <br>";
} else {
    die("Error " . $conexion->error);
}

$sql = "INSERT INTO productos (nombre, precio) 
        VALUES ('Lechuga', '2,00'),
        ('Pomelo', '5,00'),
        ('Carne', '4,00')";

if (mysqli_query($conexion, $sql)) {

    echo "Correcto";
} else {

    echo "Error" . $sql . mysqli_error($conexion);
}

//Recuperar e imprimir
$sqL = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sqL);

if(mysqli_num_rows($resultado) > 0){
    echo "<table border = '1'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>";
while($fila = mysqli_fetch_assoc($resultado)){
        echo "<tr>
        <td>{$fila ['id']}</td>
        <td>{$fila ['nombre']}</td>
        <td>{$fila ['precio']}</td>
        </tr>";
}
echo "</table>";
}

mysqli_close($conexion);
?>