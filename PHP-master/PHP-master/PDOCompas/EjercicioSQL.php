<!-- 1. Escribe un script en PHP que:
Se conecte a una base de datos llamada biblioteca usando PDO.
Cree una tabla llamada libros con las columnas:
id (INT, AUTO_INCREMENT, PRIMARY KEY)
titulo (VARCHAR(255), NOT NULL)
autor (VARCHAR(100), NOT NULL)
anio_publicacion (YEAR, NOT NULL)
Inserte tres registros en la tabla.
Busque e imprima los libros publicados después del año 2000.
Elimina la tabla. -->
<?php
$user = "rem";
$password= "123";
$server = "localhost";
$com = new PDO("mysql:host $server",$user,$password);

try{
    $com->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "<br>Conectado exitosamente<br>";

    $sql = "CREATE DATABASE IF NOT EXISTS biblioteca";
    $com->exec($sql);
    echo "Base de datos creada<br>";

    $sql = "USE biblioteca";
    $com->exec($sql);
    echo "Base de datos seleccionada<br>";

    $sql = "CREATE TABLE  IF NOT EXISTS libros(id INT AUTO_INCREMENT PRIMARY KEY,titulo VARCHAR(255) NOT NULL,autor VARCHAR(100) NOT NULL,anio_publicacion YEAR NOT NULL)";
    $com->exec($sql);
    echo "Tabla libros creada<br>";

    $sql = "INSERT INTO libros(titulo,autor,anio_publicacion) VALUES ('El Camino','Miguel Delibes',2000),('La estrategia del parásito','Oscar Herrero','2012'),('Fragmentos de Heráclito','Heráclito','157')";
    $com->exec($sql);
    echo "Libros insertados<br>";

    $resultado = $com->prepare("SELECT * FROM libros");
    $resultado->execute();
    
        echo "<table border=1><tr><th>ID</th><th>titulo</th><th>autor</th><th>anio_publicacion</th></tr>";
        while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$fila['id']}</td><td>{$fila['titulo']}</td><td>${fila['autor']}</td><td>{$fila['anio_publicacion']}</td></tr>";
        }
    
    $sql = "DROP TABLE libros";
    $com->exec($sql);
    echo "Tabla eliminada!<br>"; 
       
}catch(PDOException $e){
    echo $e->getMessage();
}