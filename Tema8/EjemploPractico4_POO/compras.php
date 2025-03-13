<?php 

$servidor="localhost";
$usuario="root";
$contraseña="";

$conexion = new mysqli($servidor,$usuario,$contraseña);
if($conexion->connect_error){
    die("Error" . $conexion->connect_error);
}
echo "Conectado Correctamente<br>";

$sql = "CREATE DATABASE IF NOT EXISTS compras";
if($conexion->query($sql) === TRUE){
    echo "BBDD creada correctamente<br>";
}else{
    echo "Error" . $conexion->error;
}

$conexion->select_db("compras");

$sql = "CREATE TABLE IF NOT EXISTS pedidos (id INT (4) UNSIGNED AUTO_INCREMENT PRIMARY KEY, cliente VARCHAR (20), fecha DATE, total DECIMAL (10,2))";
if($conexion->query($sql) === TRUE){
    echo "Tabla creada correctamente<br>";
}else{
    echo "Error" . $conexion->error;
}

class pedido{
    private $id;
    private $cliente;
    private $fecha;
    private $total;


    public function __construct($id,$cliente,$fecha,$total){
        $this->id = $id;
        $this->cliente = $cliente;
        $this->fecha = $fecha;
        $this->total= $total;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id= $id;
    }

    public function getCliente(){
        return $this->cliente;
    }
    public function setCliente($cliente){
        $this->cliente= $cliente;
    }

    public function getFecha(){
        return $this->fecha;

    }
    public function setFecha($fecha){
        $this->fecha= $fecha;

    }

    public function getTotal(){
        return $this->total;

    }
    public function setTotal($total){
        $this->total=$total;
    }

    public function guardarPedido($conexion){
        $sql = "INSERT INTO pedido (cliente,fecha,total) VALUES (?,?,?)";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('ssd', $this->cliente, $this->fecha,$this->total);
        $stmt->execute();
        $this->id = $stmt->insert_id;
    }

    public function obtenerPedido($conexion){
        $sql = "SELECT * FROM pedido";
        
        $resultado = $conexion->query($sql);
        if($resultado->num_rows > 0){
            while($fila = $resultado->fetch_assoc()){
                echo "Id: {$fila['id']}, cliente:{$fila['cliente']}, fecha: {$fila['fecha']} total: {$fila['total']}<br>"; 
            }
        }
    }

    public function obtenerPedidoPorId($conexion, $id) {
        $sql = "SELECT * FROM pedidos WHERE id = $id";
        
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "Id: {$fila['id']}, Cliente: {$fila['cliente']}, Fecha: {$fila['fecha']}, Total: {$fila['total']}<br>";
            }
        } else {
            echo "No hay ningun pedido con ID $id<br>";
        }
    }

    public function actualizarPedidoPorId($conexion, $id, $cliente, $fecha, $total) {
        $sql = "UPDATE pedidos SET cliente = $cliente, fecha = $fecha, total = $total WHERE id = $id";
        
        if ($conexion->query($sql) === TRUE) {
            echo "Pedido actualizado.<br>";
        } else {
            echo "Error " . $conexion->error . "<br>";
        }
    }

    public function eliminarPedidoPorId($conexion, $id) {
        $sql = "DELETE FROM pedidos WHERE id = $id";
        
        if ($conexion->query($sql) === TRUE) {
            echo "Pedido eliminado <br>";
        } else {
            echo "Error" . $conexion->error . "<br>";
        }
    }
}

$pedido1 = new Pedido(1,"Pedro","10/08/2025",100.0);
$pedido1->guardarpedido($conexion);
$pedido1->obtenerpedido($conexion);

?>

