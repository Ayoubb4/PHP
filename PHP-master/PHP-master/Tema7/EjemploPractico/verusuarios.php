<?php 
include 'API.php';

$sql = 'SELECT * FROM usuarios';
$resultado = $conexion->query($sql);
if($resultado->num_rows>0){
    while($fila = $resultado->fetch_assoc()){
        echo "ID{$fila ['id']}<br> Nombre:{$fila ['nombre']}, Email:{$fila ['email']}<br>";
    };
}

?>