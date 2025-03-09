<?php 
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
try{
    $conexion = new PDO("mysql:host = $servidor", $usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE if NOT EXISTS tienda";
    $conexion->exec($sql);
    echo"base de datos creada<br>";

    $conexion->exec("USE tienda");



    $sql = "CREATE TABLE IF NOT EXISTS usuarios (id INT (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY , nombre  VARCHAR(20))";
    $conexion->exec($sql);
    echo"Tabla creada correctamente<br>";

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
            $stmt->execute($this->nombre);
            $this->id = $stmt->insert_id;
        }
    
        public function obtenerUsuarios($mysqli){
            $sql="SELECT * FROM usuarios";
            $resultado = $mysqli->prepare($sql);
            $resultado->execute();
        
            if($resultado->rowCount()>0){
                while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
                    echo "ID: {$fila['id']}, Nombre: {$fila['nombre']}<br>";
                }
            }
        }
        
    }

$manuel = new Usuario(1,"Manuel");
$manuel->guardarUsuarios($conexion);
echo "Usuario Creado ". "ID: ".$manuel->getId(). " Nombre: ".$manuel->getNombre(). "<br>";

$manuel->obtenerUsuarios($conexion);
}catch(PDOException $e){
    echo "Error" . $e->getMessage();
}




?>