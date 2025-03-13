<!-- Tienda tabla productos id nombre precio, Descripcion -->
<?php 

$servidor="localhost";
$usuario="root";
$contraseña="";

$conexion = new mysqli($servidor,$usuario,$contraseña);
if($conexion->connect_error){
    die("Error" . $conexion->connect_error);
}
echo "Conectado Correctamente<br>";

$sql = "CREATE DATABASE IF NOT EXISTS tienda";
if($conexion->query($sql) === TRUE){
    echo "BBDD creada correctamente<br>";
}else{
    echo "Error" . $conexion->error;
}

$conexion->select_db("tienda");

$sql = "CREATE TABLE IF NOT EXISTS productos (id INT (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR (20), precio DECIMAL (4,2), descripcion VARCHAR (200))";
if($conexion->query($sql) === TRUE){
    echo "Tabla creada correctamente<br>";
}else{
    echo "Error" . $conexion->error;
}

class Producto{
    private $id;
    private $nombre;
    private $precio;
    private $descripcion;


    public function __construct($id,$nombre,$precio,$descripcion){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion= $descripcion;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id= $id;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre= $nombre;
    }

    public function getPrecio(){
        return $this->precio;

    }
    public function setPrecio($precio){
        $this->precio= $precio;

    }

    public function getDescripcion(){
        return $this->descripcion;

    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }

    public function guardarProducto($conexion){
        $sql = "INSERT INTO productos (nombre,precio,descripcion) VALUES (?,?,?)";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('sds', $this->nombre, $this->precio,$this->descripcion);
        $stmt->execute();
        $this->id = $stmt->insert_id;
    }

    public function obtenerProducto($conexion){
        $sql = "SELECT * FROM productos";
        
        $resultado = $conexion->query($sql);
        if($resultado->num_rows > 0){
            while($fila = $resultado->fetch_assoc()){
                echo "Id: {$fila['id']}, Nombre:{$fila['nombre']}, Precio: {$fila['precio']} Descripcion: {$fila['descripcion']}<br>"; 
            }
        }
    }
}

$producto1 = new Producto(1,"Pan",1.00,"Barra de Pan de Espelta");
$producto1->guardarProducto($conexion);
$producto1->obtenerProducto($conexion);

?>

