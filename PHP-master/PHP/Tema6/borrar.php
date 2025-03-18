<?php 

/* Borrar */

    /* Normal */

    $sql = "DELETE FROM empleados WHERE id = 2";
    if(mysqli_query($conexion, $sql)){
        echo "Registro eliminado";
    }else{
        echo "Error". mysqli_error($conexion);
    }

/* Orientada a objetos */
    $sql = "DELETE FROM empleados WHERE id = 2";

    if($conexion -> query ($sql ===TRUE)){
        echo "Registro eliminado";
    }else{
        echo "Error". $conexion ->error;
    }

/* PDO */
    try{
        $sql = "DELETE FROM empleados WHERE id = 2";
        $conexion->query($sql);
        echo "Registro eliminado"; 
    }catch(PDOException $e){
        echo " Error " . $sql.$e->getMessage();            
    }

/* Borrar Tabla */
    /* Forma normal*/
        /* verificar si existe */
        $sql_check= "SHOW TABLES LIKE 'empleados'";
        $resultado = mysqli_query($conexion, $sql_check);

        if(mysqli_num_rows($resultado)>0){
            echo "Tabla encontrada";
            $sql = "DROP TABLE empleados";
                if (mysqli_query($conexion,$sql)) {
                    echo "Tabla eliminada";
                }else{
                    echo "Error" . mysqli_error($conexion);
                }
        }else{
            echo "La tabla no existe";
        }

/* Orientada a objetos */
        $sql_check = "SHOW TABLES LIKE 'empleados'";
        $resultado = $conexion -> query($sql_check);

        if($resultado ->num_rows > 0){
            $sql = "DROP TABLE 'empleados'";
            if ($conn -> query ($sql ===TRUE)){
                echo "Tabla eliminada";
            }else{
                echo "Error" . $conexion->error;
            }

        }else{
            echo "la tabla no existe";
        }
/* PDO */
    try{
        $sql_check = "SHOW TABLES LIKE 'empleados'";
        $resultado = $conexion -> query($sql_check);

        if($resultado -> rowCount() > 0){
            $sql = "DROP TABLE 'empleados'";
            $conexion = exec($sql);
            echo "Tabla eliminada";
        }else{
            echo "La tabla no existe";
        }
    }catch (PDOException $e){
        echo "Error ". $e ->getMessage();
    }


/* ELIMINAR BBDD */
    /* Forma Normal */
        $sql_check = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'baseDatos'";
        $resultado = mysqli_query($conexion,$sql_check);
        if(mysqli_num_rows($resultado)>0){
            $sql = "DROP DATABASE 'baseDatos'";
            if(mysqli_query($conexion,$sql)){
                echo "Base de datos eliminada";
            }else{
                echo "Error " . mysqli_error($conexion);
            }
        }else{
            echo"La tabla no existe";
        }

    /* Orientada a objetos */
        $sql_check = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = baseDatos";
        $resultado = $conexion->query($sql_check);
        
        if ($resultado->num_rows > 0) {
        
            $sql = "DROP DATABASE baseDatos";
        
            if ($conexion->query($sql === TRUE)) {
                echo "Base de datos eliminada";
            } else {
                echo "Error" . $conexion->error;
            }
        } else {
            echo "Base de datos no encontrada";
        }
    
    /* PDO */
        $servidor = "localhost";
        $usuario = "root";
        $contraseña = "";
        $base_datos = "biblioteca";  // Nombre de la base de datos a eliminar
        
    try {
        // Conectar al servidor de base de datos sin especificar una base de datos
        $conexion = new PDO("mysql:host=$servidor", $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Verificar si la base de datos existe
        $sql_check = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = baseDatos";
        $resultado = $conexion->prepare($sql_check);
        $resultado->execute();
    
        if ($resultado->rowCount() > 0) {
            // Si la base de datos existe, eliminarla
            $sql = "DROP DATABASE $base_datos";
            $conexion->exec($sql);
            echo "Base de datos '$base_datos' eliminada correctamente.<br>";
        } else {
            echo "Base de datos no encontrada.<br>";
        }
    
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    $conexion = null;



?>