<?php 

/* Verificacion normal */

if(mysqli_multi_query ($conn, $sql)){
    echo "";
}else{
    echo "Error" . $sql. $mysql_error($conn);
}

/* Verificion Orientada a Objetos */
if($conn -> multi_query($sql === TRUE)){}

/* Verificacion PDO */
try {
    $conn -> begin_transaction();

        $conn -> query("INSERT INTO empleados(nombre, apellidos,email)
        VALUES ('Pedro', 'Perez', 'pedro@gmail.com')");

        $conn -> query("INSERT INTO empleados(nombre, apellidos, email)
        VALUES('Luis','Gomez','luis@gmail.com')");
    
    $conn -> commit();
    echo "Registro correcto";
}catch(PDOException $e){
    $conn -> rollback();
    echo "Error" . $e->getMessage();
}

?>