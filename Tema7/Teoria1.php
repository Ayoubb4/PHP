<?php 
    /*  LA api esta en medio entre el cliente y el servidor
        API REST: un conj de principios simples escalables y basado en protocolos HTTP
        4 operaciones:
        -GET:(leer datos)->(mostrar lista de los datos)
        -POST:(crear datos)->(Añadir datos)
        -PUT: actualizar datos
        -DELETE: eliminar
    */
    
    /* Ejemplo */

/* Globales */
    /*  $_SERVER
        $_GET
        $_POST
    */
/* Fin Globales */
    /*  PUT:
        file_get_contents('php//input')        
    */

    /* Ejercicio1 */
    /* Crear BBDD API con la tabla usuario */

/* Clase 2 */
    /*  PONEMOS 2 '$_POST['_method']' PORQ EN ESTE CASO ESTAMOS ACTUALIZANDO 2 PARAMETROS SI TUVIESEMOS MAS PUES MAS*//*
        Actualizar Datos PUT 
        Forma del PUT:
            
            if($_SERVER['REQUEST_METHOD'] === 'POST && isset($_POST['_method'] && $_POST['_method'] === 'PUT')'){
                parse_str(file_get_contents('php//input'), $_PUT);

            $nombre = $_PUT['nombre'];
            $email = $_PUT['email'];

            $stmt = $conexion->prepare('UPDATE usuarios SET nombre = "ANGELICO" AND email = "angelico@mail.com" WHERE nombre= "Messi" AND email= "messi@gmail.com"')

            }
    */

/* Delete */

/* 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {

        $id=$_POST['id'];

        $stmt = $conexion->prepare('DELETE * FROM usuarios WHERE id = ?');
        

    } 
*/
?>