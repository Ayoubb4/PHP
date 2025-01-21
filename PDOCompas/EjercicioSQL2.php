2. Escribe un script en PHP que:
Se conecte a una base de datos llamada restaurante usando PDO.
Crea una tabla llamada mesas con las columnas:
id (INT, AUTO_INCREMENT, PRIMARY KEY)
numero (INT, NOT NULL, UNIQUE)
estado (ENUM('Disponible', 'Ocupada'), DEFAULT 'Disponible')
Inserta cinco mesas (dos disponibles y tres ocupadas).
Recupera e imprime las mesas que estén disponibles.
Elimina la base de datos.
<?php
    $server= "localhost";
    $user="rem";
    $password="123";
    $com = new PDO("mysql:host=$server",$user,$password);

try{
    $com->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "<br>Conectado exitosamente<br>";
    $sql = "CREATE DATABASE IF NOT EXISTS restaurante";
    $com->exec($sql);
    echo "Base de datos creada<br>";
    $sql ="USE restaurante";
    $com->exec($sql);
    echo "Base de datos seleccionada";
    $sql= "CREATE TABLE IF NOT EXISTS mesas(id INT AUTO_INCREMENT PRIMARY KEY,numero INT NOT NULL UNIQUE,estado ENUM('Disponible','Ocupada') DEFAULT('Disponible'))";
    $com->exec($sql);
    echo "Tabla mesas creada<br>";
    //INSERTAR DISPONIBLES
    $sql = "INSERT INTO mesas(numero) VALUES (5),(6)";
    $com->exec($sql);
    $sql ="INSERT INTO mesas(numero,estado) VALUES(7,'Ocupada'),(8,'Ocupada'),(9,'Ocupada')";
    $com->exec($sql);
    echo "Mesas insertadas<br>";
    $stmt = $com->prepare("SELECT * FROM mesas");
    $stmt->execute();
    echo "<table border=1><tr><th>ID</th><th>numero</th><th>estado</th></tr>";
        while($fila = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$fila['id']}</td><td>{$fila['numero']}</td><td>${fila['estado']}</td></tr>";
        }
    $sql="DROP TABLE mesas";
    $com->exec($sql);
    echo "Mesas eliminadas<br>";
}catch(PDOEXception $e){
    echo $e->getMessage();
}