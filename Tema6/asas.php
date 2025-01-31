<?php

$servidor = "localhost";
$usuario = "root";
$constraseña = "";
$base_datos= "tienda";


try{
	$conexion = new PDO ("mysql:host = $servidor", $usuario,$contraseña);
	$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = "CREATE DATABASE IF NOT EXISTS $base_datos";
	$conexion -> exec($sql);
	echo "Base creada correctamente";

	$conexion -> execute("USE $base_datos");

	$sql = "CREATE TABLE IF NOT EXISTS usuarios VALUES (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR (50) NOT NULL, email VARCHAR(100) NOT NULL, rol VARCHAR(20) NOT NULL, activo BOOLEAN NOT NULL)";
	$conexion ->exec($sql);
	echo "Tabla creada correctamente";

	$sql = "INSERT INTO usuarios (nombre,email,rol,activo) VALUES ('Pepe', 'pepe@gmail.com', 'Cliente', TRUE), ('Mario', 'mario@gmail.com', 'Admin', TRUE), ('Marcos', 'marcos@gmail.com', 'Empleado', TRUE), ('Jorge', 'jorge@gmail.com', 'Empleado', FALSE)";

	
	$sql = "SELECT * FROM usuarios WHERE activo = TRUE";
	$resultado = $conexion->execute($sql);
	
	if($resultado -> rowCount() > 0 ){
		while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
			echo "{$fila[id]}, {$fila[nombre]},{$fila[email]},{$fila[rol]},{$fila[activo]}";
		}
	}

	$sql = "UPDATE usuarios SET activo = FALSE WHERE rol = 'cliente' AND activo = TRUE";
	$resultado = $conexion->exec($sql);

	$sql = "UPDATE usuarios SET rol = 'superadmin' WHERE rol = 'admin'";
	$resultado = $conexion->exec($sql);
	
	$sql = "SELECT * FROM usuarios";
	$resultado = $conexion->execute($sql);
	
	if($resultado -> rowCount() > 0 ){
		echo "<table border = '1'>
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Rol</th>
				<th>Activo</th>
			</thead>
		";
		while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
			echo "
			<tr>
				<td>{$fila[id]}</td>
				<td>{$fila[nombre]}</td>
				<td>{$fila[email]}</td>		
				<td>{$fila[rol]}</td>
				<td>{$fila[activo]}</td>		
		
			</tr>";
		}
		echo "</table>";
	}else{
		echo "No se encontro la tabla";
	}

	$sql ="DELETE FROM usuarios WHERE activo = FALSE";
	$conexion -> exec($sql);
	echo "Usuarios eliminados";

	$sql_table = "SHOW TABLES LIKE usuarios";
	$resultado = $conexion -> exec($sql_table);
	if($resultado -> rowCount()> 0){
		$sql = "DROP TABLES LIKE usuarios";
		$conexion -> exec($sql);
		echo "tabla eliminada";
	}else{
		echo "Tabla no encontrada";
	}
	
	$sql_check = "SELECT SCHEMA_NAME FROM INFORMATION SCHEMA";
	$resultado = $conexion -> exec($sql_check);
	
	if($resultado -> rowCount() > 0){
		$sql = "DROP DATABASES LIKE $base_datos";
		$conexion->exec($sql);
		echo "BASE de datos eliminada";
	}else{
		echo "No se encontro ninguna BBDD";
	}
}catch(PDOException $e){
echo "Error" . $e->getMessage($conexion);
}

$conexion -> close($conexion);
?>