<?php 

/* Base de datos tienda y tabla usuarios id y nombre */

$servidor = "localhost";
$usuario="root";
$contraseña ="";

$conexion = new mysqli($servidor, $usuario, $contraseña);
if($conexion->connect_error){
    die("Error" . $conexion->connect_error);
}
echo "Conexion Correcta <br>";

$sql = "CREATE DATABASE IF NOT EXISTS tienda";
if($conexion->query($sql)  === TRUE){
    echo"BBDD creada correctamente <br>";
}else{
    echo "Error " . $conexion->error;
}

$conexion->select_db("tienda");

$sql = "CREATE TABLE IF NOT EXISTS usuarios (id INT (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR (20))";
if($conexion->query($sql) === TRUE){
    echo "Tabla creada correctamente <br>";
}else{
    echo "Error " . $conexion->error;
}

class Usuario{
    private $id;
    private $nombre;

    private $insert_id;
    public function __construct($id,$nombre){
        $this->id=$id;
        $this->nombre=$nombre;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id= $id;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function guardarUsuarios($mysqli){
        $sql = "INSERT INTO usuarios (nombre) VALUES (?)";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s', $this->nombre);
        $stmt->execute();
        $this->id = $stmt->insert_id;
        $stmt->close();
    }

    public function obtenerUsuarios($mysqli){
        $sql = "SELECT * FROM usuarios";

        $resultado = $mysqli->query($sql);
        if($resultado->num_rows > 0){
            while($fila = $resultado->fetch_assoc()){
                echo "Id: {$fila['id']}, Nombre:{$fila['nombre']} <br>"; 
            }
        }
    }

}

$manuel = new Usuario(1,"Manuel");
$manuel->guardarUsuarios($conexion);
echo "Usuario Creado ". "ID: ".$manuel->getId(). " Nombre: ".$manuel->getNombre(). "<br>";

$manuel->obtenerUsuarios($conexion);
?>