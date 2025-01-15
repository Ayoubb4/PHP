<!-- Tabla producto 3 columnas id nombre y precio -->

<?php 
/* Forma normal */
    $sql = "SELECT id, nombre, precio FROM productos";

    $resultado = mysqli_query($conn, $sql);
    if(mysqli_num_rows($resultado)> 0){
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "ID del producto" . $fila["id"];
            echo "Nombre del producto " . $fila["nombre"];
            echo "Precio del producto" . $fila["precio"];
        }
    }else{
        echo "No hay resultados";
    }


/* Orientada a objetos */
$sql = "SELECT id, nombre, precio FROM productos";

$resultado = $conn -> query($sql);

if($resultado ->num_rows > 0){
    while($fila = $resultado -> fetch_assoc()){
        echo "ID del producto" . $fila["id"];
        echo "Nombre del producto " . $fila["nombre"];
        echo "Precio del producto" . $fila["precio"];    
    }
}else{
    echo"No hay productos";
}

/* PDO */
try{
$sql = "SELECT id, nombre, precio FROM productos";

$resultado = $conn -> query($sql);

if ($resultado -> rowCount()>0){
    while($fila = $resultado ->fetch(PDO::FETCH_ASSOC)){
        echo "ID del producto" . $fila["id"];
        echo "Nombre del producto " . $fila["nombre"];
        echo "Precio del producto" . $fila["precio"];     
    }
}else{
    echo "No hay productos";
}
}catch(PDOException $e){
    echo "Error" . $e->getMessage();
}

?>