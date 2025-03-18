<!-- Crear base de datos a 3 formas -->
 <!-- Forma normal -->
 <?php 

$servidor = "localhost";
$usuario = "usuario";
$constraseña = "contraseña";

$conn = mysqli_connect($servidor, $usuario, $contraseña);

if (!$conn) {
    die ("ERROR: " . mysqli_connect_error());
}
$sql = 'CREATE DATABASE baseDatos';

if(mysqli_query($conn,$sql)){
    echo "Base de datos correcta";
}else{
    echo "Error: ". mysqli_error($conn);
}
mysqli_close($conn);
?>
<!-- Orientada a objetos -->
<?php 
$servidor = "localhost";
$usuario = "usuario";
$constraseña = "contraseña";

$conn = new mysqli($servidor, $usuario, $contraseña);

$sql = 'CREATE DATABASE baseDatos';
if($conn -> query ($sql) === TRUE){
    echo "Base de datos creada correctamente";
}else{
    echo "Error: " . $num -> error;
}

$conn -> close();
?>
<!-- PDO -->
<?php 
$servidor = "localhost";
$usuario = "usuario";
$constraseña = "contraseña";

$conn = new mysqli($servidor,$usuario,$constraseña,$base_datos);

try{
    $conn = new PDO("mysql:host = $servidor; dbname=$base_datos;", $usuario, $constraseña);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conectado correctamente";
    $sql = 'CREATE DATABASE baseDatos';
    $conn = exec ($sql);
    echo "Base de datos creada correctamente";
}catch(PDOException $e){
    echo "Error en la conn$conn: ".$sql. $e ->getMessage();
}
$conn = null;
?>