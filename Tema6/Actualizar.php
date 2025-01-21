<?php 

/* Actualizar Tabla */

/* ID|NOMBRE|APELLIDO
    2   LAURA   LOPEZ */

/* Forma normal */
$sql = "UPDATE empleados SET apellido = 'Garcia' WHERE ID = 2";

if(mysqli_query($conexion, $sql)){
    echo "Registro modificado";
}else{
    echo "Error". mysqli_error($conexion);
}

/* Orientada a objetos */
$sql = "UPDATE empleados SET apellido = 'Garcia' WHERE ID = 2";

if($conexion -> query ($sql ===TRUE)){
    echo "Registro modificado";
}else{
    echo "Error". $conexion ->error;
}

/* PDO */
try{
    $stmt = $conexion -> prepare($sql);
    $stmt -> execute();
    echo $stnt -> rowCount() . "registro modificadfo";
    
}catch(PDOException $e){
    echo "Error " .$sql. $e->getMessage();
}

?>