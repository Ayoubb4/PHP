<?php 

$servidor = "localhost";
$usuario = "usuario";
$constraseña = "contraseña";
$base_datos = "baseDatos";

$conn = new mysqli($servidor,$usuario,$constraseña,$base_datos);

if($conn -> connect_error){
    die("Error de conn $conn: ". $conn -> connect_error);
}
echo "Conectado correctamente";


try{
    $conn = new PDO("mysql:host = $servidor; dbname=$base_datos;", $usuario, $constraseña);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado correctamente";
}catch(PDOException $e){
    echo "Error en la conn $conn: ", $e ->getMessage();
}
$conn = null;
?>